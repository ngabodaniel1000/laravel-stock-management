@extends('layouts.app')

@section('content')
  <div class="text-white">
      <h1 class="text-white text-center mt-10 text-2xl">Product Report</h1>
      <table style="width: 100%; border-collapse: collapse; margin: 20px auto;">
          <thead>
              <tr style="background-color: #333; color: white;">
                  <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Product Code</th>
                  <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Date Time In</th>
                  <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Quantity In</th>
                  <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Unit Price In</th>
                  <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Total Price In</th>
                  <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Date Time Out</th>
                  <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Quantity Out</th>
                  <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Unit Price Out</th>
                  <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Total Price Out</th>
              </tr>
          </thead>
          <tbody>
              @foreach($combinedProducts as $product)
              <tr>
                  <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{ $product['ProductCode'] }}</td>
                  <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{ $product['DateTimeIn'] }}</td>
                  <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{ $product['QuantityIn'] }}</td>
                  <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{ $product['UnitPriceIn'] }}</td>
                  <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{ $product['TotalPriceIn'] }}</td>
                  <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{ $product['DateTimeOut'] }}</td>
                  <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{ $product['QuantityOut'] }}</td>
                  <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{ $product['UnitPriceOut'] }}</td>
                  <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{ $product['TotalPriceOut'] }}</td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
@endsection