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
        Schema::table('user', function (Blueprint $table) {
            
            $table->string('firstName')->nullable()->change();
            $table->string('lastName')->nullable()->change();
            $table->boolean('isAdmin')->nullable()->change();
            $table->string('province')->nullable()->change();
            $table->string('city')->nullable()->change();
            $table->string('address')->nullable()->change();
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user', function (Blueprint $table) {
            $table->string('firstName')->nullable(false)->change();
            $table->string('lastName')->nullable(false)->change();
            $table->boolean('isAdmin')->nullable(false)->change();
            $table->string('province')->nullable(false)->change();
            $table->string('city')->nullable(false)->change();
            $table->string('address')->nullable(false)->change();
        });
    }
};
