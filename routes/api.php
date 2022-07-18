<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('product', [ProductController::class, 'createProduct']);   //for creating product

Route::put('product/{id}', [ProductController::class, 'updateProduct']); //for updating product

Route::delete('product/{id}', [ProductController::class, 'deleteProduct']);  // for deleting product

Route::get('product', [ProductController::class, 'index']); // for retrieving product