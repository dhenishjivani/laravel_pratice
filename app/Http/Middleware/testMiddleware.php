<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Symfony\Component\HttpFoundation\Response;

class testMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $response = $next($request);    //  request jati rese pachi check thase aena jevu
        // dd($request);
        // if($request->age < 18) {
        //     echo "Age is invalide <br>";
        // } else {
        //     echo "You age is valid <br>";
        // }
        // // return $response;
        // return $next($request); //  pela check thase pachi request send thase 

        // echo "Global message for all Page with Middleware ";
        // echo "Global message for all Page with Group Middleware ";
        echo "This message is only for form file with middleware";
        if($request->age && $request->age<18) {
            return redirect("noaccess");
        }
        return $next($request); 
    }
}
