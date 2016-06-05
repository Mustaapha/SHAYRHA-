<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Auth;

class neighborsController extends Controller
{
    //
    public function getNeighbors()
    {
    	$loc=Auth::user()->location;
    	$neighbors=DB::table('users')->where('location',$loc)->get();
    	return view('site.neighbors',compact('neighbors'));
    }

    public function viewNeighborThings(Request $request)
    {
    	$neighborId=$request->id;
    	$neighbor_things=DB::table('things')->where('owner_id',$neighborId)->get();

    	return view('site.view_things_gark',compact('neighbor_things'));

    }
}
