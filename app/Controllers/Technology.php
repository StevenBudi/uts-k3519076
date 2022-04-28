<?php

namespace App\Controllers;

class Technology extends BaseController
{
    public function index()
    {
        $uri = "http://devel.crissad.com/api/nvidia";
        $json_data = file_get_contents($uri);
        $response_data = json_decode($json_data, true);
        $data = [
            "api_res" => $response_data,
            "path" => "teknologi",
        ];
        return view('technology', $data);
    }
}
