<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Thing;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void

     public function __construct()
    {
        $this->middleware('auth');
    }

     */

    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {

       // $things=DB::table('things')->get();

        $things=Thing::paginate(12,["id","owner_name","thing","thing_desc","thing_pic","owner_id","created_at","owner_name","owner_pic"]);

        //$things=DB::table('things')->get();
        //->orderBy('id','desc')->get();




        return view('site.in',compact('things'));

        //var_dump($things);

    }

    public function home()
    {
        return view('home');
    }
}
