<?php

namespace App\Http\Controllers;

use App\Http\Requests\customRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use LDAP\Result;

class UserController extends Controller
{
    //
    function display($name, $age = 0, $user)
    {
        // echo "I come from Controller...!!";
        echo "Hello " . $name . " your age is " . $age . $user;
    }
    function show($name)
    {
        // return view('first' , ['id' => 'Dhenish']);
        // return view('blade_practice' , ['id' => 'Denish']);
        $arr = ['Dhenish', 'Denish', 'Denisha', 'Deni', 'Helly'];
        return view('blade_practice', ['names' => $arr]);
    }

    function formData(customRequest $returnData)
    {
        $returnData->validated();

        return redirect('/');
        // return $returnData->input();    // badhu avse 
        // return $returnData->input("name");  // khali name j avse 
        // return $returnData->all();      // badhu avse 
        // input no use apne koy aek j vastu joti hoy to use thay baki all to che j jo apane badhi value joti hoy to 
    }

    function getApiData()
    {
        // $url = "https://simple-tool-rental-api.glitch.me/tools";
        $url = "https://reqres.in/api/users?page=1";
        $data =  Http::get($url);
        // return view('api-data' , ['collection'=>$data]);
        return view('api-data', ['collection' => $data['data']]);
    }

    function connDatabase()
    {
        // return DB::select("Select * from information");
        // return DB::table('information')->get();
        // $data = DB::table('tests')->where('name' , 'Dhenish')->get();
        // print_r($data);
        // return DB::table('tests')->first();
        // return DB::table('tests')->where('name' , 'Dhenish')->value('Date');
        // return DB::table('tests')->find('10');
        // return DB::table('tests')->count();
        // return DB::table('tests')->where('name' , 'Dhenish')->count();

        // Jo success thase to return 1 avse baki error to che j te 
        // return DB::table('tests')->insert([
        //     'Date' => '2023/05/16',          
        //     'name' => 'Denisha'
        // ]);

        //Biji var file loard karsu to 0 apse km ke already aek var update thay gayo hoy ne apane fari pacha try kari to m j thay ne 
        // return DB::table('tests')->where('id',3)->update([
        //     'Date'=>'23/07/17',
        //     'name'=>'Gopi'
        // ]);

        // aevu id ke je che j nyyy ne aene delete karsu to return 0 means false batanave 
        // return DB::table('tests')->where('id',32)->delete();
        // $resultdata = DB::table('tests')->where('id', 32)->get();
        // if ($resultdata->isEmpty()) {
        //     return DB::table('tests')->insert([
        //         'Date' => time(),
        //         'name' => 'Meera'
        //     ]);
        // } else {
        //     return DB::table('tests')->where('id',40)->update([
        //         'Date' => '2023/11/22',
        //         'name' => 'Krishna'
        //     ]);
        // }

        // ********  Aggregate Function   ********
        // return DB::table('tests')->max('id');
        // return DB::table('tests')->min('id');
        // return DB::table('tests')->sum('id');
        // return DB::table('tests')->avg('id');
    }
}
