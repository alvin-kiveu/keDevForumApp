<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DevitControler extends Controller
{
    public function devitProsessor(Request $request)
    {
        $devitid = $request->input('devitid');
        $userDevKdfId = $request->input('userKdfId');
        $divitype = $request->input('divitype');

            //CHECK IF DEVITID IS NOT NULL OR EMPTY
            if ($devitid != null || $devitid != "" || $userDevKdfId != "" || $userDevKdfId != null || $divitype != "" || $divitype != null) {
                //CHECK IF DEVIT IS UPVOTED OR DOWNVOTED
                if ($divitype == "divitup") {
                    //CHECK IF THERE IS DIVIT UP ON TBALE devitupdown
                    $checkDevitUp = DB::table('devitupdown')->where('devitid', $devitid)->where('userKdfId', $userDevKdfId)->where('devitype', 'divitup')->first();
                    if ($checkDevitUp) {
                        //DELETE DEVIT UP
                        DB::table('devitupdown')->where('devitid', $devitid)->where('userKdfId', $userDevKdfId)->where('devitype', 'divitup')->delete();
                        //UPDATE DEVIT TABLE
                        DB::table('feeds')->where('feedid', $devitid)->decrement('devitup');
                        return response()->json(['status' => 'success', 'divitype' => $divitype, 'message' => 'Devit upvoted successfully']);
                    } else {
                        //CHEC
                        $checkDevitDown = DB::table('devitupdown')->where('devitid', $devitid)->where('userKdfId', $userDevKdfId)->where('devitype', 'divitdown')->first();
                        if ($checkDevitDown) {
                            //DELETE DEVIT DOWN
                            DB::table('devitupdown')->where('devitid', $devitid)->where('userKdfId', $userDevKdfId)->where('devitype', 'divitdown')->delete();
                            //UPDATE DEVIT TABLE
                            DB::table('feeds')->where('feedid', $devitid)->decrement('devitdown');
                        }
                        //INSERT DEVIT UP
                        DB::table('devitupdown')->insert([
                            'devitid' => $devitid,
                            'userKdfId' => $userDevKdfId,
                            'devitype' => $divitype
                        ]);
                        //UPDATE DEVIT TABLE
                        DB::table('feeds')->where('feedid', $devitid)->increment('devitup');

                        //GET ADDER INFO
                        $getAdderInfo = DB::table('members')->where('devkdfid', $userDevKdfId)->first();
                        $username = $getAdderInfo->username;
                        //ADD NOTIFICATION
                        $notificationmessage = "devitup your devit";
                        //GET DIVITER INFO
                        $getDiviterInfo = DB::table('feeds')->where('feedid', $devitid)->first();
                        $userEmail = $getDiviterInfo->email;
                        $userDevAdded = DB::table('members')->where('email', $userEmail)->first();
                        $usernotified = $userDevAdded->devkdfid;
                        //CHECK IF NOTIFICATION WITH usernotified as $userDevAdded and usernotifer as $userDevAdder and notificationmessage as deviter exists
                        $checkNotification = DB::table('notifications')->where('usernotified', $usernotified)->where('usernotifer', $userDevKdfId)->where('notificatointype', 'divitup')->first();
                        if ($checkNotification) {
                            //NOTIFICATION EXISTS
                        } else {
                            DB::table('notifications')->insert([
                                'usernotified' => $usernotified,
                                'usernotifer' => $userDevKdfId,
                                'notificatointype' => 'divitup',
                                'notificationmessage' => $notificationmessage,
                                'notificationtime' => \Carbon\Carbon::now(),
                                'notificationstatus' => 'unread'
                            ]);
                        }

                        return response()->json(['status' => 'success', 'divitype' => $divitype, 'message' => 'Devit upvoted successfully']);
                    }
                } else if ($divitype == "divitdown") {
                    //CHECK IF THERE IS DEVIT DOWN ON TABLE devitupdown
                    $checkDevitDown = DB::table('devitupdown')->where('devitid', $devitid)->where('userKdfId', $userDevKdfId)->where('devitype', 'divitdown')->first();
                    if ($checkDevitDown) {
                        //DELETE DEVIT DOWN
                        DB::table('devitupdown')->where('devitid', $devitid)->where('userKdfId', $userDevKdfId)->where('devitype', 'divitdown')->delete();
                        //UPDATE DEVIT TABLE
                        DB::table('feeds')->where('feedid', $devitid)->decrement('devitdown');
                        return response()->json(['status' => 'success', 'divitype' => $divitype, 'message' => 'Devit upvoted successfully']);
                    } else {
                        $checkDevitUp = DB::table('devitupdown')->where('devitid', $devitid)->where('userKdfId', $userDevKdfId)->where('devitype', 'divitup')->first();
                        if ($checkDevitUp) {
                            //DELETE DEVIT UP
                            DB::table('devitupdown')->where('devitid', $devitid)->where('userKdfId', $userDevKdfId)->where('devitype', 'divitup')->delete();
                            //UPDATE DEVIT TABLE
                            DB::table('feeds')->where('feedid', $devitid)->decrement('devitup');
                        }
                        //INSERT DEVIT UP
                        DB::table('devitupdown')->insert([
                            'devitid' => $devitid,
                            'userKdfId' => $userDevKdfId,
                            'devitype' => $divitype
                        ]);
                        //UPDATE DEVIT TABLE
                        DB::table('feeds')->where('feedid', $devitid)->increment('devitdown');
                        return response()->json(['status' => 'success', 'divitype' => $divitype, 'message' => 'Devit upvoted successfully']);
                    }
                }
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Please fill in the devitid field'
                ]);
            }
    }


    public function devitComment(Request $request)
    {
        $devitid = $request->input('devitid');
        $userDevKdfId = $request->input('userKdfId');
        $devitcomment = $request->input('devitcomment');
        //CHECK IF DEVITID IS NOT NULL OR EMPTY
        if ($devitid != null || $devitid != "" || $userDevKdfId != "" || $userDevKdfId != null || $devitcomment != "" || $devitcomment != null) {
            //GENRATE COMMENT ID
            $commentid = uniqid();
            //INSERT DEVIT COMMENT
            DB::table('comments')->insert([
                'commentid' => $commentid,
                'devitid' => $devitid,
                'userKdfId' => $userDevKdfId,
                'devitcomment' => $devitcomment,
                'commenttime' => \Carbon\Carbon::now()
            ]);
            //UPDATE DEVIT TABLE
            DB::table('feeds')->where('feedid', $devitid)->increment('comment');

            //ADD NOTIFICATION
            //GET ADDER INFO
            $getAdderInfo = DB::table('members')->where('devkdfid', $userDevKdfId)->first();
            $username = $getAdderInfo->username;

            $notificationmessage = "has commented on your devit";
            //GET DEVITER INFO
            $getDeviterInfo = DB::table('feeds')->where('feedid', $devitid)->first();
            $userEmail = $getDeviterInfo->email;
            $userDevAdded = DB::table('members')->where('email', $userEmail)->first();
            $userDevAdded = $userDevAdded->devkdfid;
            if ($userDevAdded != $userDevKdfId) {
                //CHECK IF NOTIFICATION WITH usernotified as $userDevAdded and usernotifer as $userDevAdder and notificationmessage as deviter exists
                $checkNotification = DB::table('notifications')->where('usernotified', $userDevAdded)->where('usernotifer', $userDevKdfId)->where('notificatointype', 'comment')->first();
                if ($checkNotification) {
                    //NOTIFICATION EXISTS
                } else {
                    //ADD A NOTIFICTION
                    DB::table('notifications')->insert([
                        'usernotified' => $userDevAdded,
                        'usernotifer' => $userDevKdfId,
                        'notificatointype' => 'comment',
                        'notificationmessage' => $notificationmessage,
                        'notificationtime' => \Carbon\Carbon::now(),
                        'notificationstatus' => 'unread'
                    ]);
                }
            }
            return response()->json(['status' => 'success', 'message' => 'Devit comment successfully']);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Please fill in the devitid field'
            ]);
        }
    }

    public function deviterAdd(Request $request)
    {
        $userDevAdded = $request->input('userDevAdded');
        $userDevAdder = $request->input('userDevAdder');
        //CHECK IF EMPTY
        if ($userDevAdded != null || $userDevAdded != "" || $userDevAdder != "" || $userDevAdder != null) {
            //CHECK IF ALREADY ADDED
            //ADD DEVITER
            DB::table('deviters')->insert([
                'userDevAdded' => $userDevAdded,
                'userDevAdder' => $userDevAdder,
            ]);

            //UPDATE DEVIT TABLE
            DB::table('members')->where('devkdfid', $userDevAdded)->increment('Deviters');
            DB::table('members')->where('devkdfid', $userDevAdder)->increment('Devees');

            //GET ADDER INFO
            $getAdderInfo = DB::table('members')->where('devkdfid', $userDevAdder)->first();
            $username = $getAdderInfo->username;

            $notificationmessage = "added you as a deviter";

            //CHECK IF NOTIFICATION WITH usernotified as $userDevAdded and usernotifer as $userDevAdder and notificationmessage as deviter exists
            $checkNotification = DB::table('notifications')->where('usernotified', $userDevAdded)->where('usernotifer', $userDevAdder)->where('notificatointype', 'deviter')->first();
            if ($checkNotification) {
                //NOTIFICATION EXISTS
            } else {
                //ADD A NOTIFICTION
                DB::table('notifications')->insert([
                    'usernotified' => $userDevAdded,
                    'usernotifer' => $userDevAdder,
                    'notificatointype' => 'deviter',
                    'notificationmessage' => $notificationmessage,
                    'notificationtime' => \Carbon\Carbon::now(),
                    'notificationstatus' => 'unread'
                ]);
            }
            return response()->json(['status' => 'success', 'message' => 'Deviter added successfully']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Please fill in the userDevAdded and userDevAdder field']);
        }
    }

    public function deviterRemove(Request $request)
    {
        $userDevAdded = $request->input('userDevAdded');
        $userDevAdder = $request->input('userDevAdder');
        //CHECK IF EMPTY
        if ($userDevAdded != null || $userDevAdded != "" || $userDevAdder != "" || $userDevAdder != null) {
            //CHECK IF ALREADY ADDED
            //ADD DEVITER
            DB::table('deviters')->where('userDevAdded', $userDevAdded)->where('userDevAdder', $userDevAdder)->delete();

            //UPDATE DEVIT TABLE
            DB::table('members')->where('devkdfid', $userDevAdded)->decrement('Deviters');
            DB::table('members')->where('devkdfid', $userDevAdder)->decrement('Devees');
            return response()->json(['status' => 'success', 'message' => 'Deviter removed successfully']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Please fill in the userDevAdded and userDevAdder field']);
        }
    }
}
