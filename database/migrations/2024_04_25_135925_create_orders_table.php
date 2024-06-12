<?php

use App\Models\Address;
use App\Models\Order;
use App\Models\OrderStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Cart;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'user_id')->constrained()->cascadeOnDelete();
            $table->string('payment_method')->default('cod');
            $table->integer('total');
            $table->string('status')->default('pending');
            $table->timestamps();
        }); 

        Schema::create('order_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('status'); // e.g., 'pending', 'processing', 'shipped', 'delivered', 'cancelled'
            $table->timestamps();
        });
        
        Schema::create('order_address', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Order::class, 'order_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Address::class, 'address_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('order_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Order::class, 'order_id')->constrained()->cascadeOnDelete();
            $table->foreignId('status_id')->constrained('order_statuses')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_address');
        Schema::dropIfExists('order_histories');
        Schema::dropIfExists('order_statuses');

    }
};

