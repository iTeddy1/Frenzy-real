<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

//! Public Breadcrumbs
// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

//! Admin Breadcrumbs
// Home > Products
  Breadcrumbs::for('admin.products', function (BreadcrumbTrail $trail) {
      $trail->parent('home');
      $trail->push('Products', route('admin.products.index'));
  });

// Home > Products > New Product
Breadcrumbs::for('admin.products.create', function (BreadcrumbTrail $trail) {
  $trail->parent('home');
  $trail->push('Products', route('admin.products.index'));
  $trail->push('New Product', route('admin.products.create'));
});

// Home > Products > Edit Product
Breadcrumbs::for('admin.products.edit', function (BreadcrumbTrail $trail, $product) {
  $trail->parent('home');
  $trail->push('Products', route('admin.products.index'));
  $trail->push('Edit Product', route('admin.products.edit', $product->id));
});

// Home > Products > Show Product
Breadcrumbs::for('admin.products.show', function (BreadcrumbTrail $trail, $product) {
  $trail->parent('home');
  $trail->push('Products', route('admin.products.index'));
  $trail->push('Show Product', route('admin.products.show', $product->id));
});

// Home > Orders  
Breadcrumbs::for('admin.orders', function (BreadcrumbTrail $trail) {
  $trail->parent('home');
  $trail->push('Orders', route('admin.orders.index'));
});

// Home > Orders > Show Order
Breadcrumbs::for('admin.orders.show', function (BreadcrumbTrail $trail, $order) {
  $trail->parent('home');
  $trail->push('Orders', route('admin.orders.index'));
  $trail->push('Show Order', route('admin.orders.show', $order));
});

// Home > Orders > Edit Order
Breadcrumbs::for('admin.orders.edit', function (BreadcrumbTrail $trail, $order) {
  $trail->parent('home');
  $trail->push('Orders', route('admin.orders.index'));
  $trail->push('Edit Order', route('admin.orders.edit', $order));
});

// Contact
Breadcrumbs::for('contact', function (BreadcrumbTrail $trail) {
  $trail->parent('home');
  $trail->push('Contact', route('contact'));
});

//! User Breadcrumbs
Breadcrumbs::for('products.show', function (BreadcrumbTrail $trail, $product) {
  $trail->parent('home');
  $trail->push('Products', route('products.index'));
  $trail->push('Show Product', route('products.show', $product->id));
});


// Home > Checkout - Cart
Breadcrumbs::for('user.checkout.cart', function (BreadcrumbTrail $trail, $cart) {
  $trail->parent('home');
  $trail->push('Checkout', route('user.checkout.cart', $cart));
});

// Home > Checkout - Shipping
Breadcrumbs::for('user.checkout.shipping', function (BreadcrumbTrail $trail) {
  $trail->parent('home');
  $trail->push('Checkout', route('user.checkout.cart'));
});

// Home > Checkout - Payment
Breadcrumbs::for('user.checkout.payment', function (BreadcrumbTrail $trail) {
  $trail->parent('home');
  $trail->push('Checkout', route('user.checkout.cart'));
});

// Home > Orders
Breadcrumbs::for('user.orders', function (BreadcrumbTrail $trail) {
  $trail->parent('home');
  $trail->push('Orders', route('user.orders.index'));
});

// Home > Orders > Show Order
Breadcrumbs::for('user.orders.show', function (BreadcrumbTrail $trail, $order) {
  $trail->parent('home');
  $trail->push('Orders', route('user.orders.index'));
  $trail->push('Show Order', route('user.orders.show', $order));
});