<?php

// dd(request());
// dd(request()->bearerToken());
// dd(request()->path());
// dd(request()->url());   // aa ona jem j te ke ?(question mark) karine apyu hase ae ama nyy batave 
// dd(request()->fullUrl());    // aama full url batavse ? mark vadu pan 
// dd(request()->method());
// dump(request()->header());
// dd(request()->header('host'));
// if(request()->hasHeader('Content-type')) {
//     dd('Header present');
// } else {
//     dd('Header is not present');
// };
// dd(request()->ip());
// dump(request()->getAcceptableContentTypes());
// dd(request()->query('name','Dhenish'));
// dd(request()->query());
// dd(app());
// dd(app()->make('Hello'));
// App\Providers\AppServiceProvider ma je Bind karelu che aene apane aya make thi execute kari saki chiye
// Custome Providers pan banay saki aene register che ne ae Config\app.php ma karavanu 

use App\Http\Controllers\FirstController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\queryBuildingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\serviceController;
use Illuminate\Support\Facades\App;
use PhpParser\Node\Stmt\Catch_;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use App\Models\Demo;
use App\Http\Controllers\registrationFormController;
use App\Http\Controllers\resourceController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\SingerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('first');
// });

// // Route::get('/', function () {
// //     return redirect("home");
// // });

// Route::get('/{_}', function ($names) {  // aya tukma variable j bane che aetale lettes ka underscode j chalse 
//     // echo $name;
//     return view('first',['id'=> $names]);
// });

Route::view('/', '/first');
Route::get('/language/{language}', function ($lang) {
    if ($lang == 'hi') {
        App::setLocale('hi');
    }
    if ($lang == 'guj') {
        App::setLocale('guj');
    }
    return view('first');
});
Route::view('aboutUsPage', '/about')->name("aboutPage");
Route::view('contact', '/contact');
Route::view('homes', '/blade_practice');

// Route::get("user/{name}", [UserController::class, 'show']);    // single parameter

// Route::get("user/name/{name}/age/{age?}", [UserController::class, 'display'])->middleware(["age", "userTest"]);  // Multiple age? -->> aa default value mate che ho 

Route::get('name/{name}', [UserController::class, 'show']);
// // Route::get('/{about}' , FirstController::class);

Route::post("form", [UserController::class, 'formData']);
Route::view("form", "/form");
// Route::view('noaccess', 'noaccess');

// // Route::group(['middleware' => 'age'], function () {  // group middleware
// //     Route::view('/', '/first');
// //     Route::view("form", "/form");
// //     Route::view("about", "/about");
// // });

// // Route::view("form" , "form")->middleware("age");    // Route Middleware

Route::get("apidata", [UserController::class, 'getApiData']);
// // Route::match(['get','post'],'form','/form');
// // Route::view("form", "/form");

Route::get("data/name/{name}/age/{age}", function ($names, $age) {       // aya je name che ae niche vat thay che 
    return "Hello" . $names . "! Your Age is:" . $age;
})->where(["name" => "[a-zA-Z]+", 'age' => '[0-9]+']);

// aya je name che ae j name url vada variable ma rakhavo pade 
// aa aena mate hatu ke apne khali letters j enter thava devana che aetale -->> space ke _ ke aevu kay nyy chale ama 
//Jo vadhare variable leva hoy to array banay nakhvano 

Route::get("testValidationOnInput/{number}", function ($num) {
    return $num;
});     // aa chene app\Providers\RouteServiceProvider.php karine file che tya validation mukela che tyathi check kare che where ni jagya ye aa use kai saki apane ama dhayn rakhava jevu ae che ke providers vadi file ma je name apyu hase apne ae j name aya {} ma pass karvanu to j work karse ho 

Route::post("loginForm", [sessionController::class, 'login']);
Route::view("loginUser", "sessionForm");
Route::get('home', function () {
    if (session()->has('name')) {
        return view("home");
    } else {
        return redirect('loginUser');
    }
});
Route::get("/logout", function () {
    if (session()->has('name')) {
        // echo session('name');
        // Session::flush();
    }
    return redirect('loginUser');
});
Route::get("/loginUser", function () {
    if (session()->has('name')) {
        // echo session('name');
        return redirect('home');
    }
    return view('sessionForm');
});

Route::get("user/emp/name/{name}", function ($name) {
    return $name;
})->name("yourname");

Route::view("service", '/services');

Route::view("facad", "facad");

// ** Facades nu che aa ke lage che static method get ne set ne ae badhi pan che nyy **
// cache()->set('key' , 'Dhenish');
// dd(cache()->get('key'));

// Cache::set('key' , 'Denish');
// dd(Cache::get('key'));

Route::get("/logs", function () {
    // Log::info("This is for testing log.");
    Log::channel("customlog")->alert("This is cunstom logs");
    // dd("ok che");
});


Route::get("/database", [queryBuildingController::class, 'connDatabase']);

// Route::get("/modelDemo" , function() {
//     $result = Demo::all();
//     echo "<pre>";
//     print_r($result->toArray());
// });

// Route::view("register", "registrationForm");

// Route::post("/sendData", [registrationFormController::class, 'details']);
// Route::get("/register" , [registrationFormController::class , 'display']);
// Route::view("/displaydata", "displayFormData");
// // URL method mate
// Route::get("/deleteData/{id}", [registrationFormController::class, 'delete']);
// // Route method mate
// Route::get("/deleteData/{id}", [registrationFormController::class, 'delete'])->name('user.delete');
// Route::get("editData/{id}", [registrationFormController::class, 'edit'])->name('user.edit');
// Route::get("updateData/{id}", [registrationFormController::class, 'update'])->name('user.update');

Route::resource("/register", resourceController::class);
Route::resource("/relation", GroupController::class);

Route::get('/saveGroup',[GroupController::class,'saveGroupData']);
Route::get('/saveMember',[GroupController::class,'saveMemberData']);

Route::get('song',[SongController::class,'addSong']);
Route::get('singer',[SingerController::class,'addSinger']);
Route::get('getSong/{id}',[SongController::class,'getSong']);
Route::get('getSinger/{id}',[SingerController::class,'getSinger']);

