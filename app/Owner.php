<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    //
    //protected $table='owners';
    //protected $primaryKey='id';

    public function things()
    {
    	return $this->hasMany('App\Thing','owner_id','id');
    }
}
