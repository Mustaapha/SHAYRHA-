<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;
use Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'address' => 'required',
            'user_name' => 'required|unique:users',
            'location' => 'required',
            'user_pic' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'address' => $data['address'],
            'user_name' => $data['user_name'],
            'location' => $data['location'],
            'user_pic' => $data['user_pic'],
                        
            'password' => bcrypt($data['password']),
        ]);
    }

    public function redirectToProvider()
    {
        return \Socialite::driver('facebook')->redirect();   
    }   

    public function callback()
    {
        
        // when facebook call us a with token  
        $user=\Socialite::driver('facebook')->user();  
        $data=['name'=>$user->name,'email'=>$user->email,'password'=>$user->token];

        $userDB=User::where('email',$user->email)->first();
        if(!is_null($userDB))
        {
            Auth::login($userDB);
        }
        else
        {
            //Auth::login($this->create($data));

            return redirect('/');
        }

        return redirect('/home');




    }
}
