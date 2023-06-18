<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostFeedController;
use App\Http\Controllers\socialauthcontroller;
use Laravel\Socialite\Facades\Socialite;


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

//KeDev Academy And KeDev Books Routes
Route::get('/kedevacademy', function () {
    return view('acadamy/kedevacademy');
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


//social auth routes
Route::get('/auth/github/redirect', [socialauthcontroller::class, 'githubredirect'])->name('githubredirect');
Route::get('/auth/github/callback', [socialauthcontroller::class, 'githubcallaback'])->name('githubcallaback');
Route::get('/auth/google/redirect', [socialauthcontroller::class, 'googleredirect'])->name('googleredirect');
Route::get('/auth/google/callback', [socialauthcontroller::class, 'googlecallaback'])->name('googlecallaback');
Route::get('/auth/facebook/redirect', [socialauthcontroller::class, 'facebookredirect'])->name('facebookredirect');
Route::get('/auth/facebook/callback', [socialauthcontroller::class, 'facebookcallaback'])->name('facebookcallaback');
Route::get('/auth/twitter/redirect', [socialauthcontroller::class, 'twitterredirect'])->name('twitterredirect');
Route::get('/auth/twitter/callback', [socialauthcontroller::class, 'twittercallaback'])->name('twittercallaback');
Route::get('/auth/linkedin/redirect', [socialauthcontroller::class, 'linkedinredirect'])->name('linkedinredirect');
Route::get('/auth/linkedin/callback', [socialauthcontroller::class, 'linkedincallaback'])->name('linkedincallaback');
