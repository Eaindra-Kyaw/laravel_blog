<?php

namespace App\Http\Controllers;

use App\Models\Employee;

class EmployeeController extends Controller
{
    public function showProfile($id)
    {
        return Employee::with('profile')->findOrFail($id);
    }

    public function showOrders($id)
    {
        return Employee::with('orders')->findOrFail($id);
    }

    public function showProducts($id)
    {
        return Employee::with('products')->findOrFail($id);
    }

    public function showAll($id)
    {
        return Employee::with(['profile','orders','products'])->findOrFail($id);
    }
}
