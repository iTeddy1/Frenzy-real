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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('regular_price')->nullable();
            $table->string('sale_price')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('rating')->default(0);
            $table->string('gender')->nullable();
            $table->string('colorway')->default('#000000');
            $table->string('status')->nullable();
            $table->string('images')->nullable();
            $table->integer('sold')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
