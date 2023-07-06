<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class MailController extends Controller
{
    // Store data
    public function storeUser(Request $request) {
        // User Model
        $user = new User;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->save();

        // Send mail (.env file ma setup hovu jose ho)
        event(new Registered($user));
        return redirect()->back()->with('status' , 'Varification link is send');
    }

    // Check Login user
    public function login(Request $request){
        $credentials = ["email" => $request->email, "password" => $request->password];
        if(Auth::attempt($credentials))
        {
            return "you are verified user!";
        }
        else{
            return redirect()->back()->with('status','Invalid Credentials');
        }
    }
}
