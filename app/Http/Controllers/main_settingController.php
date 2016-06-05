<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Main_setting;
use App\Http\Requests\AddUserRequest;
class main_settingController extends Controller
{
    //
    public function index(Main_setting $main)
    {
    	$main_settings=$main->all();

    	return view('admin.main_settings.main_settings',compact('main_settings'));
    }

    public function store(Request $request ,Main_setting $main)
    {
    	foreach (array_except($request->toArray(),['_token','submit']) as $req => $value)
    	 {
    	 	$updateSetting=$main->where('setting_name',$req)->get()[0];
    	 	$updateSetting->fill(['value'=>$value])->save();
    	}
    	
    }
}
