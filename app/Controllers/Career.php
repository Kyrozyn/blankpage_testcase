<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Career extends BaseController
{
    public function index()
    {
        $career = new \App\Models\Career();
        $jobfairs = $career->where('category','Job Fair')->findAll();
        $campushiring = $career->where('category','Campus Hiring')->findAll();
        return view('career/index',compact('jobfairs','campushiring'));
    }

    public function detail($id)
    {
        $jobfair = new \App\Models\Career();
        $career = $jobfair->find($id);
        return view('career/career_detail',compact('career'));
    }
}
