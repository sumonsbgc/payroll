<?php

namespace App\Http\Controllers;

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

        // dd(collect(collect($results)->collapse()->all()));


        return view('home', ["start" => $start_users, "end" => $end_users]);
    }

    public function filter(){
        //dd(array_column($results->log, 'access_time', 'registration_id'));

        $results = $this->attendence->logs();
        foreach($results as $re){
            
        }

    }

}
