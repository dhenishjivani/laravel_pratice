<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fastController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        return "Haan moj haan";
    }
}
