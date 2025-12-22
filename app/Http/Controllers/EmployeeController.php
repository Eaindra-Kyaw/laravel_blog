<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Product;

class EmployeeController extends Controller
{
    public function showProducts($id)
    {
        $employee = Employee::with('products')->find($id);

        foreach($employee->products as $product) {
            echo $product->name . "<br>";
        }
    }

    public function showOrders($productId)
    {
        $product = Product::with('orders')->find($productId);

        foreach($product->orders as $order) {
            echo $order->order_number . "<br>";
        }
    }
}
