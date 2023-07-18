<?php

namespace App\Http\Controllers;

use App\Event\PodcastProcessed;
use Illuminate\Http\Request;

class EventListenerTestController extends Controller
{
    //
    public function eventListener() {
        event(new PodcastProcessed("<h1>Welcome email is send to your register email address</h1>"));
    }
}
