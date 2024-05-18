<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    // Method to display all products
    public function index()
    {

        $products = Product::with('assets')->paginate(5);
        $totalQuantity = Product::with('assets')->sum('quantity');
        $averagePrice = Product::with('assets')->average('regular_price');
        return view('admin.products.index', ['products' => $products , "totalQuantity" => $totalQuantity, "averagePrice" => $averagePrice]);
    }

    // Method to display the form for creating a new product
    public function create()
    {
        return view('admin.products.create');
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
        
        return view('admin.products.show', ['product' => $product, 'related' => $related]);
    }
    // Method to store a newly created product
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);
        
        Product::create($validated);
        return redirect('/products');
    }

    // Method to display the form for editing a product
    public function edit(Product $product)
    {
        return view('admin.products.edit', ['product' => $product]);
    }

    // Method to update a product
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('admin.products.index', $product);
    }

    public function destroy(Product $product)
    {
        // Gate::authorize('edit-job', $job);

        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
