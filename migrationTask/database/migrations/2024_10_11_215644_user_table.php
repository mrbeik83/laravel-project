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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('phoneNumber');
            $table->boolean('isAdmin');
            $table->timestamp('lastLogin')->nullable();
            $table->string('province');
            $table->string('city');
            $table->string('address');
            $table->string('userName')->unique();
            $table->timestamp('deletedAt')->nullable();
            $table->timestamp('createdAt')->nullable();
            $table->string('email')->unique();
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
