<?php
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/admin', [AdminLoginController::class, 'login'])->name('admin.login');

//! Admin product
// Route to display all products
Route::get('products', [ProductController::class, 'index'])->name('products');

// Route to display the form for creating a new product
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Route to store a newly created product
Route::post('/products', [ProductController::class, 'store']);

Route::get('/products/show/{id}', [ProductController::class, 'show'])->name('products.show');
// Route to display the form for editing a product
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Route to update a product
Route::patch('/products/{product}', [ProductController::class, 'update'])->name('products.update');

//! Auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';