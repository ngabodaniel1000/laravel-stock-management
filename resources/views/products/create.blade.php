@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-semibold mb-4">Add New Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="ProductCode" class="block mb-2">Product Code</label>
            <input type="text" name="ProductCode" id="ProductCode" required class="border rounded px-4 py-2 w-full">
        </div>
        <div class="mb-4">
            <label for="ProductName" class="block mb-2">Product Name</label>
            <input type="text" name="ProductName" id="ProductName" required class="border rounded px-4 py-2 w-full">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Product</button>
    </form>
</div>
@endsection
