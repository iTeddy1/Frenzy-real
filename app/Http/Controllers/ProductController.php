<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Method to display all products
    public function index()
    {
        $products = Product::all();
        return view('admin.product_list', ['products' => $products ]);
    }

    // Method to display the form for creating a new product
    public function create()
    {
        return view('admin.product_create');
    }

    public function show( $id)
    {
        return view('product_show', ['id' => $id]);
    }
    // Method to store a newly created product
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect('/products');
    }

    // Method to display the form for editing a product
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product_edit', ['product' => $product]);
    }

    // Method to update a product
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.show', $product->id);
    }
}
