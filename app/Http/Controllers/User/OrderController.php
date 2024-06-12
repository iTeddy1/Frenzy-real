<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->with('status')->get();
        return view('user.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        // dd($order->address);
        return view('user.orders.show', compact('order'));
    }
}
