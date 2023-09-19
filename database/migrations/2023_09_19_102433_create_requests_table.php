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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable(false);
            $table->string('requestType')->nullable(false);
            $table->string('reciverName')->nullable(false);
            $table->unsignedBigInteger('userId')->nullable(false);
            $table->timestamps();

            $table->foreign('userId')->references('id')->on("users")->delete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
