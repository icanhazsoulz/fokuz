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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->unsignedBigInteger('type_id')->nullable();
            $table->enum('sex', ['male', 'female'])->nullable();
            $table->string('breed')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
//            $table->unsignedBigInteger('category_id')->nullable();
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('types')->nullOnDelete();
//            $table->foreign('category_id')->references('id')->on('categories')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
