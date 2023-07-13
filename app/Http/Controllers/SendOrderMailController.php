<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class SendOrderMailController extends Controller
{
    //
    public function SendMail() {
        $user = User::where('id', 1)->first();
        Mail::to($user)->send(new OrderShipped($user));
    }
}
