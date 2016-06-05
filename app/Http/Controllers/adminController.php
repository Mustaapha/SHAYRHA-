<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddUserRequest;

use DB;
use Redirect;


use App\User;

class adminController extends Controller
{
    //
    public function index()
    {
        $userinfo=DB::table('users')->get();
        return view('admin.user.user_panel',compact('userinfo'));
    }

    public function showFormAddUsers()
    {
        return view('admin.user.add_user');
    }

    public function store(AddUserRequest $request,User $user)
    {
        $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'user_name' => $request->user_name,
            'location' => $request->location,
            'user_pic' => $request->user_pic,

            
            'password' => bcrypt($request->password),
        ]);

        return redirect('/adminpanel');
    }

    public function showFormEditUsers($id,User $user)
    {

        $users=$user->find($id);


        return view('admin.user.edit_user',compact('users'));
    }

    public function update($id,Request $request)
    {
        $name=$request->name;
        $email=$request->email;
        $admin=$request->admin;
        $address=$request->address;
        $user_name=$request->user_name;
        $location=$request->location;

        $user=User::find($id);

        $user->name=$name;
        $user->email=$email;
        $user->admin=$admin;
        $user->address=$address;
        $user->user_name=$user_name;
        $user->location=$location;

        $user->save();

        return Redirect::back()->withFlashMessage('لقد تم تحديث بيانات العضو بنجاح');
        
    }


    public function destroy($id)
    {
        DB::table('users')->where('id',$id)->delete();

        return Redirect::back()->withFlashMessage('لقد تم حزف العضو بنجاح');

    }
}
