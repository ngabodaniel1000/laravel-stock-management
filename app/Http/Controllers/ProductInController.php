<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductIn;
use App\Models\Product;

class ProductInController extends Controller
{
    // Display a listing of the product in records
    public function index()
    {
        $productsIn = ProductIn::with('product')->get(); // Load the product relationship
        return view('productsin\index', compact('productsIn'));
    }

    // Show the form for creating a new product in record
    public function create()
    {
        $products = Product::all(); // Get all products for dropdown
        return view('productsin\create', compact('products'));
    }

    // Store a newly created product in record in storage
    public function store(Request $request)
    {
        $request->validate([
            'ProductCode' => 'required|exists:products,ProductCode',
            'Quantity' => 'required|integer|min:1',
            'UnitPrice' => 'required|numeric|min:0',
        ]);

        $totalPrice = $request->Quantity * $request->UnitPrice;

        ProductIn::create([
            'ProductCode' => $request->ProductCode,
            'DateTime' => now(),
            'Quantity' => $request->Quantity,
            'UnitPrice' => $request->UnitPrice,
            'TotalPrice' => $totalPrice,
        ]);

        return redirect()->route('products_in.index')->with('success', 'Product stock-in record created successfully');
    }

    // Show the form for editing the specified product in record
    public function edit($id)
    {
        $productIn = ProductIn::findOrFail($id);
        $products = Product::all(); // Get all products for dropdown
        return view('productsin\edit', compact('productIn', 'products'));
    }

    // Update the specified product in record in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'ProductCode' => 'required|exists:products,ProductCode',
            'Quantity' => 'required|integer|min:1',
            'UnitPrice' => 'required|numeric|min:0',
        ]);

        $totalPrice = $request->Quantity * $request->UnitPrice;

        $productIn = ProductIn::findOrFail($id);
        $productIn->update([
            'ProductCode' => $request->ProductCode,
            'Quantity' => $request->Quantity,
            'UnitPrice' => $request->UnitPrice,
            'TotalPrice' => $totalPrice,
        ]);

        return redirect()->route('products_in.index')->with('success', 'Product stock-in record updated successfully');
    }

    // Remove the specified product in record from storage
    public function destroy($id)
    {
        $productIn = ProductIn::findOrFail($id);
        $productIn->delete();

        return redirect()->route('products_in.index')->with('success', 'Product stock-in record deleted successfully');
    }
}
