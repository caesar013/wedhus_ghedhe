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
        Schema::create('farms', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 100)->nullable();
            $table->unsignedBigInteger('foldtype_id');
            $table->foreign('foldtype_id')->references('id')->on('foldtypes')->restrictOnDelete();
            $table->unsignedBigInteger('sheep_id')->nullable();
            $table->foreign('sheep_id')->references('id')->on('sheep')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farms');
    }
};
