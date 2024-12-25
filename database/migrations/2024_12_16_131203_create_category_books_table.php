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
        Schema::create('category_books', function (Blueprint $table) {
            $table->id();            
            $table->string('title')->nullable();
            $table->string('auther_name')->nullable();
            $table->string('price')->nullable();
            $table->string('discription')->nullable();
            $table->string('book_img')->nullable();
            $table->string('auther_img')->nullable();
            $table->boolean('status')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_books');
    }
};