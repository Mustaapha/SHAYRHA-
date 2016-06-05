<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main_setting extends Model
{
    //
    //protected $table="main_settings";
    protected $fillable=['setting_name','value','slug', 'type',];
}
