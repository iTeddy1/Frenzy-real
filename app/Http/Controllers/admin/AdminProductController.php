<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\Product;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    // Method to display all products
    public function index(Request $request)
    {
        $totalQuantity = Product::with('assets')->sum('quantity');
        $averagePrice = Product::with('assets')->average('regular_price');

        $searchTerm = $request->input('query');

        // Query products based on search term
        $productsQuery = Product::query();

        if ($searchTerm) {
            $productsQuery->where('name', 'like', "%$searchTerm%")
                ->orWhere('description', 'like', "%$searchTerm%");

        }
        $products = $productsQuery->with('assets')->latest()->paginate(10);

        $products->appends(request()->query());
        // dd($products);
        return view('admin.products.index', [
            'products' => $products,
            'searchTerm' => $searchTerm,
            'totalQuantity' => $totalQuantity,
            'averagePrice' => $averagePrice,
        ]);
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
            'quantity' => 'required|numeric',
            'gender' => 'required|string',       
            'regular_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
        ]);
        
        $product = Product::create($validated);
        // Tạo các asset và liên kết với sản phẩm
        // $assets= Storage::putFileAs('public/assets/product' . '/' . $product->id, $request->file('assets'), $request->file('assets')->getClientOriginalName());
        $assets = $request->file('assets');
        // dd($request->file('assets'));
        foreach ($assets as $index => $asset) {
            $path = Storage::putFileAs('public/assets/product' . '/' . $product->id, $assets, $assets->getClientOriginalName());
            $assetModel = Asset::create([
                'filename' => 'image',
                'path' => $path,
                'type' => $asset->getClientMimeType(),
            ]);
            $type = $index == 0 ? 'main' : '';
            $product->assets()->attach($assetModel->id, ['type' => $type]);
        }

        return redirect('admin/products');
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

        $product->assets()->delete();
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
