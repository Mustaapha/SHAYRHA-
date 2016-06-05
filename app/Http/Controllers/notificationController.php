<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Auth;
class notificationController extends Controller
{
    //

    public function getNotification()
    {
    	$notifications=DB::table('requests')->where('owner_id', Auth::user()->id)->where('type','0')->get();

        return view('site.notification',compact('notifications'));

    }
     public function getNotificationReply()
    {
        $notifications=DB::table('requests')->where('needer_id', Auth::user()->id)->where('type','1')->get();

        return view('site.notification_reply',compact('notifications'));

    }

    public function saveOwnerReplay(Request $request)
    {
    	$needer_name=$request->needer_name;
    	$needer_id=$request->needer_id;
    	$offer_name=$request->offer;
        $offer_pic=$request->pic;
        $thing_id=$request->thing_id;
    	$owner_replay = array('needer_name' => $needer_name,'needer_id'=>$needer_id,'offer_name'=>$offer_name ,'offer_pic'=>$offer_pic,'thing_id'=>$thing_id);
    	return view('site.owner_replay',compact('owner_replay'));
    }

    public function store(Request $request)
    {
        $msg=$request->msg_to_owner;
        $msg=$request->msg_owner_replay;
        $offer=$request->offer_name;
        $needer_name=$request->needer_name;
        $offer_pic=$request->offer_pic;
        $needer_id=$request->needer_id;
        $owner_id=Auth::user()->id;
        $owner_name=Auth::user()->name;
        
        $thing_id=$request->thing_id;


        $save=DB::table('requests')->insert([

            "offer"=>$offer,
            "offer_pic"=>$offer_pic,
            "msg_to_owner"=>$msg,
            "owner_name"=>$owner_name,
            "owner_id"=>$owner_id,
            "thing_id"=>$thing_id,
            "needer_name"=>$needer_name,
            "needer_id"=>$needer_id,
            "type"=>"1"
            


            ]);

        if($save)
        {
            echo '<script>alert("لقد تم ارسال ردك بنجاح ..شكراً لاستخدماكم شيرها ..نتمنى ان نراكم مرة أخرى ");history.back();</script>';
        }



    }

     public function deleteNotification($id)
    {
       $delete=DB::table('requests')->where('id',$id)->delete();
        //$delete=Request::destroy($id);

        if($delete)
        {
            echo '<script>alert("لقد تم رفض  الطلب المقدم لك بنجاح ");history.back();</script>';
        }

    }
     public function deleteNotificationReplay($id)
    {
       $delete=DB::table('requests')->where('id',$id)->delete();
        //$delete=Request::destroy($id);

        if($delete)
        {
            echo '<script>alert("لقد تم حزف الرسالة بنجاح ,نرجو ان تكونوا قد تقابلتم وتبادلتم أشيائكم ,نتمنى ان نراكم مرة أخرى ");history.back();</script>';
        }

    }

}
