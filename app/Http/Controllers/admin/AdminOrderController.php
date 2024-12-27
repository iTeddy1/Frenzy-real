<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index(Request $request)
    {
        $query = Order::with('user');

        // Lọc theo khoảng thời gian
        if ($request->start_date && $request->end_date) {
            $query->whereBetween('created_at', [$request->start_date, $request->end_date]);
        }

        // Lọc theo thành tiền
        if ($request->min_total) {
            $query->where('total', '>=', $request->min_total);
        }
        if ($request->max_total) {
            $query->where('total', '<=', $request->max_total);
        }

        $orders = $query->paginate(5);

        return view('admin.orders.index', compact('orders'));
    }

    public function edit(Order $order)
    {
        $orderDetails = Order::with(['items.product', 'address', 'status'])
        ->findOrFail($order->id);
        // dd($orderDetails);
        return view('admin.orders.edit', compact('orderDetails'));
    }

    // Admin: Update order status
    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'status' => 'required|string|in:pending,processing,shipped,delivered,cancelled',
            'city' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'ward' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
        ]);

        $order->user->update($validated);
        $order->address->update($validated);
        $order->update($validated);

        return redirect()->route('admin.orders.index', $order)->with('success', 'Order status updated.');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('admin.orders.index')->with('success', 'Order deleted.');
    }
}
