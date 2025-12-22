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

// Employee → Product (hasOne)
Route::get('/employee/{id}/product', [EmployeeController::class, 'showProducts']);

// Product → Orders (hasMany)
Route::get('/product/{id}/orders', [EmployeeController::class, 'showOrders']);

// Product → Employee (belongsTo)
Route::get('/product/{id}/employee', [ProductController::class, 'showEmployee']);

// --------------------------------------
// Home route
// --------------------------------------
Route::get('/', function () {
    return view('welcome');
});
