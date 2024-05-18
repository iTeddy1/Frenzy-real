<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function cart()
    {
        $cart = Session::get('cart', []);
        $total = array_sum(array_column($cart, 'total_price'));

        return view('checkout.cart', compact('cart', 'total'));
    }

    public function shipping()
    {
        return view('checkout.shipping');
    }

    public function storeShipping(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255',
        ]);

        Session::put('shipping', $request->only('address'));

        return redirect()->route('user.checkout.payment');
    }

    public function payment()
    {
        $cart = Session::get('cart', []);
        $total = array_sum(array_column($cart, 'total_price'));
        $shipping = Session::get('shipping', []);

        return view('checkout.payment', compact('cart', 'total', 'shipping'));
    }

    public function storePayment(Request $request)
    {
        $cart = Session::get('cart', []);
        $shipping = Session::get('shipping', []);
        $total = array_sum(array_column($cart, 'total_price'));

        // Handle payment logic (e.g., Stripe, PayPal)

        // Create order
        $order = new Order();
        $order->user_id = Auth::id();
        $order->total_price = $total;
        $order->address = $shipping['address'];
        $order->status = 'Pending';
        $order->save();

        // Save order items
        foreach ($cart as $item) {
            $order->products()->attach($item['product_id'], ['quantity' => $item['quantity'], 'price' => $item['price']]);
        }

        // Clear the cart
        Session::forget('cart');
        Session::forget('shipping');

        return redirect()->route('user.checkout.success');
    }

    public function success()
    {
        return view('checkout.success');
    }
}


