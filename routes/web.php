<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostFeedController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('app/feeds');
});


Route::get('/feeds', function () {
    return view('app/feeds');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/register', function () {
    return view('auth/register');
});


Route::get('/forgot-password', function () {
    return view('auth/forgotpassword');
});

Route::get('/profile', function () {
    return view('app/profile');
});

Route::get('/postfeed', function () {
    return view('app/postfeed');
});

Route::get('/dev/{id}', function ($id) {
    return view('app/viewprofile', ['id' => $id]);
});

Route::get('/notifications', function () {
    return view('app/notifications');
});

Route::get('/explore', function () {
    return view('app/explore');
});

Route::get('/devit/{id}', function ($id) {
    return view('app/devit', ['id' => $id]);
});

Route::get('/resetpassword/{id}', function ($id) {
    return view('auth/reset', ['id' => $id]);
});

//COMING SOON

//post routes

Route::post('/registeruser', [AuthController::class, 'registerUser']);

Route::post('/loginuser', [AuthController::class, 'loginUser']);

Route::get('/logout', [AuthController::class, 'logoutUser']);

Route::post('/forgotpassword', [AuthController::class, 'forgotUserPassword']);

Route::post('/reseruser', [AuthController::class, 'resetUserPassword']);

Route::post('/changeaverter', [AuthController::class, 'changeAverter']);


Route::post('/postuserfeed', [PostFeedController::class, 'userPostFeed']);



//CREATE A DIVITUP AND DIVITDOWN ROUTE

