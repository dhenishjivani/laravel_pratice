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
        Schema::table('demo', function (Blueprint $table) {
            //
            $table->string('city', 60)->after('state');
            $table->string('state', 40)->after('gender')->change();
            $table->string('hobbies')->after('dob')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('demo', function (Blueprint $table) {
            //
        });
    }
};
