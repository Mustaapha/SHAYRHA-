<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Session;
use DB;

//use App\Request;

class requestController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showFormOffer($id)
    {
    	return view('site.make_offer');

    }

    public function store(Request $request)
    {
    	$msg=$request->msg_to_owner;
    	
    	$user_id=Auth::user()->id;



    	$msg=$request->msg_to_owner;
    	$offer=$request->offer;
    	$offer_pic=$request->pic;
    	$thing_id=$request->thing_id;
    	$owner_id=$request->owner_id;
        $owner_name=$request->owner_name;
    	$user_id=Auth::user()->id;
        $needer_name=Auth::user()->name;

    	$save=DB::table('requests')->insert([

    		"offer"=>$offer,
    		"offer_pic"=>$offer_pic,
    		"msg_to_owner"=>$msg,
    		"thing_id"=>$thing_id,
    		"owner_id"=>$owner_id,
    		"needer_id"=>$user_id,
            "owner_name"=>$owner_name,
            "needer_name"=>$needer_name


    		]);

    	if($save)
    	{
    		echo '<script>alert("offer done successfully");history.back();</script>';
    	}



    }

    public function saveVars(Request $request)
    {
        $id=$request->id;
        $pic=$request->pic;
        $owner=$request->owner;
        $name=$request->name;
        $owner_name=$request->owner_name;

         $thingInfo= array('id' => $id,'pic'=>$pic,'owner'=>$owner ,'name'=>$name,'owner_name'=>$owner_name);
        
       
        return view('site.make_offer',compact('thingInfo'));


    }

    public function deleteRequest($id)
    {
       $delete=DB::table('requests')->where('id',$id)->delete();
        //$delete=Request::destroy($id);

        if($delete)
        {
            echo '<script>alert("لقد تم حزف طلبك بنجاح ,اضغط على الزر لتعود للرئيسية");history.back();</script>';
        }

    }

     public function update($id,Request $request)
    {

        $msg=$request->msg_to_owner;

       // $thing=Request::find($id);

        //$thing->msg_to_owner=$msg;

       // $save=$thing->save();

        $save=DB::table('requests')->where('id',$id)->update(['msg_to_owner'=>$msg]);
        if($save)
        {
            echo '<script>alert("لقد تم تعديل طلبك ,انتظر رد المالك");history.back();history.back();</script>';
        }


    }


    public function saveMsgToOwner(Request $request)
    {
        $id=$request->id;
        $ids= array('id' =>$id );

        return view('site.update_request',compact('ids'));




    }

    









}
