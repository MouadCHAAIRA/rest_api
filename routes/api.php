<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('products',[ProductController::class,'index']);
Route::post('store',[ProductController::class,'store']);
Route::delete('delete/{id}',[ProductController::class,'delete']);
Route::get('show/{id}', [ProductController::class, "show"]);
Route::post('update/{id}', [ProductController::class, "update"]);