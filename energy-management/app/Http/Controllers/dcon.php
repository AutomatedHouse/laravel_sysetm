<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\device;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

class dcon extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function  control()
    {
       $respt="";

       $arr =array('respt'=>$respt);
        return view("control",$arr);
    }


    public function store($action){

      if($action =='1off')
      {
        $newdevice = device::find(1);
        $newdevice->current_state = 0;

          $newdevice->save();


         /* $client = new Client();
          $res = $client->request('get', 'flow-app.eu-gb.mybluemix.net/test1?device_id=1&device_state=0
', [
              'device_state' => [
                  'device_id'=>'1',
                  'device_state'=>'0',
                  // 'secret' => 'test_secret',
              ]
          ]);*/



          $client = new Client();

          $response = $client->post('flow-app.eu-gb.mybluemix.net/test1?', [
              'json' => ['device_id' => '1','device_state'=>'0']
          ]);


        //  echo $res->getStatusCode();
          // "200"
         // echo $res->getHeader('content-type');
          // 'application/json; charset=utf8'
          //echo $res->getBody();
          // {"type":"User"...'



        return redirect('control');
      }
      elseif ($action =='1on')
      {
          $newdevice = device::find(1);
          $newdevice->current_state = 1;

          $newdevice->save();

          /*$client = new Client();
          $res = $client->request('get', 'flow-app.eu-gb.mybluemix.net/test1?device_id=1&device_state=1
', [
              'device_state' => [
                  'device_id'=>'1',
                  'device_state'=>'1',
                  // 'secret' => 'test_secret',
              ]
          ]);*/


          $client = new Client();

          $response = $client->post('flow-app.eu-gb.mybluemix.net/test1?', [
              'json' => ['device_id' => '1','device_state'=>'1']
          ]);
         // dd($response);
          $respt='';
          if($response)
          {
              //$respt='good';
             // $arr =array('respt'=>$respt);
             // dd($response->getBody());

              //return redirect('control');
              //$respt='no response  happen';
              //$arr =array('respt'=>$respt);
              // dd($response);
              return redirect('control');

          }
           else{



               return redirect('control');

           }





      }
      elseif ($action =='2off')
      {

          $newdevice = device::find(2);
          $newdevice->current_state = 0;

          $newdevice->save();


          /*$client = new Client();
          $res = $client->request('get', 'flow-app.eu-gb.mybluemix.net/test1?device_id=2&device_state=0', [
              'device_state' => [
                  'device_id'=>'2',
                  'device_state'=>'0',
                  // 'secret' => 'test_secret',
              ]
          ]);*/
          $client = new Client();

          $response = $client->post('flow-app.eu-gb.mybluemix.net/test1?', [
              'json' => ['device_id' => '2','device_state'=>'0']
          ]);


          return redirect('control');

      }
      elseif ($action =='2on')
      {

          $newdevice = device::find(2);
          $newdevice->current_state = 1;

          $newdevice->save();

          /*$client = new Client();
          $res = $client->request('get', 'flow-app.eu-gb.mybluemix.net/test1?device_id=2&device_state=1', [
              'device_state' => [
                  'device _id'=>'2',
                  'device_state'=>'1'
                  // 'secret' => 'test_secret',
              ]
          ]);*/

          $client = new Client();

          $response = $client->post('flow-app.eu-gb.mybluemix.net/test1?', [
              'json' => ['device_id' => '2','device_state'=>'1']
          ]);

         return  redirect('control');
      }
      elseif ($action == '3off')
      {
          $newdevice = device::find(3);
          $newdevice->current_state = 0;

          $newdevice->save();

          /*$client = new Client();
          $res = $client->request('get', 'flow-app.eu-gb.mybluemix.net/test1?device_id=3&device_state=0', [
              'device_state' => [
                  'device _id'=>'3',
                  'device_state'=>'0'
                  // 'secret' => 'test_secret',
              ]
          ]);*/

          $client = new Client();

          $response = $client->post('flow-app.eu-gb.mybluemix.net/test1?', [
              'json' => ['device_id' => '3','device_state'=>'0']
          ]);

          return redirect('control');
      }
      elseif ($action == '3on')
      {

          $newdevice = device::find(3);
          $newdevice->current_state = 1;

          $newdevice->save();

         /* $client = new Client();
          $res = $client->request('get', 'flow-app.eu-gb.mybluemix.net/test1?device_id=3&device_state=1', [
              'device_state' => [
                  'device _id' => '3',
                  'device_state'=>'1'
                  // 'secret' => 'test_secret',
              ]
          ]);*/
          $client = new Client();

          $response = $client->post('flow-app.eu-gb.mybluemix.net/test1?', [
              'json' => ['device_id' => '3','device_state'=>'1']
          ]);
          return redirect('control');

      }





    }





    public  function control_on_groups( )
    {

        $id = Auth::user()->id;





        $user = User::find($id);


        $user_groups =  $user-> groups ;



        $ar =Array('user_groups'=>$user_groups);

        return view('control_on_groups',$ar);

    }






    public  function  group_con($name ,$state)
    {






        if($state=='on')
        {
           /* $newdevice = device::find(1);
            $newdevice->current_state = 0;

            $newdevice->save();*/





           //for send http request and recieve http response
           /* $client = new Client();

            $response = $client->post('flow-app.eu-gb.mybluemix.net/test1?', [
                'json' => ['group_name' => $name ,'state'=>'0']
            ]);*/


         //echo $state  ;


            //echo $name  ;

            return redirect('control_on_groups');
        }

        elseif ($state =='off')
        {


            //echo $state  ;


            //echo $name  ;


            return redirect('control_on_groups');
        }










    }












}
