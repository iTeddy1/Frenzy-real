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
Breadcrumbs::for('products', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    // $trail->push('Products', route('products'));
});

// Home > Products > Create Product
Breadcrumbs::for('products.create', function (BreadcrumbTrail $trail) {
  $trail->parent('home');
  // $trail->push('Create Product', route('products.create'));
});

// Home > Products > Edit Product
Breadcrumbs::for('products.edit', function (BreadcrumbTrail $trail, $id) {
  $trail->parent('products');
  // $trail->push('Edit Product', route('products.edit', $id));
});

// // Home > Blog > [Category]
// Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
//     $trail->parent('blog');
//     $trail->push($category->title, route('category', $category));
// });