<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    //
    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // aa video ma apelu che store vadu
        // 1. local // $request->file('image')->store('Uploaded-Image');   // aama storage ni andar app ni andar folder banse
        // custom name
        // $filename = time()."-JD.".$request->file('image')->getClientOriginalExtension();
        // 2. Public  // $request->file('image')->storeAs('public/Uploaded-Image' , $filename);


        // Using Put method documentaion mathi karelu aa
        Storage::disk('local')->put('Image', $request->file('image'));
        return view('imageDisplay');

        // Extra
        // $url = Storage::url('1689055728-JD.jpeg');
        // print_r($url);
    }

    public function download_local(Request $request)
    {
        if (Storage::disk('local')->exists("Uploaded-Image/$request->file")) {
            $path = Storage::disk('local')->path("Uploaded-Image/$request->file");
            $content = file_get_contents($path);
            return response($content)->withHeaders([
                "Content-Type" => mime_content_type($path)
            ]);
        }
        return redirect('/404');
    }

    public function download_public(Request $request)
    {
        if (Storage::disk('public')->exists("Uploaded-Image/$request->file")) {
            $path = Storage::disk('public')->path("Uploaded-Image/$request->file");
            $content = file_get_contents($path);
            return response($content)->withHeaders([
                "Content-Type" => mime_content_type($path)
            ]);
        }
        return redirect('/404');
    }

    // public function download_public(Request $request)
    // {
    //     if (Storage::disk('public')->exists("Uploaded-Image/$request->file")) {
    //         $path = Storage::disk('public')->path("Uploaded-Image/$request->file");
    //         // print_r($path);
    //         // die;
    //         // dump($path);
    //         // Get ma che ne bhai relative path apvo padse baki kay nyy male
    //         $content = Storage::get("/public/Uploaded-Image/1689055728-JD.jpeg");
    //         return response($content)->withHeaders([
    //             "Content-Type" => mime_content_type($path)
    //         ]);

    //         // Download karva mate only Storage::download ane aene return karvanu re khali
    //         // return Storage::download("/public/Uploaded-Image/1689055728-JD.jpeg", "FromDownloaded");
    //     }
    //     return redirect('/404');
    // }
}
