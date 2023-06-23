<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('singer_songs', function (Blueprint $table) {
            $table->id();

            // Big Method
            // $table->unsignedBigInteger('singer_id');
            // $table->foreign('singer_id')->references('id')->on('singers');
            // $table->unsignedBigInteger('song_id');
            // $table->foreign('song_id')->refrences('id')->on('songes');

            // Short cut
            $table->foreignId('singer_id')->constrained('singers');
            $table->foreignId('songs_id')->constrained('songs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('singer_songs');
    }
};
