<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Product;

class EmployeeController extends Controller
{
    public function showProducts($id)
    {
        $employee = Employee::with('product')->find($id);
        return "Employee: {$employee->name} <br> Product: {$employee->product->name}";
    }

    public function showOrders($productId)
    {
        $product = Product::with('orders')->find($productId);
        $output = "Product: {$product->name} <br> Orders: <br>";
        foreach ($product->orders as $order) {
            $output .= "- {$order->order_number}<br>";
        }

        return $output;
    }
}
