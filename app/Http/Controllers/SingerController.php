<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Singer;
use App\Models\Song;

class SingerController extends Controller
{
    public function addSinger() {
        $singer = new Singer;
        $singer->name = "Bansi";
        $singer->save();

        $id = [3,4,5];
        $singer->songs()->attach($id);
    }

    // Get Singer by Song ID
    public function getSinger($id) {
        $singer = Song::find($id)->singers;
        return $singer;
    }
}
