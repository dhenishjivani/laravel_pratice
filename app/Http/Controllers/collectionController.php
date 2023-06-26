<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class collectionController extends Controller
{
    //
    public function collections() {
        $collect = collect([10,20,30,40,50,60,70,80,90]);
        // dd($collect)->all();     // object apse akho 
        // $data = $collect->all();
        // dd($data);      // only array apse 
        // $data = $collect->avg();
        // $data = $collect->chunk(4);
        // $data = $collect->reverse();
        $data = $collect->map(function($item , $key) {
            return $item * 10;
        })->reverse()->all();
        dd($data);
    }
}