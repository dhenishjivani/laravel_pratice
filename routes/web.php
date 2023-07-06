<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Registration form Route
Route::view('register', 'register-email');


// Store Registration details into data base with the controller
Route::post('storeUser', [MailController::class, 'storeUser']);


// When we click on the link this route will call
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    // We can see the alert message through this view
    return redirect('home');
})->middleware(['auth', 'signed'])->name('verification.verify');


// After verification we need login and for that called login method of MailController
Route::get('/login',function(){
    return view('loginUser');
})->name('login');
Route::post('/login',[MailController::class,'login']);


// When Authentication and verification both complete then this view is call
Route::view('/home', 'home')->middleware(['auth' , 'verified']);


// If verification is remaing and we are try to log in then this route will be run
Route::get('/email/verify', function () {
    return view('notice');
})->middleware('auth')->name('verification.notice');


// For Resend the Email
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
