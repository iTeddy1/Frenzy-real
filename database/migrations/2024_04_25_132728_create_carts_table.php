<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Cart;
use App\Models\Product;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'user_id')->constrained()->cascadeOnDelete();
            $table->integer('total');
            $table->timestamps();
        });

        Schema::create('cart_item', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Cart::class, 'cart_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Product::class, 'product_id')->constrained()->cascadeOnDelete();
            $table->integer('quantity');
            $table->integer('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
