<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Thing;
use App\Owner;
use Auth;




class thingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    


    public function addThing()
    {

        return view('site.add_thing');
    }


   



    public function store(Request $request)
    {
        //

        //el kaen Request Lestrga3 el bianaat mn el form
        $thing_name=$request->thing;
        $thing_desc=$request->thing_desc;
        $file=$request->file('thing_img');
        $destinationPath='img/devhill';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $file->move($destinationPath,$filename);



        $owner_id=Auth::user()->id; 
        $owner=Auth::user()->name; 
        $owner_pic=Auth::user()->user_pic;

        $add=DB::table('things')->insert([

            "thing"=>$thing_name,
            "thing_desc"=>$thing_desc,
            "thing_pic"=>$filename,
            "owner_id"=>$owner_id,
            "owner_name"=>$owner,
            "owner_pic"=>$owner_pic


            ]);

        if($add)
        {
            echo '<script>alert("Thing Added successfully");history.back();history.back();</script>';

        }


    }


    public function update($id,Request $request)
    {

        $thing_name=$request->thing;
        $thing_desc=$request->thing_desc;
        $file=$request->file('thing_img');
        $destinationPath='img/devhill';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $file->move($destinationPath,$filename);

        $thing=Thing::find($id);

        $thing->thing=$thing_name;
        $thing->thing_desc=$thing_desc;
        $thing->thing_pic=$filename;

        $save=$thing->save();
        if($save)
        {
            echo '<script>alert("Thing Changed successfully");history.back();history.back();</script>';
        }


    }

    public function showFormUpdate($id,Thing $thing)
    {
        $things=$thing->find($id);

        return view('site.update_thing',compact('things'));
    }



    public function destroy($id)
    {
        //DB::table('things')->where('id',$id)->delete();
        //Thing::where('id',$id)->delete();
        //$thing=Thing::find($id);
        //$thing->delete();
        $delete=Thing::destroy($id);
        if($delete)
        {
            echo '<script>alert("Thing Deleted successfully");history.back();</script>';
        }

    }



     public function saveVarsDetails(Request $request)
    {
        $id=$request->id;
        $pic=$request->pic;
        $owner=$request->owner;
        $name=$request->name;
        $desc=$request->desc;

         $thingInfo= array('id' => $id,'pic'=>$pic,'owner'=>$owner ,'name'=>$name,'desc'=>$desc);
        
       
        return view('site.show_details',compact('thingInfo'));


    }















}
