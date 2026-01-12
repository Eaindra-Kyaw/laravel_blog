<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin', function () {
        return 'Admin Page - Only logged in users';
    })->middleware('password.confirm');

    Route::get('/user1', function () {
        return 'Private Page - Only user1 can access';
    })->middleware('password.confirm');
});

Route::get('/employees', function () {
    $articles = [
        ['name' => 'Employee One'],
        ['name' => 'Employee Two'],
        ['name' => 'Employee Three'],
    ];

    return view('index', compact('articles'));
});

Route::get('/employee-form', function () {
    return view('employee-form');
});

Route::post('/employee-form', function (Request $request) {
    // Validate the form input
    $validated = $request->validate([
        'name' => 'required|min:3',
    ]);

    // Save to database
    DB::table('employees')->insert([
        'name' => $validated['name'],
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return back()->with('success', 'Employee added successfully!');
});

require __DIR__.'/auth.php';

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\EmployeeController;
// use App\Http\Controllers\ProductController;
// use App\Http\Controllers\Product\ArticleController;
// use App\Models\Employee;
// use App\Models\Product;

// // Article routes
// Route::get('/index1', [ArticleController::class, 'index1']);
// Route::get('/sample', [ArticleController::class, 'sample']);
// Route::get('/detail/{id}', [ArticleController::class, 'detail']);
// Route::get('/articles', [ArticleController::class, 'index']);

// // Employee routes
// Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
// Route::get('/create-employee', [EmployeeController::class, 'createSample']);
// Route::get('/update-employee', [EmployeeController::class, 'updateSample']);
// Route::get('/delete-employee', [EmployeeController::class, 'deleteSample']);

// // Route to test Employee & Products relationship
// Route::get('/employee-products', [EmployeeController::class, 'employeeProducts']);

// // Product routes
// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::get('/create-product', [ProductController::class, 'createSample']);
// Route::get('/product-orders', [ProductController::class, 'productOrders']);

// // Home route
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/employee/{id}/profile', function ($id) {
//     return Employee::with('profile')->findOrFail($id);
// });

// Route::get('/employee/{id}/orders', function ($id) {
//     return Employee::with('orders')->findOrFail($id);
// });

// Route::get('/employee/{id}/products', function ($id) {
//     return Employee::with('products')->findOrFail($id);
// });

// Route::get('/employee/{id}/profile', [EmployeeController::class, 'showProfile']);
// Route::get('/employee/{id}/orders', [EmployeeController::class, 'showOrders']);
// Route::get('/employee/{id}/products', [EmployeeController::class, 'showProducts']);
// Route::get('/employee/{id}/all', [EmployeeController::class, 'showAll']);

// Route::get('/employee/{id}/all', function($id){
//     return Employee::with(['profile','orders.category','products','category'])->findOrFail($id);
// });

// Route::get('/test-hasmanythrough', function() {
//     $employee = Employee::with('categories')->first();

//     return response()->json($employee->categories);
// });
