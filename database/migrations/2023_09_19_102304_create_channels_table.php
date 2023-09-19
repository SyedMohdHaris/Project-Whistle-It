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
        Schema::create('channels', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('description')->nullable(false);
            $table->unsignedBigInteger('teamId');
            $table->unsignedBigInteger('userId');
            $table->timestamps();

            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');


        });
 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('channels');
    }
};
