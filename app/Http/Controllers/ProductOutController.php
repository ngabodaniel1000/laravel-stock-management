<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductOut;
use App\Models\Product;

class ProductOutController extends Controller
{
    // Display a listing of the product out records
    public function index()
    {
        $productsOut = ProductOut::with('product')->get(); // Load the product relationship
        return view('productouts\index', compact('productsOut'));
    }

    // Show the form for creating a new product out record
    public function create()
    {
        $products = Product::all(); // Get all products for dropdown
        return view('productouts\create', compact('products'));
    }

    // Store a newly created product out record in storage
    public function store(Request $request)
    {
        $request->validate([
            'ProductCode' => 'required|exists:products,ProductCode',
            'Quantity' => 'required|integer|min:1',
            'UnitPrice' => 'required|numeric|min:0',
        ]);

        $totalPrice = $request->Quantity * $request->UnitPrice;

        ProductOut::create([
            'ProductCode' => $request->ProductCode,
            'DateTime' => now(),
            'Quantity' => $request->Quantity,
            'UnitPrice' => $request->UnitPrice,
            'TotalPrice' => $totalPrice,
        ]);

        return redirect()->route('products_out.index')->with('success', 'Product stock-out record created successfully');
    }

    // Show the form for editing the specified product out record
    public function edit($id)
    {
        $productOut = ProductOut::findOrFail($id);
        $products = Product::all(); // Get all products for dropdown
        return view('productouts\edit', compact('productOut', 'products'));
    }

    // Update the specified product out record in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'ProductCode' => 'required|exists:products,ProductCode',
            'Quantity' => 'required|integer|min:1',
            'UnitPrice' => 'required|numeric|min:0',
        ]);

        $totalPrice = $request->Quantity * $request->UnitPrice;

        $productOut = ProductOut::findOrFail($id);
        $productOut->update([
            'ProductCode' => $request->ProductCode,
            'Quantity' => $request->Quantity,
            'UnitPrice' => $request->UnitPrice,
            'TotalPrice' => $totalPrice,
        ]);

        return redirect()->route('products_out.index')->with('success', 'Product stock-out record updated successfully');
    }

    // Remove the specified product out record from storage
    public function destroy($id)
    {
        $productOut = ProductOut::findOrFail($id);
        $productOut->delete();

        return redirect()->route('products_out.index')->with('success', 'Product stock-out record deleted successfully');
    }
}
