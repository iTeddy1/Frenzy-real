<?php 
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products'=> $products]);
    }

    public function show(Product $product)
    {
        return view('products.show', ['product'=> $product]);
    }
}
