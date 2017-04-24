<?php

namespace App\Http\Controllers;

use App\device;
use App\Device_user;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

class device_controller extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth');
    }



    public  function show_devices()
    {
        $user_type =  Auth::user()->user_type;
        if($user_type=='admin') {

            $dev = device::all();

            $ar = Array('dev' => $dev);


            return view('show_devices', $ar);
        }
        else{

            return view('error');

        }
    }



    public  function assign_device_user(Request $requist ,$id )
    {
        if ($requist->isMethod('post')) {


            $this->validate($requist, ['user_email' => 'required']);

            $emailofuser = $requist->input('user_email');


            $idofuser = User::where('email', $emailofuser)->first();
            $dev_user = new Device_user();

            $dev_user->user_id = $idofuser->id;

            $dev_user->device_id = $id;


            if(!($dev_user->save())) {



               $dev_user->save();
            }


            $user = User::all();

            $device= device::find($id);


            $user_device =$device ->users;

            //echo $value;

            $ar = Array('user_device' => $user_device, 'user' => $user, 'device' => $device);

            // dd($value);
            return view('assign_device_user', $ar);
        } else {


            //$alldevices =group::find($id);

           // $user = User::all();
            $user = User::all();
            //$device = device::find($id);
            $device =device::find($id);


            $user_device = $device->users;


            $ar = Array('user_device' => $user_device, 'user' => $user, 'device' => $device);


            return view('assign_device_user', $ar);


        }



    }












}
