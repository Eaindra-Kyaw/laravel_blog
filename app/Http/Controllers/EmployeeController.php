<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index(){

        // Employee::create([
        //     'name' => 'Hla Hla',
        //     'age' => 19,
        //     'position' => 'Sale',

        // $data = Article::all();
        // return view('employees.index', [
        //     'employees' => $data
        // ]);

        // $employees = Employee::all();
        // d($employees);

        // Employee::all();

        // Employee::find(2);

        // Employee::where('id', 1)->get();

        // Employee::where('name', 'updated_name')->first();

        // Employee::orderBy('id', 'desc')->get();

        // Employee::pluck('name');

        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }


   // public function createSample()
  //  {
        // Employee::create([
        //     'name' => 'Alex',
        //     'age' => 25,
        //     'position' => 'Sale'
        // ]);
    //     return redirect('/employees')->with('success', 'Employee created!');
    // }

    // public function updateSample()

        // $employee = Employee::find(2);
        // if ($employee) {
        //     $employee->update([
        //         'name' => 'John',
        //         'age' => 31,
        //         'position' => 'Senior Manager'
        //     ]);
        // }

        // echo "Employee updated!";
// return redirect('/employees')->with('success', 'Employee updated!');

public function deleteSample()
    {
        $employee = Employee::find(3);
        if ($employee) {
            $employee->delete();
        }

        return redirect('/employees')->with('success', 'Employee deleted!');
    }
}
