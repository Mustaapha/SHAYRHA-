<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\comment;

class commentController extends Controller
{
    //
    public function index()
    {
    	# code...

    	return view('site.comment');
    }

     public function store(Request $request, Comment $comment)
    {
        //
        $com=$comment->create([

        	'name'=>$request->name,
        	'subject'=>$request->subject,
        	'comment'=>$request->comment,
        	'phone'=>$request->phone,

        	]);

        if($com)
        {
            echo '<script>alert("لقد تم ارسال التعليق الخاص بك");history.back();history.back();</script>';
        }

    }    

        
}
