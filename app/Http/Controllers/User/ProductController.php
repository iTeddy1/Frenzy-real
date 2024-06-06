<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $sortField = $request->input('sort_field', 'name'); // Default to sorting by name
        $sortDirection = $request->input('sort_direction', 'asc'); // Default to ascending order

        $searchTerm = $request->input('query');

        // Query products based on search term
        $productsQuery = Product::query();

        if ($searchTerm) {
            $productsQuery->where('name', 'like', "%$searchTerm%")
                ->orWhere('description', 'like', "%$searchTerm%");
        }

        // Apply sorting
        $productsQuery->orderBy($sortField, $sortDirection);

        // Fetch products based on the search query or fetch all products
        $products = $productsQuery->with('assets')->latest()->paginate(12);
        $products->appends(request()->query());
        // dd($products);
        return view('home', [
            'products' => $products,
            'searchTerm' => $searchTerm,
            'sortField' => $sortField,
            'sortDirection' => $sortDirection
        ]);
    }

    public function show(Product $product)
    {
        return view('user.products.show', ['product' => $product]);
    }
}
