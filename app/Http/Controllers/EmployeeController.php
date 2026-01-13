<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function create()
    {
        return view('employee-form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
        ]);

        DB::table('employees')->insert([
            'name' => $validated['name'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Employee added successfully!');
    }
}
