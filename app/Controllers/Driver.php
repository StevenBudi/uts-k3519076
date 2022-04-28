<?php

namespace App\Controllers;

use App\Models\DriverModel;
use Config\Services;

class Driver extends BaseController
{
    public function index()
    {
        
        $data = [
            'title' => 'User List',
            'path' => 'driver'
        ];

        return view('driver', $data);
    }

    public function ajaxList()
    {
        $request = Services::request();
        $datatable = new DriverModel($request);

        if ($request->getMethod(true) === 'POST') {
            $lists = $datatable->getDatatables();
            $data = [];
            $no = $request->getPost('start');

            foreach ($lists as $list) {
                $no++;
                $row = [];
                $row[] = $no;
                $row[] = $list->nama;
                $row[] = $list->product_type;
                $row[] = $list->product_series;
                $row[] = $list->os;
                $row[] = $list->language;
                $row[] = $list->download_type;
                $data[] = $row;
            }

            $output = [
                'draw' => $request->getPost('draw'),
                'recordsTotal' => $datatable->countAll(),
                'recordsFiltered' => $datatable->countFiltered(),
                'data' => $data
            ];

            echo json_encode($output);
        }
    }
}
