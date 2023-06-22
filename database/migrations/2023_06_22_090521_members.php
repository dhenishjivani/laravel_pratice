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
        Schema::create('members', function (Blueprint $table) {
            $table->id('member_id');
            $table->string('name');
            $table->string('mobile',12);
            // $table->unsignedBigInteger('group_id');
            // $table->foreign('aa table ni key jene fk banavi che ae')->references('primay key')->on('pk table name');
            $table->foreignId('group_id')->constrained(table:'groups',column:'group_id',indexName:'member_group_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
