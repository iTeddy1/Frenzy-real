<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')->paginate(5);
        // dd($orders[0]);
        return view('admin.orders.index', ['orders' => $orders]);
    }

    // Admin: Show specific order
    public function show(Order $order)
    {
        $order->load('user');
        return view('admin.orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        return view('admin.orders.edit', compact('order'));
    }

    // Admin: Update order status
    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'status_id' => 'required|exists:order_statuses,id',
        ]);

        $order->update($validated);

        return redirect()->route('admin.orders.show', $order)->with('success', 'Order status updated.');
    }
}
