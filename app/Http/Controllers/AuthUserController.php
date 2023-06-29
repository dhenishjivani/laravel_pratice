<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthUserController extends Controller
{
    //
    // public function show_auth_user() {
    //     // return Auth::user();
    //     // return Auth::user()->name;
    //     return Auth::id();

    // }

    public function show_auth_user(Request $request) {
        // return $request->user();
        // return $request->user()->email;
    }

    public function check_auth_user() {
        if(Auth::check()) {
            return "You are Authenticated Person";
        }
        return "Please Leave this webpage or give your identity to access the webpage because you are not Authorised Person";
    }
}
