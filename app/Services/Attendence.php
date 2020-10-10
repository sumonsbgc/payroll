<?php

namespace App\Services;

use App\User;
use App\Attendance;
use App\LeaveApplication;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class Attendence
{

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

    public function getUsers()
    {
        $results = $this->logs();
        $users = array_column($results->log, 'registration_id');
        $users = array_unique($users, SORT_STRING);
        return Arr::sort($users);
    }

    public function getCheckInTime()
    {
        $today = date('Y-m-d');
        $schedule = [
            "start_date" => $today,
            "end_date"   => $today,
            "start_time" => "05: 00: 00",
            "end_time"   => "23: 59: 00"
        ];
        $results = $this->logs($schedule);
        $checkin = array_column(array_reverse($results->log), 'access_time', 'registration_id');
        return $checkin;
    }

    public function getCheckOutTime()
    {
        $today = date('Y-m-d');
        $schedule = [
            "start_date" => $today,
            "end_date"   => $today,
            "start_time" => "05: 00: 00",
            "end_time"   => "23: 59: 00"
        ];
        $results = $this->logs($schedule);

        $checkout = array_column($results->log, 'access_time', 'registration_id');
        return $checkout;
    }

    // For Cron Job
    public function setAttendence()
    {
        if(date('l') !== 'Friday'){}

        $checkin = $this->getCheckInTime();
        if (!empty($checkin)) {
            $checkout = $this->getCheckOutTime();
            $employees = User::where('role', '2')->get(['id', 'fingerprint_user_id']);
            $date = date('Y-m-d');

            foreach ($employees as $emp) {
                $attendance_status = isset($checkin[$emp->fingerprint_user_id]) || isset($checkout[$emp->fingerprint_user_id]) ? 1 : 0;

                if($attendance_status !== 1){
                    $leave = LeaveApplication::where('created_by', $emp->id)
                    ->where('publication_status', 1)
                    ->whereDate('start_date', '<=', $date)
                    ->whereDate('end_date', '>=', $date)
                    ->first();
                    
                    if(!empty($leave) && !is_null($leave->leave_category_id ?? null) ){
                        $leave_status = $leave->leave_category_id;
                    }else{
                        $leave_status = 0;
                    }

                }else{
                    $leave_status = 0;
                }

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
                        'leave_category_id' => $leave_status,
                        'check_in' => isset($checkin[$emp->fingerprint_user_id]) ? $checkin[$emp->fingerprint_user_id] : null,
                        'check_out' => isset($checkout[$emp->fingerprint_user_id]) ? $checkout[$emp->fingerprint_user_id] : null,
                    ]
                );
            }
        }

    }
}
