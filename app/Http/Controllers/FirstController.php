<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    /**
     * Handle the incoming request.
     */
    // public function __invoke(Request $request)
    // {
    //     return view('first' , ['id' => $request]);
    // }

    public function __invoke($returnData)
    {
        return view('first' , ['id' => $returnData]);
    }
}
