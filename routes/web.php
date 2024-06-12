<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Middleware\Role;
use Illuminate\Support\Facades\Route;

//! Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
// Contact
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');


//! Auth
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

//! Admin routes
Route::middleware(['auth', Role::class . ':admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('products', [AdminProductController::class, 'index'])->name('products.index');

    // Route to display the form for creating a new product
    Route::get('products/create', [AdminProductController::class, 'create'])->name('products.create');
    Route::post('products', [AdminProductController::class, 'store']);
    Route::get('products/show/{product}', [AdminProductController::class, 'show'])->name('products.show');
    Route::get('products/{product}/edit', [AdminProductController::class, 'edit'])->name('products.edit');
    Route::patch('products/{product}', [AdminProductController::class, 'update'])->name('products.update');
    Route::delete('products/show/{product}', [AdminProductController::class, 'destroy'])->name('products.destroy');

    Route::get('orders', [AdminOrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{order}', [AdminOrderController::class, 'show'])->name('orders.show');
    Route::post('/orders', [AdminOrderController::class, 'store'])->name('orders.store');
    Route::get('/orders/{order}/edit', [AdminOrderController::class, 'edit'])->name('orders.edit');
    Route::patch('/orders/{order}', [AdminOrderController::class, 'update'])->name('orders.update');
    Route::delete('/orders/{order}', [AdminOrderController::class, 'destroy'])->name('orders.destroy');

});

//! User routes
Route::middleware(['auth', 'verified'])->prefix('user')->name('user.')->group(function () {
    Route::get('/checkout/shipping', [CheckoutController::class, 'shipping'])->name('checkout.shipping');
    Route::post('/checkout/shipping', [CheckoutController::class, 'storeShipping'])->name('checkout.storeShipping');

    Route::get('/checkout/payment', [CheckoutController::class, 'payment'])->name('checkout.payment');
    Route::post('/checkout/momo_payment', [CheckoutController::class, 'momoPayment'])->name('checkout.momoPayment');
    Route::post('/checkout/success', [CheckoutController::class, 'storePayment'])->name('checkout.storePayment');
    Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');

    // Cart 
    Route::post('/cart', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart', [CheckoutController::class, 'cart'])->name('checkout.cart');
    
    Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
    Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
    
    Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
});
