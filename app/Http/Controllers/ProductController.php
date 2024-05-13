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

    public function show(Product $product)
    {
        $gender = $product->gender;

        // Fetch related products with the same gender
        $related = Product::where('gender', $gender)
            ->where('id', '!=', $product->id) // Exclude the current product
            ->limit(4) // Adjust as needed to limit the number of related products
            ->get();
        // dd($related);
        
        return view('product_show', ['product' => $product, 'related' => $related]);
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
