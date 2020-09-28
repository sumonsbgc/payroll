<?php 

namespace App\Services;

class Curl{

    public function jsonData($operation, array $schedule = []){

        $data = [
            "operation" =>  $operation,
            "auth_user" =>  "S.A.Corporation",
            "auth_code" =>  "hdufs7834hj3hwe987fsdjdf77fdjfh",
        ];

        switch($operation){
            case 'fetch_log': {
                $fetch_data = array_merge($data, $schedule);
                return json_encode($fetch_data);
            }
            case 'fetch_user_in_device_list':{
                return json_encode($data);
            }

            case 'fetch_user_list':{
                return json_encode($data);
            }

            case 'fetch_device_detail':{
                return json_encode($data);
            }
        }

    }

    public function init($data){
        $url = config('app.device_api_url');
        $request = curl_init($url);

        $this->option($request, $data);

        $results = curl_exec($request);

        return $results;
    }

    public function option($request, $data){
        curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($request, CURLINFO_HEADER_OUT, true);
        curl_setopt($request, CURLOPT_POST, true);
        curl_setopt($request, CURLOPT_POSTFIELDS, $data);
        curl_setopt($request, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($data)));
    }

}
