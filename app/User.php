<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array

     */
    protected $table='users';
    protected $fillable = [
        'name', 'email', 'password','address','user_name','user_pic','location','admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function things()
    {
        return $this->hasMany('App\Thing','owner_id','id');
    }

    public function requests()
    {
        return $this->hasMany('App\Request','needer_id','id');
    }
}
