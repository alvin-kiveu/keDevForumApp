<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Intervention\Image\Facades\Image;



class AuthController extends Controller
{
    public function registerUser(Request $request)
    {
        $email = $request->input('email');
        $username = $request->input('username');
        //REMOVE SPACE FROM $username
        $username = str_replace(' ', '', $username);
        $name = $request->input('name');
        //capitalize first letter of $name
        $name = ucfirst($name);
        //Genarete random user id
        $devkdfid = rand(1000000000, 9999999999);
        $password = $request->input('password');
        //CHECK IF PASSWORDS MATCH
        if (DB::connection()->getDatabaseName()) {
            if ($request->input('password') != $request->input('password_confirmation')) {
                return redirect()->back()->with('error', 'Passwords do not match');
            } else {
                //CHECK IF PASSWORD IS LESS THAN 8 CHARACTERS
                if (strlen($password) < 8) {
                    return redirect()->back()->with('error', 'Password must be at least 8 characters');
                } else {
                    //HASH PASSWORD
                    $password = bcrypt($password);
                    $data = array('devkdfid' => $devkdfid, 'fulnames' => $name, 'email' => $email, 'username' => $username, 'password' => $password, 'Deviters' => '0', "Devees" => '0', 'profilepic' => '', 'resetpassword' => '');
                    //CHECK IF EMAIL IS ALREADY REGISTERED FROM MYSQL DATABASE ON TABLE users
                    $emailCheck = DB::table('members')->where('email', $email)->first();
                    if ($emailCheck) {
                        return redirect()->back()->with('error', 'Email already registered');
                    } else {
                        //CHECK IF USERNAME IS ALREADY REGISTERED FROM MYSQL DATABASE ON TABLE users
                        $usernameCheck = DB::table('members')->where('username', $username)->first();
                        if ($usernameCheck) {
                            return redirect()->back()->with('error', 'Username already registered');
                        } else {
                            //INSERT DATA INTO MYSQL DATABASE ON TABLE users
                            DB::table('members')->insert($data);
                            //SEND WELCOMING EMAIL
                            $mail = new PHPMailer(true);
                            $mail->setFrom('info@kedevforum.com', 'keDevForum');
                            $mail->addAddress($email);     //Add a recipient
                            //Content
                            $mail->isHTML(true);                                  //Set email format to HTML
                            $mail->Subject = 'Welcome to keDevForum';
                              //CREATE A RESPOSIVE HTML WELCOME EMAIL TEMPLATE WITH CSS
                            $mail->Body    = '<!DOCTYPE html>
                            <html lang="en">
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>Welcome to keDevForum</title>
                                <style>
                                    body {
                                        background-color: #2C3539;
                                        font-family: Arial, Helvetica, sans-serif;
                                    }
                                    .container {
                                        width: 100%;
                                        max-width: 600px;
                                        margin: 0 auto;
                                        background-color: #fff;
                                        padding: 20px;
                                        border-radius: 5px;
                                    }
                                    .container h1 {
                                        text-align: center;
                                        font-size: 30px;
                                        color: #000;
                                    }
                                    .container p {
                                        text-align: center;
                                        font-size: 20px;
                                        color: #000;
                                    }
                                    .container a {
                                        text-decoration: none;
                                        color: #fff;
                                        background-color: #000;
                                        padding: 10px;
                                        border-radius: 5px;
                                        display: block;
                                        width: 100%;
                                        text-align: center;
                                    }
                                    .footer {
                                        margin-top: 20px;
                                        text-align: center;
                                        font-size: 14px;
                                        color: #fff;
                                    }
                                    .footer a {
                                        color: #fff;
                                        text-decoration: underline;
                                    }
                                    .logo {
                                        display: block;
                                        margin: 0 auto;
                                        max-width: 200px;
                                    }
                                </style>
                            </head>
                            <body>
                                <div class="container">
                                    <img class="logo" src="https://kedevforum.com/assets/img/newKedev.png" alt="keDevForum logo">
                                    <h1>Welcome to keDevForum</h1>
                                    <p>Thank you for registering to keDevForum</p>
                            
                                    <a href="https://kedevforum.com/login">Click here to login</a>
                                </div>
                                <div class="footer">
                                    <p>For more information, please visit our <a href="https://kedevforum.com/contact">contact page</a>.</p>
                                </div>
                            </body>
                            </html>
                            ';
                            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                            $mail->send();

                            //CREATE SESSION
                            $request->session()->put('email', $email);
                            return redirect('/feeds')->with('success', 'Registration successful to keDevForum');
                        }
                    }
                }
            }
        } else {
            return redirect()->back()->with('error', 'Database connection failed');
        }
    }


    public function loginUser(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        //CHECK IF EMAIL IS ALREADY REGISTERED FROM MYSQL DATABASE ON TABLE users
        $emailCheck = DB::table('members')->where('email', $email)->first();
        if ($emailCheck) {
            //CHECK IF PASSWORD IS CORRECT
            if (password_verify($password, $emailCheck->password)) {
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
            return redirect()->back()->with('error', 'Email not registered');
        }
    }

    public function logoutUser(Request $request)
    {
        if (session()->has('userEmailLogin')) {
            $request->session()->forget('userEmailLogin');
            $request->session()->forget('userDevKdfId');
            return redirect('/feeds')->with('success', 'Logout successfully from keDevForum');
        } else {
            return redirect('/feeds')->with('error', 'You are not logged in');
        }
    }

    public function forgotUserPassword(Request $request)
    {
        $email = $request->input('email');
        //CHECK IF EMAIL IS ALREADY REGISTERED FROM MYSQL DATABASE ON TABLE users
        $emailCheck = DB::table('members')->where('email', $email)->first();
        if ($emailCheck) {
            //GENERATE A RANDOM STRING

            //SEND AN EMAIL TO THE USER WITH A LINK TO RESET PASSWORD
            $mail = new PHPMailer(true);
            try {
                $randomString = bin2hex(random_bytes(10));
                //Recipients
                $mail->setFrom('security@kedevforum.com', 'keDevForum');
                $mail->addAddress($email);     //Add a recipient
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Reset Password';
                //  $mail->Body    = 'Click on the link below to reset your password <br> <a href="http://localhost:8000/reset-password?email=' . $email . '">Reset Password</a>';
                //CREATE A RESPOSIVE HTML EMAIL
                $mail->Body = '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Reset Password</title>
                </head>
                <body>
                    <div style="width: 100%; height: 100%; background-color: #2C3539; padding: 20px;">
                        <div style="width: 100%; max-width: 600px; margin: auto; background-color: #fff; padding: 20px;">
                            <div style="width: 100%; text-align: center;">
                                <img src="https://kedevforum.com/assets/img/newKedev.png" alt="kedevforum logo" style="width: 100px; height: 100px;">
                            </div>
                            <div style="width: 100%; text-align: center;">
                                <h1 style="font-size: 30px; color: #000; font-weight: 600;">Reset Password</h1>
                            </div>
                            <div style="width: 100%; text-align: center;">
                                <p style="font-size: 16px; color: #000; font-weight: 400;">Click on the link below to reset your password</p>
                            </div>
                            <div style="width: 100%; text-align: center;">
                                <a href="https://kedevforum.com/resetpassword/' . $randomString  . '" style="text-decoration: none; background-color: #000; color: #fff; padding: 10px 20px; border-radius: 5px;">Reset Password</a>
                            </div>
                        </div>
                    </div>
                </body>
                </html>';

                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                $mail->send();
                //UPDATE THE DATABASE WITH THE RANDOM STRING
                DB::table('members')->where('email', $email)->update(['resetpassword' => $randomString]);
                return redirect()->back()->with('success', 'Password reset link sent to your email');
            } catch (Exception $e) {
                return redirect()->back()->with('error', "Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
            }
        } else {
            return redirect()->back()->with('error', 'Email not registered');
        }
    }


    public function changeAverter(Request $request)
    {
        $fileToUpload = $request->file('fileToUpload');
        $email = session()->get('userEmailLogin');
        if ($fileToUpload == '' || $fileToUpload == null) {
            return redirect()->back()->with('error', 'Please select an image');
        } else {
            //GET USER INFO
            $userDetails = DB::table('members')->where('email', $email)->get();
            foreach ($userDetails as $user) {
                $profilepic = $user->profilepic;
            }
            //CHECK IF PROFILE IS EMPTY
            if ($profilepic != '') {
                $path = 'images/userprofile/' . $profilepic;
                if (file_exists($path)) {
                    unlink($path);
                }
            }

            $fileToUploadName = $fileToUpload->getClientOriginalName();
            $fileToUploadName = time() . $fileToUploadName;
            //COMPRESS IMAGE
            $maxFileSize = 2 * 1024 * 1024;
            if ($fileToUpload->getSize() > $maxFileSize) {
                $image = Image::make($fileToUpload->getRealPath());
                $image->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $image->save('images/userprofile/' . $fileToUploadName, 60); // compress image to 60% quality
            } else {
                $fileToUpload->move('images/userprofile/', $fileToUploadName);
            }


            DB::table('members')->where('email', $email)->update(['profilepic' => $fileToUploadName]);
            return redirect()->back()->with('success', 'Profile picture changed successfully');
        }
    }

    //RESET PASSWORD


    public function resetUserPassword(Request $request)
    {
        $password = $request->input('password');
        $password_confirmation = $request->input('password_confirmation');
        $randid = $request->input('randid');

        if ($password == '' || $password == null) {
            return redirect()->back()->with('error', 'Please enter a password');
        } else {
            if ($password_confirmation == '' || $password_confirmation == null) {
                return redirect()->back()->with('error', 'Please confirm your password');
            } else {
                if ($password != $password_confirmation) {
                    return redirect()->back()->with('error', 'Passwords do not match');
                }{
                    //CHECK IF THE RANDOM STRING IS VALID
                    $checkRandomString = DB::table('members')->where('resetpassword', $randid)->first();
                    if(!$checkRandomString){
                        return redirect()->back()->with('error', 'Invalid reset password link');
                    }else{
                        //CHECK IF PASSWORD IS LESS THAN 8 CHARACTERS
                        if(strlen($password) < 8){
                            return redirect()->back()->with('error', 'Password must be at least 8 characters');
                        }else{
                        $password = bcrypt($password);
                        //UPDATE THE PASSWORD TO THE DATABASE
                        DB::table('members')->where('resetpassword', $randid)->update(['password' => $password, 'resetpassword' => '']);
                        //UPDATE RANDOM STRING TO EMPTY
                        DB::table('members')->where('resetpassword', $randid)->update(['resetpassword' => '']);
                        //REDIRECT TO LOGIN PAGE
                        return redirect('/login')->with('success', 'Password has being reset successfully. you can now login');
                        }
                    }
                }
            }
        }
    }
}
