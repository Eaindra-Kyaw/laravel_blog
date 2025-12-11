<?php

use Illuminate\Support\Facades\Route;

Route::get('/products', function () {
 return 'Lipsticks';
});
Route::get('/products/names', function () {
 return 'Romand';
});

Route::get('/products/names/{id}', function ( $id ) {
 return "Romand - $id";
});


Route::get('/products/names', function () {
 return 'Romand';
})->name('products.names');

Route::get('/products/more', function() {
 return redirect('/products/names');
});

Route::get('/products/more', function() {
 return redirect()->route('products.detail');
});
