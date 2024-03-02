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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_uid')->unique();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('shelter_id')->nullable();
            $table->unsignedBigInteger('client_source_id')->nullable();
            $table->enum('status', ['new', 'processing', 'completed', 'cancelled'])->default('new');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('category_id')->references('id')->on('categories')->nullOnDelete();
            $table->foreign('shelter_id')->references('id')->on('shelters')->nullOnDelete();
            $table->foreign('client_source_id')->references('id')->on('client_sources')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
