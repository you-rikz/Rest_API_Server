<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('products/categories', [ProductsController::class, 'categories']);
Route::get('products', [ProductsController::class, 'allProducts']);
Route::get('products/{product_id}', [ProductsController::class, 'singleProduct']);
Route::get('products/search/{keywords}', [ProductsController::class, 'searchProduct']);
Route::get('products/category/{category_name}', [ProductsController::class, 'category']);
Route::post('products/add', [ProductsController::class, 'addProduct']);
Route::put('products/{product_id}', [ProductsController::class, 'updateProduct']);
Route::delete('products/{product_id}',[ProductsController::class,'deleteProduct']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


