<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

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

// Home
Breadcrumbs::for('contact', function (BreadcrumbTrail $trail) {
  $trail->parent('home');
  $trail->push('Contact', route('contact'));
});