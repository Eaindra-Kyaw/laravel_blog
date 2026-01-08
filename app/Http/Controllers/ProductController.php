<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function showEmployee($productId)
    {
        $product = Product::with('employee')->find($productId);
        return "Product: {$product->name} <br> Employee: {$product->employee->name}";
    }
}
