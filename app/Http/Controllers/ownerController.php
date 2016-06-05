<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Owner;

class ownerController extends Controller
{
    //

    public function show($id)
    {
    	$owner=Owner::find($id);
    	$things2=$owner->things;

    	var_dump($things2);



    }
}
