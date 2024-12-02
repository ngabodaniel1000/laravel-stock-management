<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductIn extends Model
{
    use HasFactory;

    // Specify the table name if it is not the plural form of the model name
    protected $table = 'product_ins'; // Adjust according to your database table name

    // Define the fillable attributes
    protected $fillable = [
        'ProductCode', // Add this line to allow mass assignment
        'DateTime',
        'Quantity',
        'UnitPrice',
        'TotalPrice',
    ];

    // Optionally, if ProductCode is not an auto-incrementing integer
    public $incrementing = true;

    // If you have a specific primary key
    protected $primaryKey = 'id'; // If your primary key is ProductCode
    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductCode', 'ProductCode');
    }
}
