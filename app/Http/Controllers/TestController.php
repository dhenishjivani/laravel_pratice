<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
class TestController extends Controller
{
    //
    public function index() {
        // Stroing Item
        // Cache::put('name' , 'Dhenish' , 10);    // second nyy api to permenant store thay jase
        // Cache::put('name' , 'Dhenish' , now()->addMinutes(1));    // aavu pan api saki
        // 1 minutes sudhi aa yad rakho jo ae na hoy to nichenu je che ae return thase
        // Cache::remember('name' , 10 , function() {
        //     return 'Dheno';
        // });
        // Cache::add('name' , 'Denish' , 5);
        // Cache::forever('name' , 'Dhenish');

        // data retrive karva mate get method ni sathe array pan pass karavi saki 
        return view('test');
    }
}
