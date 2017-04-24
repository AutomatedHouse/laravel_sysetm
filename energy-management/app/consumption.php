<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class consumption extends Model
{
    //
     public $timestamps=false;
     public $table='consumptions';



    public  function  device()
    {


        return $this->belongsTo('App\device');
    }

}
