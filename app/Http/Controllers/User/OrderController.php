<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {

        $orders = Order::where('user_id', Auth::id())->with('status')->get();
        // dd($orders);
        return view('user.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $orderDetails = Order::with(['items.product', 'address', 'status'])
        ->findOrFail($order->id);
        // dd($orderDetails);
        return view('user.orders.show', compact('order', 'orderDetails'));
    }
}
