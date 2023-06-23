<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use Illuminate\Http\Request;
use App\Models\Song;


class SongController extends Controller
{
    //
    public function addSong() {
        $song = new Song();
        $song->title = "Shri Krishna Govind Hare Murari";
        $song->save();
    }

    // Get song based on Singer ID
    public function getSong($id) {
        $song = Singer::find($id)->songs;
        // aa songs vadi method je apane Singer na model ma lakheli hoy ae 
        return $song;
    }
}
