<?php

namespace App\Http\Controllers;

use App\Models\ProductIn;
use App\Models\ProductOut;

class ReportController extends Controller
{
    // Display the report
    public function index()
    {
        $productsIn = ProductIn::with('product')->get(); // Load the product relationship
        $productsOut = ProductOut::with('product')->get(); // Load the product relationship

        // Combine the products into a single array
        $combinedProducts = [];

        foreach ($productsIn as $productIn) {
            $combinedProducts[$productIn->ProductCode] = [
                'ProductCode' => $productIn->ProductCode,
                'DateTimeIn' => $productIn->DateTime,
                'QuantityIn' => $productIn->Quantity,
                'UnitPriceIn' => $productIn->UnitPrice,
                'TotalPriceIn' => $productIn->TotalPrice,
                'DateTimeOut' => null, // Initialize for Product Out
                'QuantityOut' => null,
                'UnitPriceOut' => null,
                'TotalPriceOut' => null,
            ];
        }

        foreach ($productsOut as $productOut) {
            if (!isset($combinedProducts[$productOut->ProductCode])) {
                $combinedProducts[$productOut->ProductCode] = [
                    'ProductCode' => $productOut->ProductCode,
                    'DateTimeIn' => null, // Initialize for Product In
                    'QuantityIn' => null,
                    'UnitPriceIn' => null,
                    'TotalPriceIn' => null,
                ];
            }
            $combinedProducts[$productOut->ProductCode]['DateTimeOut'] = $productOut->DateTime;
            $combinedProducts[$productOut->ProductCode]['QuantityOut'] = $productOut->Quantity;
            $combinedProducts[$productOut->ProductCode]['UnitPriceOut'] = $productOut->UnitPrice;
            $combinedProducts[$productOut->ProductCode]['TotalPriceOut'] = $productOut->TotalPrice;
        }

        return view('reports.index', ['combinedProducts' => $combinedProducts]); // Pass the combined array to the view
    }
}
