<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Employee::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->age = $request->age;
        $employee->position = $request->position;
        $employee->save();

        return $employee;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Employee::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = Employee::findOrFail($id);

        if ($request->has('name')) {
            $employee->name = $request->name;
        }

        if ($request->has('age')) {
            $employee->age = $request->age;
        }

        if ($request->has('position')) {
            $employee->position = $request->position;
        }

        $employee->save();

        return $employee;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return $employee;
    }
}
