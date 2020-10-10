<?php

namespace App\Http\Controllers;

use App\User;
use App\Attendance;
use Illuminate\Support\Arr;
use App\Services\Attendence;

class MachineAttController extends Controller
{
    private $attendence;

    public function __construct(Attendence $attendence)
    {
        $this->attendence = $attendence;
    }

    public function getLog()
    {
        $schedule = [
            "start_date" => "2020-09-26",
            "end_date"   => "2020-09-26",
            "start_time" => "05: 00: 00",
            "end_time"   => "23: 59: 00"
        ];

        $results = $this->attendence->logs($schedule);
        $users = $this->attendence->users();

        $start_users = array_column(array_reverse($results->log), 'access_time', 'registration_id');
        $end_users = array_column($results->log, 'access_time', 'registration_id');

        return view('home', ["start" => $start_users, "end" => $end_users]);
    }


    public function setAttendence(){
        $employees = User::where('role', '2')->get(['id', 'fingerprint_user_id']);        
        // dd($employees->all());
        $checkin = $this->attendence->getCheckInTime();
        if (!empty($checkin)) {
        $checkout = $this->attendence->getCheckOutTime();
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

    public function filter(){
        //dd(array_column($results->log, 'access_time', 'registration_id'));

        $results = $this->attendence->logs();
        foreach($results as $re){
            
        }

    }

}
