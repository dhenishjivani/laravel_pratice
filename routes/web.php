<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RateLimiterController;
use App\Http\Controllers\SendOrderMailController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Cache;

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
Route::get('/login', function () {
    return view('loginUser');
})->name('login');
Route::post('/login', [MailController::class, 'login']);


// When Authentication and verification both complete then this view is call
Route::view('/home', 'home')->middleware(['auth', 'verified']);


// If verification is remaing and we are try to log in then this route will be run
Route::get('/email/verify', function () {
    return view('notice');
})->middleware('auth')->name('verification.notice');


// For Resend the Email
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


// The Password Reset Link Request Form
Route::get('/forgotPassword', function () {
    return view('forgotPassword');
})->middleware('guest')->name('password.request');


// Handling The Form Submission
Route::post('/forgotPassword', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');


// The Password Reset Form
Route::get('/reset-password/{token}', function (string $token) {
    return view('passwordReset', ['token' => $token]);
})->middleware('guest')->name('password.reset');


// Handling The Form Submission
Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');


// Cache in laravel
Route::get('/test', [TestController::class, 'index']);
// aek j route ma put karavsu amuk second mate ne pachu tya j get karavasu to locho j padse ne aetale aa second route aena mate che
Route::get('/tests', function () {
    dd(Cache::get('name'));
});


Route::post('imageUpload', [ImageController::class, 'store']);
Route::view('imageUpload', 'imageUpload');
Route::get('/imageDisplay', function () {
    return view('imageDisplay');
});
Route::get('/download_local', [ImageController::class, 'download_local']);
Route::get('/download_public', [ImageController::class, 'download_public']);

Route::get('SendMail', [SendOrderMailController::class, 'SendMail']);
