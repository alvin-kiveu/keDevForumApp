<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class socialauthcontroller extends Controller
{
    public function githubredirect(Request $request)
    {
        return Socialite::driver('github')->redirect();
    }

    public function githubcallaback(Request $request)
    {
        $userdata = Socialite::driver('github')->user();
        $user = DB::table('members')->where('email', $userdata->email)->where('auth_type', 'github')->first();
        if ($user) {
            $uuid = Str::uuid()->toString();
            $password = $uuid . now();
            $email = $userdata->email;
            if (password_verify($password, $email)) {
                //CREATE SESSION
                $request->session()->put('userEmailLogin', $email);
                $userDetails = DB::table('members')->where('email', $email)->get();
                foreach ($userDetails as $user) {
                    $userDevKdfId = $user->devkdfid;
                    $userUsername = $user->username;
                }
                $request->session()->put('userDevKdfId', $userDevKdfId);
                return redirect('/feeds')->with('success', 'Welcome back ' . $userUsername . ' , You have Logged in  successfully to keDevForum');
            } else {
                return redirect()->back()->with('error', 'Incorrect password');
            }
        } else {
            $email = $userdata->email;
            $emailCheck = DB::table('members')->where('email', $email)->first();
            if ($emailCheck) {
                $userDetails = DB::table('members')->where('email', $email)->get();
                foreach ($userDetails as $user) {
                    $userDevKdfId = $user->devkdfid;
                    $userUsername = $user->username;
                    $userAuthType = $user->auth_type;
                }
                if ($userAuthType == "normal") {
                    return redirect()->back()->with('error', 'You have already registered with this email, please login with your password');
                } 
            } else {
                $uuid = Str::uuid()->toString();
                $devkdfid = rand(1000000000, 9999999999);
                $password = bcrypt($uuid . now());
                $username = $userdata->nickname;
                $data = array('devkdfid' => $devkdfid, 'fulnames' => $userdata->name, 'email' => $userdata->email, 'username' => $username, 'password' => $password, 'Deviters' => '0', "Devees" => '0', 'profilepic' => '', 'resetpassword' => '', 'auth_type' => 'github');
                DB::table('members')->insert($data);
                //CREATE SESSION
                $request->session()->put('userEmailLogin', $email);
                $request->session()->put('userDevKdfId', $devkdfid);
                return redirect('/feeds')->with('success', 'Welcome ' . $username . ' , You have registered successfully to keDevForum');
            }
        }
    }


    public function googleredirect(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }
    public function googlecallaback(Request $request)
    {
        $userdata = Socialite::driver('google')->user();
        //check login 
        $user = DB::table('members')->where('email', $userdata->email)->where('auth_type', 'google')->first();
        if ($user) {
            $uuid = Str::uuid()->toString();
            $password = $uuid . now();
            $email = $userdata->email;
            if (password_verify($password, $email)) {
                //CREATE SESSION
                $request->session()->put('userEmailLogin', $email);
                $userDetails = DB::table('members')->where('email', $email)->get();
                foreach ($userDetails as $user) {
                    $userDevKdfId = $user->devkdfid;
                    $userUsername = $user->username;
                }
                $request->session()->put('userEmailLogin', $email);
                $request->session()->put('userDevKdfId', $userDevKdfId);

                return redirect('/feeds')->with('success', 'Welcome back ' . $userUsername . ' , You have Logged in  successfully to keDevForum');
            } else {
                return redirect()->back()->with('error', 'Incorrect password');
            }
        } else {
            $email = $userdata->email;
            $emailCheck = DB::table('members')->where('email', $email)->first();
            if ($emailCheck) {
                $userDetails = DB::table('members')->where('email', $email)->get();
                foreach ($userDetails as $user) {
                    $userDevKdfId = $user->devkdfid;
                    $userUsername = $user->username;
                    $userAuthType = $user->auth_type;
                }
                if ($userAuthType == "normal") {
                    return redirect()->back()->with('error', 'You have already registered with this email, please login with your password');
                }
            } else {
                $uuid = Str::uuid()->toString();
                $devkdfid = rand(1000000000, 9999999999);
                $password = bcrypt($uuid . now());
                $username = "NONAME";
                $data = array('devkdfid' => $devkdfid, 'fulnames' => $userdata->name, 'email' => $userdata->email, 'username' => $username, 'password' => $password, 'Deviters' => '0', "Devees" => '0', 'profilepic' => '', 'resetpassword' => '', 'auth_type' => 'google');
                DB::table('members')->insert($data);
                //CREATE SESSION
                $request->session()->put('userEmailLogin', $email);
                $request->session()->put('userDevKdfId', $devkdfid);
                return redirect('/feeds')->with('success', 'Welcome ' . $username . ' , You have registered successfully to keDevForum');
            }
        }
    }







}
