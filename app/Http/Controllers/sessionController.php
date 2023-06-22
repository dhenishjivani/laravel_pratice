<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class sessionController extends Controller
{
    //
    function login(Request $response)
    {
        $response->validate(
            [
                'name' => 'required | max: 20',
                'password' => ['required', Password::min(8)->letters(), Password::min(8)->mixedCase(), Password::min(8)->numbers(), Password::min(8)->symbols()],
                'confirmpassword' => 'required | same:password'
            ],
            [
                'name.required' => 'Please enter your name',
                'password.required' => 'Please enter the password',
                'password.min' => 'Please enter strong password which contain atleast 8 charachters',
                'confirmpassword.required' => 'Please enter the confirm password',
            ]
        );
        $resulteData =  $response->input('name');
        $response->session()->put('name', $resulteData);
        // $response->session()->flash('name' , $resulteData);     // one time use session
        // echo session('name');
        return redirect('home');

        // $resulteData =  $response->all();
        // $response->session()->put('data' , $resulteData);
        // print_r(session('data'));
        // echo session('data');
    }
}
