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
        Schema::create('factor', function (Blueprint $table) {
            $table->id();
            $table->string('userName');
            $table->timestamp('date_month_year')->nullable();
            $table->timestamp('paidAt')->nullable();
            $table->bigInteger('total');
            $table->string('description',250);
            $table->unsignedBigInteger('discount');
            $table->string('status');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factor');
    }
};
