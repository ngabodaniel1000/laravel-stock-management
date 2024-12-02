@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-semibold mb-4">Edit Product</h1>

    <form action="{{ route('products.update', $product->ProductCode) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="ProductCode" class="block mb-2">Product Code</label>
            <input type="text" name="ProductCode" id="ProductCode" value="{{ $product->ProductCode }}" required class="border rounded px-4 py-2 w-full" readonly>
        </div>
        <div class="mb-4">
            <label for="ProductName" class="block mb-2">Product Name</label>
            <input type="text" name="ProductName" id="ProductName" value="{{ $product->ProductName }}" required class="border rounded px-4 py-2 w-full">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Product</button>
    </form>
</div>
@endsection
