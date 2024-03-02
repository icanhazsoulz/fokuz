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
        Schema::create('photoshootings', function (Blueprint $table) {
            $table->id();
            $table->string('photoshooting_uid')->unique();
            $table->unsignedBigInteger('pet_id')->nullable();
            // date, gallery, ...
            $table->unsignedBigInteger('order_id')->nullable();
            $table->timestamps();

            $table->foreign('pet_id')->references('id')->on('pets')->nullOnDelete();
            $table->foreign('order_id')->references('id')->on('orders')->nullOnDelete();
        });
    }

    /**
     * Reerse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photoshootings');
    }
};
