<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\CartItem;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = Auth::user()->cart;
        return view('checkout.cart', compact('cart'));
    }

    public function add(Request $request)
    {
        $product = Product::find($request->input('product_id'));
        $quantity = $request->input('quantity');

        $cart = Auth::user()->cart()->firstOrCreate(['user_id' => Auth::id(), 'total' => $product->regular_price]);
        $cartItem = $cart->items()->where('product_id', $product->id)->first();

        if ($cartItem) {
            $cartItem->quantity += $quantity;
        } else {
            $cartItem = new CartItem([
                'cart_id' => $cart->id,
                'product_id' => $product->id,
                'quantity' => $quantity,
                'price' => $product->regular_price,
            ]);
            $cart->items()->save($cartItem);
        }

        $cart->total = $cart->items->sum(fn($item) => $item->quantity * $item->price);
        $cart->save();

        return redirect()->route('user.cart.index');
    }

    public function update(Request $request)
    {
        $cartItem = CartItem::find($request->input('cart_item_id'));
        $cartItem->quantity = $request->input('quantity');
        $cartItem->save();

        $cart = $cartItem->cart;
        $cart->total = $cart->items->sum(fn($item) => $item->quantity * $item->price);
        $cart->save();

        return redirect()->route('user.cart.index');
    }

    public function remove(Request $request)
    {
        $cartItem = CartItem::find($request->input('cart_item_id'));
        $cartItem->delete();

        $cart = $cartItem->cart;
        $cart->total = $cart->items->sum(fn($item) => $item->quantity * $item->price);
        $cart->save();

        return redirect()->route('user.cart.index');
    }
}
