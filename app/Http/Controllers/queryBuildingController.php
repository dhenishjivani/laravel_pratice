<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Collection;

class queryBuildingController extends Controller
{
    //
    function connDatabase()
    {
        ####### Specifying A Select Clause #######
        // return DB::select("Select * from information");
        // return DB::table('information')->get();
        // return DB::table('products')->distinct()->get(); 

        // $data =  DB::table('products')->select('pcompany'); 
        // return $data->addSelect('price')->get();


        ####### Single Row or Column #######
        // return DB::table('tests')->first();
        // return DB::table('tests')->where('name' , 'Dhenish')->value('Date');
        // return DB::table('tests')->find('10');


        ####### Retrieving A List Of Column Values #######
        // Loop na chalavi pade and koy pan single column ni badhi values ne ape fetch karine 
        // $data = DB::table('products')->pluck('pcompany');
        // foreach ($data as $price) {
        //     echo $price . " , ";
        // }


        ####### Chunking Results #######
        // return DB::table('products')->orderBy('price')->chunk(3, function (Collection $users, $i = 0) {
        //     foreach ($users as $user) {
        //         echo "<pre>";
        //         print_r($user);
        //     }
        //     echo "Chunk" . $i;
        //     $i += 1;
        //     // After some chunk if we want to stop the execution
        //     if ($i == 3) {
        //         return false;
        //     }
        // });


        ####### Streaming Results Lazily #######
        // return DB::table('products')->orderBy('price')->lazy();



        #######  Aggregate Function   #######
        // return DB::table('tests')->count();
        // return DB::table('tests')->max('id');
        // return DB::table('tests')->min('id');
        // return DB::table('tests')->sum('id');
        // return DB::table('tests')->avg('id');


        #######  Joins   #######
        // return DB::table('tests')->join('products','tests.id','=','products.pid')->where('price','20')->where('pcompany','Orio')->select('tests.Name')->get();

        // return DB::table('tests')->join('products', 'tests.id', '=', 'products.pid')->where([['price', '20'], ['pcompany', '<>', 'Orio']])->orWhere([['price', '20'], ['pcompany', 'Orio']])->select('tests.Name')->get();
        // return DB::table('tests')->join('products','tests.id','=','products.pid')->join('transactions','tests.id','=','transactions.id')->select('transactions.*')->get();

        // return DB::table('tests')->crossJoin('products')->get();
        // return DB::table('tests')
        // ->join('products', function (JoinClause $join) {
        //     $join->on('tests.Name', '=', 'products.pid')->where('price','20')
        //     ->orOn('tests.id', '=', 'products.pid')->where('price','20');
        // })->get();


        ####### Raw Expressions #######
        // return DB::table('products')->select(DB::raw('count(*) as Totel'))->get();
        // return DB::table('products')->select('price', DB::raw('count(*) as Totel'))->groupBy('price')->get();

        #######  Where Clauses   #######
        // $data = DB::table('tests')->where('name' , 'Dhenish')->get();
        // print_r($data);
        // return DB::table('tests')->count();
        // return DB::table('tests')->where('name' , 'Dhenish')->count();
        // return DB::table('products')->where('price','10')->orWhere([['pcompany','Monaco'],['price',30]])->select('pid')->get();

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

        // return DB::table('products')->select('price')->whereBetween('price' , [0 , 10])->get();
        // return DB::table('products')->select('price')->whereNotBetween('price' , [0 , 10])->get();
        // return DB::table('products')->select('price')->whereIn('price' , [0 , 14 , 20])->get();
        // return DB::table('products')->select('price')->whereNotIn('price' , [0 , 20 , 26 , 27, 30 , 29])->get();
        // return DB::table('tests')->select('Date')->whereMonth('Date', '11')->get();
        // AAvu j haji whereDate / whereMonth / whereDay / whereYear / whereTime ave che 
        // return DB::table('products')->whereColumn('price', 'pid')->get();

        ####### Union #######
        // $data = DB::table('products')->whereNotNull('price');
        // return DB::table('products')->whereNull('pcompany')->union($data)->get();
    }
}
