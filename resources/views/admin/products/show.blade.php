<!-- resources/views/admin/products/show.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Product Details</h1>

    <div class="card mb-4">
        <div class="card-header">
            <h2>{{ $product->name }}</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ $product->assets->first()->path }}" alt="{{ $product->name }}" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h4>Price: ${{ number_format($product->regular_price, 2) }}₫</h4>
                    {{-- <h4>Stock: {{ $product->stock }}</h4> --}}
                    {{-- <p><strong>Category:</strong> {{ $product->category->name }}</p> --}}
                    <p><strong>Description:</strong> {{ $product->description }}</p>
                    <p><strong>Created at:</strong> {{ $product->created_at->format('d/m/Y H:i') }}</p>
                    <p><strong>Updated at:</strong> {{ $product->updated_at->format('d/m/Y H:i') }}</p>
                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary">Edit Product</a>

    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger"
                onclick="return confirm('Are you sure you want to delete this product?');">Delete Product</button>
    </form>

    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Back to Products</a>
</div>
@endsection
