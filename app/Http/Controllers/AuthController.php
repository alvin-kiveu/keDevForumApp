<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class AuthController extends Controller
{
    public function registerUser(Request $request)
    {

        $email = $request->input('email');
        $username = $request->input('username');
        $name = $request->input('name');
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
                    $data = array('fulnames' => $name, 'email' => $email, 'username' => $username, 'password' => $password);
                    //CHECK IF EMAIL IS ALREADY REGISTERED FROM MYSQL DATABASE ON TABLE users
                    $emailCheck = DB::table('users')->where('email', $email)->first();
                    if ($emailCheck) {
                        return redirect()->back()->with('error', 'Email already registered');
                    } else {
                        //CHECK IF USERNAME IS ALREADY REGISTERED FROM MYSQL DATABASE ON TABLE users
                        $usernameCheck = DB::table('users')->where('username', $username)->first();
                        if ($usernameCheck) {
                            return redirect()->back()->with('error', 'Username already registered');
                        } else {
                            //INSERT DATA INTO MYSQL DATABASE ON TABLE users
                            DB::table('users')->insert($data);
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
        $emailCheck = DB::table('users')->where('email', $email)->first();
        if ($emailCheck) {
            //CHECK IF PASSWORD IS CORRECT
            if (password_verify($password, $emailCheck->password)) {
                //CREATE SESSION
                $request->session()->put('userEmailLogin', $emailCheck->email);
                return redirect('/feeds')->with('success', 'Login successfully to keDevForum');
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
            return redirect('/feeds')->with('success', 'Logout successfully from keDevForum');
        } else {
            return redirect('/feeds')->with('error', 'You are not logged in');
        }
    }

    public function forgotUserPassword(Request $request)
    {
        $email = $request->input('email');
        //CHECK IF EMAIL IS ALREADY REGISTERED FROM MYSQL DATABASE ON TABLE users
        $emailCheck = DB::table('users')->where('email', $email)->first();
        if ($emailCheck) {
            //SEND AN EMAIL TO THE USER WITH A LINK TO RESET PASSWORD
            // $mail = new PHPMailer(true);
            // try {
            //     //Server settings
            //     $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            //     $mail->isSMTP();                                            //Send using SMTP
            //     $mail->Host       = 'smtp.gmail.com';                    //Set the SMTP server to send through
            //     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            //     $mail->Username   = 'your email';                     //SMTP username
            //     $mail->Password   = 'your password';                               //SMTP password
            //     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable implicit TLS encryption
            //     $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //     //Recipients
            //     $mail->setFrom('your email', 'keDevForum');
            //     $mail->addAddress($email);     //Add a recipient

            //     //Content
            //     $mail->isHTML(true);                                  //Set email format to HTML
            //     $mail->Subject = 'Reset Password';
            //     $mail->Body    = 'Click on the link below to reset your password <br> <a href="http://localhost:8000/reset-password?email=' . $email . '">Reset Password</a>';
            //     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            return redirect()->back()->with('success', 'Password reset link sent to your email');
            //     $mail->send();
            // } catch (Exception $e) {
            //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            // }
        } else {
            return redirect()->back()->with('error', 'Email not registered');
        }
    }
}