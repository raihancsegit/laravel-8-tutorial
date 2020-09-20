<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function loginSubmit(Request $request){

        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required|min:6|max:15'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        return "Email ".$email ." Password ".$password;
       // return $request->all();
    }
}
