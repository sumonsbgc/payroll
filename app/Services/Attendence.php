<?php 

namespace App\Services;

use Illuminate\Support\Arr;

class Attendence{

    private $curl;

    public function __construct(Curl $curl)
    {
        $this->curl = $curl;
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

}
