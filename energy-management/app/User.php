<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{


   // public $table= 'users';

    public function  groups()
    {


        return $this->belongsToMany('App\group');
    }



    public function  devices()
    {


        return $this->belongsToMany('App\device');
    }





    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','L_name', 'email', 'password','user_type','notify'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];




}
