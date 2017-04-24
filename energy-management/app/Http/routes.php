<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/control', 'dcon@control');


Route::get('store/{action}', 'dcon@store');
Route::get('/monitor', 'monitoring@mon');


Route::get('/test', 'groupcontroller@test');

Route::get('/grouping', 'groupcontroling@creategroup');

Route::post('/grouping', 'groupcontroling@creategroup');

Route::post('/grouping', 'groupcontroling@creategroup');


Route::get('/update_group/{id}', 'groupcontroling@updating');
Route::post('/update_group/{id}', 'groupcontroling@updating');


Route::get('/assign_device/{id}', 'groupcontroling@assign_device');
Route::post('/assign_device/{id}', 'groupcontroling@assign_device');

Route::get('/consumption', 'consumptioncontrol@device_consumption');


Route::get('/consumption_of_specific/{id}', 'consumptioncontrol@consumption_each_dev');




Route::get('/group_user/{id}', 'groupcontroling@group_user');

Route::post('/group_user/{id}', 'groupcontroling@group_user');


Route::get('/devices', 'device_controller@show_devices');


Route::get('/assign_device_user/{id}' , 'device_controller@assign_device_user');

Route::post('/assign_device_user/{id}' , 'device_controller@assign_device_user');


Route::get('/control_on_groups', 'dcon@control_on_groups');


Route::get('/group_con/{name}/{state}', 'dcon@group_con');

Route::get('/pattern_of_rationalize', 'pattern_controller@pattern_of_rationalize');



Route::get('/show_event/{id}', 'pattern_controller@show_event');

///show_event/{{$pater->id}}


///pattern_of_rationalize


// control_on_groups