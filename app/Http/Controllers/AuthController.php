<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerUser(Request $request)
    {

        echo $request->input('name');
        echo $request->input('email');
        echo $request->input('username');
        echo $request->input('password');
        echo $request->input('password_confirmation');
        //redirect to home page
        //return redirect()->landing();




    }
}