<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Product\ArticleController;

// Article routes
Route::get('/index1', [ArticleController::class, 'index1']);
Route::get('/sample', [ArticleController::class, 'sample']);
Route::get('/detail/{id}', [ArticleController::class, 'detail']);
Route::get('/articles', [ArticleController::class, 'index']);

// Employee routes
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/create-employee', [EmployeeController::class, 'createSample']);
Route::get('/update-employee', [EmployeeController::class, 'updateSample']);
Route::get('/delete-employee', [EmployeeController::class, 'deleteSample']);

// Test route
Route::get('/test-dd', function () {
    $employees = \App\Models\Employee::all();
    dd($employees);
});

// Home route
Route::get('/', function () {
    return view('welcome');
});
