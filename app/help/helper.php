<?php

 function getMainSetting($settingName)
{
	return \App\Main_setting::where('setting_name',$settingName)->get()[0]->value;

}

 function countt()
{
	$loc=Auth::user()->location;
	return count(\App\User::where('location',$loc)->get());

}


function countreq()
{
	$id=Auth::user()->id;
	return count(\App\Request::where('needer_id',$id)->get());

}

function countoffer()
{
	$id=Auth::user()->id;
	return count(\App\Thing::where('owner_id',$id)->get());

}

?>

