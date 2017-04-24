<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    //

    public $table ='groups';

    public function  devices()
    {


        return $this->belongsToMany('App\device');
    }


    public function  users()
    {


        return $this->belongsToMany('App\user');
    }


}
