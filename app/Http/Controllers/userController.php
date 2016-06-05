<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class userController extends Controller
{
    //
    public function show($id)
    {
    	$user=User::find($id);
    	$things=$user->things;

    	return view('site.offers',compact('things'));



    }

    public function showRequests($id)
    {
    	$request=User::find($id);
    	$requests=$request->requests;

    	return view('site.requests',compact('requests'));
    }

    public function update($id,Request $request)
    {
        $file=$request->file('profile_pic');

        $destinationPath='img/profiles_img';

        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $file->move($destinationPath,$filename);

        $user=User::find($id);

        $user->user_pic=$filename;

        $save=$user->save();

        if($save)
        {
            echo '<script>history.back();</script>';
        }





    }
}
