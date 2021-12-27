<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Maps extends BaseController
{
    public function index()
    {
        return view('map/index');
    }

    public function getAll(){
        $data = $_POST['post'];
        $mapsmodel = new \App\Models\Maps();
        $datas = $mapsmodel->whereIn('category',$data)->findAll();
        return json_encode($datas);
    }

    public function getCity($city){
        $data = $_POST['post'];
        $mapsmodel = new \App\Models\Maps();
        $datas = $mapsmodel->where('city',$city)->whereIn('category',$data)->findAll();
        return json_encode($datas);
    }
}
