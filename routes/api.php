<?php

use App\Http\Controllers\Api\EmployeeApiController;
use Illuminate\Support\Facades\Route;

Route::apiResource('employees', EmployeeApiController::class);

// Route::get('/employees', [EmployeeApiController::class, 'index']);
// Route::get('/employees/{id}', [EmployeeApiController::class, 'show']);
// Route::post('/employees', [EmployeeApiController::class, 'store']);
// Route::put('/employees/{id}', [EmployeeApiController::class, 'update']);
// Route::patch('/employees/{id}', [EmployeeApiController::class, 'update']);
// Route::delete('/employees/{id}', [EmployeeApiController::class, 'destroy']);
