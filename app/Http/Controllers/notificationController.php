<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\WelcomeNotification;
use Illuminate\Support\Facades\Notification;

class notificationController extends Controller
{
    //
    public function notificationSend() {
        $user = User::where('id',1)->first();
        $user->notify(new WelcomeNotification());
        // Notification::send($user , new WelcomeNotification());
        dd('Notification');
    }
}
