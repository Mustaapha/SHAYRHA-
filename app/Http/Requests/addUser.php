<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class addUser extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            //
           
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'address' => 'required',
            'user_name' => 'required|unique:users',
            'location' => 'required',
            'user_pic' => 'required',
            'password' => 'required|min:6|confirmed',

        ];
    }
}
