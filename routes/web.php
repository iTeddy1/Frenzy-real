<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Role;
use Illuminate\Support\Facades\Route;

//! Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [HomeController::class, 'products'])->name('products.index');
Route::get('/products/{product}', [HomeController::class, 'showProduct'])->name('products.show');

//! Auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Admin routes
Route::middleware(['auth', Role::class . ':admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('products', [AdminProductController::class, 'index'])->name('products.index');

    // Route to display the form for creating a new product
    Route::get('products/create', [AdminProductController::class, 'create'])->name('products.create');
    // Route to store a newly created product
    Route::post('products', [AdminProductController::class, 'store']);

    Route::get('products/show/{product}', [AdminProductController::class, 'show'])->name('products.show');
    // Route to display the form for editing a product
    Route::get('products/{product}/edit', [AdminProductController::class, 'edit'])->name('products.edit');

    // Route to update a product
    Route::patch('products/{product}', [AdminProductController::class, 'update'])->name('products.update');

    Route::delete('products/show/{product}', [AdminProductController::class, 'destroy'])->name('products.destroy');
});

// User routes
Route::middleware('auth')->prefix('user')->name('user.')->group(function () {
    // Route::resource('orders', UserOrderController::class)->except(['create', 'edit']);
    // Route::get('orders/create/{product}', [UserOrderController::class, 'create'])->name('orders.create');
    // Route::get('orders/{order}/edit', [UserOrderController::class, 'edit'])->name('orders.edit');
});