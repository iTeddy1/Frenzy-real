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
    {
        $searchTerm = $request->input('query');

        // Query products based on search term
        $productsQuery = Product::query();

        if ($searchTerm) {
            $productsQuery->where('name', 'like', "%$searchTerm%")
                          ->orWhere('description', 'like', "%$searchTerm%");
        }

        // Fetch products based on the search query or fetch all products
        $products = $productsQuery->with('assets')->paginate(12);
        // dd($products);
        return view('home', ['products' => $products, 'searchTerm' => $searchTerm]);
    }
}