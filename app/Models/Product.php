<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural form of the model name
    protected $table = 'products';

    // Specify the primary key
    protected $primaryKey = 'ProductCode';

    // Disable the incrementing feature as the primary key is not an integer
    public $incrementing = false;

    // Define the fillable attributes
    protected $fillable = [
        'ProductCode',
        'ProductName',
    ];
    
}
