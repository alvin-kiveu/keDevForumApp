<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostFeedController extends Controller
{
    //
    public function userPostFeed(Request $request)
    {
        $email = session()->get('userEmailLogin');
        $heading = $request->input('heading');
        $content = $request->input('content');
        //CHECK IF EMPTY
        if (empty($heading) || empty($content)) {
            return redirect('/postfeed')->with('error', 'Please fill all fields');
        } else {
            // //GENRATE A RANDOME FEED ID WITH STRING AND NUMBERS
            $characters = 'abcdefghijklmnopqrstuvwxyz1234567890';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 20; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $feedId = $randomString;
            //INSERT DATA INTO feeds TABLE
            $insert = DB::table('feeds')->insert([
                'feedid' => $feedId,
                'title' => $heading,
                'content' => $content,
                'email' => $email,
                'views' => '0',
                'postedTime' => \Carbon\Carbon::now(),
                'devitup' => '0',
                'devitdown' => '0',
            ]);

            if ($insert) {
                return redirect('/postfeed')->with('success', 'Your feed has being posted successfully');
            } else {
                return redirect('/postfeed')->with('error', 'An error occured while posting your feed');
            }
        }
    }
}
