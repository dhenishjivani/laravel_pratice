<?php

namespace App\Http\Controllers;

use App\Jobs\SendTestMailJob;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class SendOrderMailController extends Controller
{
    //
    public function SendMail()
    {
        // Clouser
        // dispatch(function () {
        //     $user = User::where('id', 1)->first();
        //     Mail::to($user)->send(new OrderShipped($user));
        // })->delay(now()->addMinute());


        // Aa bane madhi pan koy aek use kari saki as you wish
        // dispatch(new SendTestMailJob())->delay(now()->addMinute());
        // \App\Jobs\SendTestMailJob::dispatch()->delay(now()->addMinute());
    }
}
