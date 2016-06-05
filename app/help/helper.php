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


?>

