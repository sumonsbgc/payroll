<?php 

namespace App\Services;

use App\User;
use App\Attendance;
use Illuminate\Support\Arr;

class Attendence{

    private $curl;

    public function __construct()
    {
        $this->curl = new Curl;
    }

    public function logs(array $schedule = [])
    {
        $default = [
            "start_date" => "2020-09-23",
            "end_date"   => "2020-09-23",
            "start_time" => "08: 00: 00",
            "end_time"   => "23: 00: 00"
        ];

        $schedule = !empty($schedule) ? $schedule : $default;

        $data    = $this->curl->jsonData('fetch_log', $schedule);
        $results = $this->curl->init($data);
        $results = json_decode($results);

        return $results;
    }

    public function users()
    {
        $data    = $this->curl->jsonData('fetch_user_in_device_list');
        $results = $this->curl->init($data);
        // $results = explode("),", $results);
        return $results;
    }

    public function getDeviceDetails()
    {
        $data    = $this->curl->jsonData('fetch_device_detail');
        $results = $this->curl->init($data);

        return $results;
    }

    public function getUsers(){
        $results = $this->logs();
        $users = array_column($results->log, 'registration_id');
        $users = array_unique($users, SORT_STRING);
        return Arr::sort($users);
    }

    public function getCheckInTime(){        
        $schedule = [
            "start_date" => "2020-10-02",
            "end_date"   => "2020-10-02",
            "start_time" => "05: 00: 00",
            "end_time"   => "23: 59: 00"
        ];

        $results = $this->logs($schedule);
        $checkin = array_column(array_reverse($results->log), 'access_time', 'registration_id');
        return $checkin;
    }

    public function getCheckOutTime(){
        $schedule = [
            "start_date" => "2020-10-02",
            "end_date"   => "2020-10-02",
            "start_time" => "05: 00: 00",
            "end_time"   => "23: 59: 00"
        ];
        $results = $this->logs($schedule);

        $checkout = array_column($results->log, 'access_time', 'registration_id');
        return $checkout;
    }

    // For Cron Job
    public function setAttendence(){
        $checkin = $this->getCheckInTime();
        if (!empty($checkin)) {

        $checkout = $this->getCheckOutTime();
        $employees = User::where('role', 'employee')->get(['id', 'fingerprint_user_id']);

        $date = date('Y-m-d');

            foreach ($employees as $emp) {
                $attendance_status = isset($checkin[$emp->fingerprint_user_id]) || isset($checkout[$emp->fingerprint_user_id]) ? 1 : 0;                
                Attendance::updateOrCreate(
                    [
                        'attendance_date' => $date,
                        'user_id' => $emp->id
                    ],
                    [
                        'created_by' => 1,
                        'user_id' => $emp->id,
                        'attendance_date' => $date,
                        'attendance_status' => $attendance_status,
                        'leave_category_id' => $attendance_status == 0 ? 0 : 1,
                        'check_in' => isset($checkin[$emp->fingerprint_user_id]) ? $checkin[$emp->fingerprint_user_id] : null,
                        'check_out' => isset($checkout[$emp->fingerprint_user_id]) ? $checkout[$emp->fingerprint_user_id] : null,
                    ]
                );
            }
        }
    }

}
