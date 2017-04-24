<?php

namespace App\Http\Controllers;

use App\consumption;
use App\device;
use Illuminate\Http\Request;

use App\Http\Requests;
use PhpParser\Node\Expr\Array_;

class consumptioncontrol extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function device_consumption()
    {


        $devices =device::all();
        $ar = Array('devices'=>$devices);

        return view('consumption_devices',$ar);
    }




    public function consumption_each_dev($id)
    {


        $devic = device::find($id);

        $consume = $devic->consumption ;

        $ar =Array('consume'=>$consume);

        return view('show_consumption' ,$ar);

    }



}
