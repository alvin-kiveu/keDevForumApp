<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostFeedController extends Controller
{
    //
    public function userPostFeed(Request $request)
    {
        return redirect('/postfeed')->with('success', 'We are processing you posted feed');
    }
}