@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-semibold mb-4">Edit Product In Record</h1>

    <form action="{{ route('products_in.update', $productIn->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="ProductCode" class="block mb-2">Product Code</label>
            <select name="ProductCode" id="ProductCode" required class="border rounded px-4 py-2 w-full">
                @foreach($products as $product)
                    <option value="{{ $product->ProductCode }}" {{ $productIn->ProductCode === $product->ProductCode ? 'selected' : '' }}>
                        {{ $product->ProductName }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="Quantity" class="block mb-2">Quantity</label>
            <input type="number" name="Quantity" id="Quantity" value="{{ $productIn->Quantity }}" required class="border rounded px-4 py-2 w-full">
        </div>
        <div class="mb-4">
            <label for="UnitPrice" class="block mb-2">Unit Price</label>
            <input type="number" step="0.01" name="UnitPrice" id="UnitPrice" value="{{ $productIn->UnitPrice }}" required class="border rounded px-4 py-2 w-full">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Product In</button>
    </form>
</div>
@endsection