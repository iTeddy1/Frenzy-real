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
    public function add(Request $request)
    {
        // Validate the request input
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Retrieve the product and quantity from the request
        $product = Product::findOrFail($request->product_id);
        $quantity = $request->quantity;

        // Get or create a cart for the authenticated user
        $cart = Cart::firstOrCreate(['user_id' => Auth::id()]);

        // Check if the product is already in the cart
        $cartItem = $cart->items()->where('product_id', $product->id)->first();

        if ($cartItem) {
            // If the item already exists in the cart, update its quantity and price
            $cartItem->quantity += $quantity;
            $cartItem->price += $quantity * $product->price;
        } else {
            // If the item doesn't exist in the cart, create a new cart item
            $cartItem = new CartItem([
                'cart_id' => $cart->id,
                'product_id' => $product->id,
                'quantity' => $quantity,
                'price' => $quantity * $product->price,
            ]);
        }

        // Save the cart item
        $cartItem->save();

        // Update the total price of the cart
        $cart->updateTotal();

        // Flash a success message to be displayed after redirect
        session()->flash('success', 'Product added to cart.');

        // Redirect to the product page
        return redirect()->route('products.show', $product);
    }
}
