<?php

namespace App\Http\Controllers;

use App\consumption;
use App\device;
use App\Device_user;
use App\group;
use App\Group_device;
use App\Group_user;
use App\pattern;
use App\Pattern_device;
use App\Pattern_event;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Http\Requests;

class groupcontroller extends Controller
{
    //



    public function test ()
    {
    /*    $dev = new device();



           $dev->name = 'device 2';
           $dev->description ='this is second  device ';
           $dev->current_state =0;
           $dev->save();
           $gro =new group();
           $gro->name ='lighting';
           $gro->description ='this is group of lighting ';
           $gro->save();
           $gpd = new Group_device();
           $gpd->device_id = $dev->id;
           $gpd->group_id = $gro->id;
           $gpd->save();*/
         // $s = group::find(1);
          //echo  $s-> devices ;

      //  $gpd  =Group_device::find(1);
        //echo $newdevice -> users ;




       /* $d = new Group_user();
        $d->user_id = 2;
        $d->group_id = 1 ;
        $d->save();
        $newdevice = group::find(1);
        echo $newdevice -> users ;*/

       /* $cons = new consumption();
        $cons->device_id =1 ;
        $cons->consumption_cost =2000;
        $cons->consumption_amount =2000;
        $cons->save();*/

       // $current_time ='0000-00-00 00:00:00'->toDayDateTimeString();
        ////$dtime = DateTime::createFromFormat("y/m/d G:i", "2017-04-19 23:34:27");
       // $timestamp = $dtime->getTimestamp();
         //$cons = new consumption();
        //$cons->consumption_hour =$current_time;
       // $cons->device_id =1 ;
       // $cons->consumption_cost =2000;
       // $cons->consumption_amount =2000;
       // $cons->save();
      // $con = consumption::find($current_time);

        /*$patterm =new pattern();
        $patterm->action_id =1;
        $patterm->acceptance =1;
        $patterm->confidence = 10 ;
        $patterm->support =10;
        $patterm->save;*/
         /*$pattern_device = new Pattern_device();

       $pattern_device->device_id =2;
        $pattern_device->pattern_id =2 ;
        $pattern_device->save();*/

      /* $t =new  Device_user();
       $t->device_id = 1 ;
       $t->user_id = 1;
       $t->save();*/
       //$d = device::find(1);

       // echo $d->users;
        //$f =user::find(2);
        //echo  $f->devices  ;


        $people = User::find(1);

       echo  $people ->devices ;



        //  foreach ($newdevice -> devices  as $v )
         //  echo $v.name;
        //echo $gpd;

    }
}
