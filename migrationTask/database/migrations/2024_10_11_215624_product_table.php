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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('number');
            $table->string('category');
            $table->unsignedBigInteger('price');
            $table->string('likeNumbers');
            $table->string('color');
            $table->string('size');
            $table->char('picture');
            $table->timestamp('postedAt')->nullable();
            $table->boolean('available');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
