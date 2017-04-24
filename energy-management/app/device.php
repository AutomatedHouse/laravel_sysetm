<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class device extends Model
{
    //
    public $table='devices';

    public  function  groups()
    {
        return $this->belongsToMany('App\group');
    }


    public  function  consumption()
    {
        return   $this->hasMany('App\consumption');
    }


    public  function  patterns()
    {
        return $this->hasMany('App\pattern');
        //return pattern::where('action_id',$this->id);
    }




    public function  users()
    {


        return $this->belongsToMany('App\user');
    }







}
