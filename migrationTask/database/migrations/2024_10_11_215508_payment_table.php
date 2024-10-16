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
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->timestamp('startedAt')->nullable();
            $table->timestamp('finishedAt')->nullable();
            $table->string('userName');
            $table->string("userNameId");
            $table->bigInteger('total');
            $table->boolean('isPaid');
            $table->string('trakingNumber');
            $table->string('nationalCode',10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
