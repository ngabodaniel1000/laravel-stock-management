@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-semibold mb-4 text-white text-center mt-10">Product Out Records</h1>

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('products_out.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add New Product Out</a>

    <table class="min-w-full mt-4 border border-gray-300">
        <thead>
            <tr>
                <th class="border-b py-2 px-4">Product Name</th>
                <th class="border-b py-2 px-4">Date</th>
                <th class="border-b py-2 px-4">Quantity</th>
                <th class="border-b py-2 px-4">Unit Price</th>
                <th class="border-b py-2 px-4">Total Price</th>
                <th class="border-b py-2 px-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productsOut as $productOut)
                <tr class="text-white">
                    <td class="border-b py-2 px-4">
                        {{ $productOut->product ? $productOut->product->ProductName : 'N/A' }}
                    </td>
                    <td class="border-b py-2 px-4">{{ $productOut->DateTime }}</td>
                    <td class="border-b py-2 px-4">{{ $productOut->Quantity }}</td>
                    <td class="border-b py-2 px-4">{{ $productOut->UnitPrice }}</td>
                    <td class="border-b py-2 px-4">{{ $productOut->TotalPrice }}</td>
                    <td class="border-b py-2 px-4">
                        <a href="{{ route('products_out.edit', $productOut->id) }}" class="text-blue-500">Edit</a>
                        <form action="{{ route('products_out.destroy', $productOut->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
