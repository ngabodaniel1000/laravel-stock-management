@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-semibold mb-4 text-white text-center mt-10">Product In Records</h1>

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('products_in.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add New Product In</a>

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
        <tbody class="text-white">
            @foreach($productsIn as $productIn)
                <tr>
                    <td class="border-b py-2 px-4">
                        {{ $productIn->product ? $productIn->product->ProductName : 'N/A' }}
                    </td>
                    <td class="border-b py-2 px-4">{{ $productIn->DateTime }}</td>
                    <td class="border-b py-2 px-4">{{ $productIn->Quantity }}</td>
                    <td class="border-b py-2 px-4">{{ $productIn->UnitPrice }}</td>
                    <td class="border-b py-2 px-4">{{ $productIn->TotalPrice }}</td>
                    <td class="border-b py-2 px-4">
                        <a href="{{ route('products_in.edit', $productIn->id) }}" class="text-blue-500">Edit</a>
                        <form action="{{ route('products_in.destroy', $productIn->id) }}" method="POST" style="display:inline;">
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
