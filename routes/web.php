<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Product\ArticleController;

Route::get('/index1', [ArticleController::class, 'index1']);
Route::get('/sample', [ArticleController::class, 'sample']);
Route::get('/detail/{id}', [ArticleController::class, 'detail']);
Route::get('/articles', [ArticleController::class, 'index']); // for your $data array


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/products', function () {
//     return 'Lipsticks';
// });

// Route::get('/products/names', function () {
//     return 'Romand';
// });

// Route::get('/products/names/{id}', function ($id) {
//     return "Romand - $id";
// });

// Route::get('/products/names', function () {
//     return 'Romand';
// })->name('products.names');

// Route::get('/products/more', function () {
//     return redirect('/products/names');
// });

// Route::get('/products/more', function () {
//     return redirect()->route('products.names');
// });
