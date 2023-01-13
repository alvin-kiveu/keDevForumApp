<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class PostFeedController extends Controller
{
    //
    public function userPostFeed(Request $request)
    {

        return redirect('/postfeed')->with('success', 'Your feed has being posted successfully');

        // $email = session()->has('userEmailLogin');
        // $heading = $request->input('heading');
        // $description = $request->input('description');
        // $hashtag = $request->input('hashtag');

        // //GENRATE A RANDOME FEED ID WITH STRING AND NUMBERS
        // $characters = 'ABDCEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        // $charactersLength = strlen($characters);
        // $randomString = '';
        // for ($i = 0; $i < 20; $i++) {
        //     $randomString .= $characters[rand(0, $charactersLength - 1)];
        // }
        // $feedId = $randomString;

        // //INSERT DATA INTO feeds TABLE
        // $insert = DB::table('feeds')->insert([
        //     'feedid' => $feedId,
        //     'title' => $heading,
        //     'description' => $description,
        //     'email' => $email,
        //     'views' => '0',
        //     'postedTime' => \Carbon\Carbon::now(),
        //     'hashtag' => $hashtag,
        // ]);

        // if ($insert) {
        //     return redirect('/postfeed')->with('success', 'Your feed has being posted successfully');
        // } else {
        //     return redirect('/postfeed')->with('error', 'An error occured while posting your feed');
        // }
    }
}