<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pattern extends Model
{
    //
    public  $table ='paterns';
    public  $timestamps = false;



    public function device()
    {

        return $this->belongsTo('App\device');


    }



    public function  devices()
    {


        return $this->belongsToMany('App\device');
    }






}
