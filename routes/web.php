<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home'
);


//! Admin product
// Route to display all products
Route::get('products', [ProductController::class, 'index']);

// Route to display the form for creating a new product
Route::get('/products/create', [ProductController::class, 'create']);
// Route to store a newly created product
Route::post('/products', [ProductController::class, 'store']);

Route::get('/products/show/{id}', [ProductController::class, 'show']);
// Route to display the form for editing a product
Route::get('/products/edit/{id}', [ProductController::class, 'edit']);

// Route to update a product
Route::patch('/products/update/{product}', [ProductController::class, 'update']);

//! Auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';