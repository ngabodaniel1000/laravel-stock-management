<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Display a listing of products
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Show the form for creating a new product
    public function create()
    {
        return view('products.create');
    }

    // Store a newly created product in storage
    public function store(Request $request)
    {
        $request->validate([
            'ProductCode' => 'required|unique:products,ProductCode|max:10',
            'ProductName' => 'required|string|max:100',
        ]);

        Product::create([
            'ProductCode' => $request->ProductCode,
            'ProductName' => $request->ProductName,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    // Display the specified product

    // Show the form for editing the specified product
    public function edit($ProductCode)
    {
        $product = Product::findOrFail($ProductCode);
        return view('products.edit', compact('product'));
    }

    // Update the specified product in storage
    public function update(Request $request, $ProductCode)
    {
        $request->validate([
            'ProductName' => 'required|string|max:100',
        ]);

        $product = Product::findOrFail($ProductCode);
        $product->update([
            'ProductName' => $request->ProductName,
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    // Remove the specified product from storage
    public function destroy($ProductCode)
    {
        $product = Product::findOrFail($ProductCode);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
