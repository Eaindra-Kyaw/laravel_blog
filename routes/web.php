<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Product\ArticleController;
use App\Models\Employee;
use App\Models\Product;

// --------------------------------------
// Article routes
// --------------------------------------
Route::get('/index1', [ArticleController::class, 'index1']);
Route::get('/sample', [ArticleController::class, 'sample']);
Route::get('/detail/{id}', [ArticleController::class, 'detail']);
Route::get('/articles', [ArticleController::class, 'index']);

// --------------------------------------
// Employee routes
// --------------------------------------
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/create-employee', [EmployeeController::class, 'createSample']);
Route::get('/update-employee', [EmployeeController::class, 'updateSample']);
Route::get('/delete-employee', [EmployeeController::class, 'deleteSample']);

// Route to test Employee & Products relationship
Route::get('/employee-products', [EmployeeController::class, 'employeeProducts']);

// --------------------------------------
// Product routes
// --------------------------------------
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/create-product', [ProductController::class, 'createSample']);
Route::get('/product-orders', [ProductController::class, 'productOrders']);

Route::get('/test-employee-products/{id}', [EmployeeController::class, 'showProducts']);
Route::get('/test-product-orders/{id}', [ProductController::class, 'showOrders']);

// Test Employee -> Product (hasOne)
Route::get('/test-employee-product', function () {
    $employee = Employee::with('product')->find(1);
    if ($employee && $employee->product) {
        echo "Employee: {$employee->name} <br>";
        echo "Product: {$employee->product->name} <br>";
    } else {
        echo "No product found for employee.";
    }
});

// Test Product -> Employee (belongsTo)
Route::get('/test-product-employee', function () {
    $product = Product::with('employee')->find(1);
    if ($product && $product->employee) {
        echo "Product: {$product->name} <br>";
        echo "Employee: {$product->employee->name} <br>";
    } else {
        echo "No employee found for product.";
    }
});

// --------------------------------------
// Home route
// --------------------------------------
Route::get('/', function () {
    return view('welcome');
});
