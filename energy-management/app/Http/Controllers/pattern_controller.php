<?php

namespace App\Http\Controllers;

use App\pattern;
use App\Pattern_device;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
class pattern_controller extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }




    public  function  pattern_of_rationalize()
    {

        $user_type =  Auth::user()->user_type;

        if($user_type == 'admin') {
            $pattern = pattern::all();
            $ar = Array('pattern' => $pattern);

            return view('pattern_of_rationalize', $ar);
        }
        else{




            return view('error');
        }
    }




    public  function  show_event($id)
    {
        $pattern = pattern::find($id);


       $pattern_device = Pattern_device::where('pattern_id', $id);


        $pattern_device = $pattern-> devices ;

        //$pattern_device = Pattern_device::where('pattern_id',$id);

       // echo $id ;
       //echo $pattern_device ;

         $ar =Array('pattern_device'=>$pattern_device);

       return view('show_event',$ar);
    }



}
