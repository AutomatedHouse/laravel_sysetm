<?php

namespace App\Http\Controllers;

use App\device;
use Illuminate\Support\Facades\Auth;
use App\group;
use App\Group_device;
use App\Group_user;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class groupcontroling extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function creategroup(Request $request)
    {
        $user_type =  Auth::user()->user_type;

        if($user_type == 'admin') {
            $allgroup = group::all();

            $ar1 = Array('allgroup' => $allgroup); //array('allgroup'=>$allgroup);

            if ($request->isMethod('post')) {
                $this->validate($request, ['group_name' => 'required|max:255', 'description' => 'required|max:255']);
                $grop = new group();
                $grop->name = $request->input('group_name');
                $grop->description = $request->input('description');
                $grop->save();
                // redirect('groupcreating');

                $allgroup = group::all();
                $ar = Array('allgroup' => $allgroup);
                return view('groupcreating', $ar);

            }


            /*  */

            return view('groupcreating', $ar1);
        }
        else{

            return view('error');

        }

    }



    public function updating(Request $request,$id)
    {


        if($request ->isMethod('post'))
        {
            $this->validate($request ,['group_name'=>'required|max:255','description'=>'required|max:255']);
            $newgroup = group::find($id);
            $newgroup ->name = $request->input("group_name");
            $newgroup ->description = $request->input("description");
            // $newproduct->setUpdatedAt()
            $newgroup->save();
            return redirect("grouping");
        }
        else{
            $newgroup = group::find($id);
            $arra = Array('newgroup'=>$newgroup);
            return view("update_group",$arra);

        }


    }








    public  function assign_device(  Request $requist, $id )
    {



        if($requist->isMethod('post'))
        {



            $this->validate($requist ,['device_name'=>'required']);

            $nameofdevice =$requist->input('device_name');
            $idofdevice = device::where('name',$nameofdevice )->first();

            $gro_device = new Group_device();

            $gro_device->device_id = $idofdevice->id;

            $gro_device->group_id = $id;

            $gro_device->save();





           // $alldevices =group::find($id);
           // $value = $alldevices-> devices();
            $alldevices =device::all();

            $group =group::find($id);


            $value =$group-> devices ;

            //echo $value;

            $ar=  Array('value'=>$value,'alldevices'=>$alldevices,'group'=>$group);

                // dd($value);
           return view('assign_device',$ar);
        }
        else{


            //$alldevices =group::find($id);

            $alldevices =device::all();

            $group =group::find($id);
            $value = $group-> devices;
            //echo $value;

            $ar=  Array('value'=>$value,'alldevices'=>$alldevices,'group'=>$group);


            return view('assign_device',$ar);

        }



        /*
         *
         *   $allgroup =group::all();

        $ar1=  Array('allgroup'=>$allgroup); //array('allgroup'=>$allgroup);

        if($request->isMethod('post'))
        {
         $this->validate($request,['group_name' => 'required|max:255', 'description'=>'required|max:255' ]);
         $grop = new group();
         $grop->name = $request->input('group_name');
         $grop->description = $request->input('description');
         $grop->save();
           // redirect('groupcreating');

            $allgroup =group::all();
            $ar=  Array('allgroup'=>$allgroup);
         return view('groupcreating',$ar);

        }



        /*  */

       // return view('groupcreating',$ar1);



    }







    public function  group_user( Request $requist, $id )
    {


        if ($requist->isMethod('post')) {


            $this->validate($requist, ['user_email' => 'required']);

            $emailofuser = $requist->input('user_email');


            $idofuser = User::where('email', $emailofuser)->first();

            $gro_user = new Group_user();

            $gro_user->user_id = $idofuser->id;

            $gro_user->group_id = $id;

            $gro_user->save();


            $user = User::all();

            $group = group::find($id);


            $user_group = $group->users;

            //echo $value;

            $ar = Array('user_group' => $user_group, 'user' => $user, 'group' => $group);

            // dd($value);
            return view('group_user', $ar);
        } else {


            //$alldevices =group::find($id);

            $user = User::all();

            $group = group::find($id);
            $user_group = $group->users;
            //echo $value;

            $ar = Array('user_group' => $user_group, 'user' => $user, 'group' => $group);


            return view('group_user', $ar);


        }
    }

}
