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
        //
        Schema::create('demo' , function (Blueprint $table) {
            $table->id()->autoIncrement();   // id nu name aoavu hoy to parameter ma api saki apane id('sid') ke m 
            // and also we can give like this $table->increments('id');
            // $table->id('student_id');
            $table->string('name');
            // $table->string('name' , 100);    // default 255 che jo kay na api to 255 j ganay 
            $table->string('email');
            $table->text('address');
            $table->date('dob')->nullable();
            $table->enum('gender' , ['Male','Female','Other']);
            // $table->string('password');
            // $table->boolean('status')->default(1);  // active inactive
            // $table->integer('points')->default(0);  // paytm ma ave che aeva 
            $table->timestamps();
        });
        // Schema::rename('demo','firstDemo2');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //  
        // Schema::drop('demo');    // bane no diff kay khabar nyy
        Schema::dropIfExists('demo');
    }
};
