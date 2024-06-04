<!-- resources/views/admin/products/show.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">Product Details</h1>
    {{ Breadcrumbs::render('admin.products.show', $product) }}

    <div class="bg-white shadow-md rounded-lg mb-6 p-4">
        <div class="flex flex-wrap -mx-2">
            <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0">
                <img src="{{ $product->assets->first()->path }}" alt="{{ $product->name }}" class="rounded-lg shadow-lg w-full">
            </div>
            <div class="w-full md:w-1/2 px-2">
                <h2 class="text-2xl font-semibold">Name: {{ $product->name }}</h2>
                <h4 class="text-xl font-bold mb-2">Price: {{ number_format($product->regular_price) }}₫</h4>
                <!-- Stock and Category can be uncommented if needed -->
                <p class="text-lg mb-4"><strong>Description:</strong> {{ $product->description }}</p>
                <p class="text-sm text-text-normal"><strong>Created at:</strong> {{ $product->created_at->format('d/m/Y H:i') }}</p>
                <p class="text-sm text-text-normal"><strong>Updated at:</strong> {{ $product->updated_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>
    </div>

    <div class="flex space-x-2">
        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Edit Product
        </a>
        <button type="submit" form="destroy" class="btn btn-danger bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" 
                onclick="return confirm('Are you sure you want to delete this product?');">
            Delete Product
        </button>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Back to Products
        </a>
    </div>
</div>

<form action="{{ route('admin.products.destroy', $product->id) }}" id="destroy" method="POST" class="hidden">
    @csrf
    @method('DELETE')
</form>
@endsection
