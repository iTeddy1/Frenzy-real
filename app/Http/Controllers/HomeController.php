<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {    // Get the sort parameters from the request
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

        return view('home', [
            'products' => $products,
            'searchTerm' => $searchTerm,
            'sortField' => $sortField,
            'sortDirection' => $sortDirection
        ]);
    }
}