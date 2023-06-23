<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    use HasFactory;
    public function songs() {
        return $this->belongsToMany(Song::class, 'singer_songs' , relatedPivotKey:'songs_id');
        // aya malti nathi key ae song_id gotatu tu pan DB ma songs_id lakhelu hatu me so 
    }
}
