<?php

namespace App\Http\Controllers;

use App\device;
use Illuminate\Http\Request;

use App\Http\Requests;

class monitoring extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }




    public function  mon()
    {

       $device = device::all();
        $arr = Array('device'=>$device);

        return view("mon",$arr);
    }





}
