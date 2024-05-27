<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

// class AdminCategoryController extends Controller
// {
//     public function index()
//     {
//         $categories = Category::all();
//         return view('admin.categories.index', compact('categories'));
//     }

//     public function create()
//     {
//         return view('admin.categories.create');
//     }

//     public function store(Request $request)
//     {
//         $validated = $request->validate([
//             'name' => 'required|string|max:255',
//         ]);

//         Category::create($validated);
//         return redirect()->route('admin.categories.index');
//     }

//     public function edit(Category $category)
//     {
//         return view('admin.categories.edit', compact('category'));
//     }

//     public function update(Request $request, Category $category)
//     {
//         $validated = $request->validate([
//             'name' => 'required|string|max:255',
//         ]);

//         $category->update($validated);
//         return redirect()->route('admin.categories.index');
//     }

//     public function destroy(Category $category)
//     {
//         $category->delete();
//         return redirect()->route('admin.categories.index');
//     }
// }

