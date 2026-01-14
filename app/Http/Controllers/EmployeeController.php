<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    // Show create form
    public function create()
    {
        return view('employee-form');
    }

    // Store new employee
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'age' => 'required|integer',
            'position' => 'required|min:2',
        ]);

        DB::table('employees')->insert([
            'name' => $validated['name'],
            'age' => $validated['age'],
            'position' => $validated['position'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/employees')->with('success', 'Employee added successfully!');
    }

    // Show all employees
    public function index()
    {
        $employees = DB::table('employees')->get();
        return view('employees', compact('employees'));
    }

    // Show edit form
    public function edit($id)
    {
        $employee = DB::table('employees')->find($id);
        if (!$employee) {
            return redirect('/employees')->with('error', 'Employee not found.');
        }

        return view('employee-edit', compact('employee'));
    }

    // Update employee
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'age' => 'required|integer',
            'position' => 'required|min:2',
        ]);

        DB::table('employees')->where('id', $id)->update([
            'name' => $validated['name'],
            'age' => $validated['age'],
            'position' => $validated['position'],
            'updated_at' => now(),
        ]);

        return redirect('/employees')->with('success', 'Employee updated successfully!');
    }

    // Delete employee
    public function destroy($id)
    {
        DB::table('employees')->where('id', $id)->delete();
        return redirect('/employees')->with('success', 'Employee deleted successfully!');
    }
}
