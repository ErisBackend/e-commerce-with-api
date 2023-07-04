<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;


Route::get('/products/list', [ProductController::class,'index']);
Route::get('/products/detail/{id}', [ProductController::class,'show']);
Route::post('/products/edit/{id}', [ProductController::class,'edit']);
Route::delete('/products/delete/{id}', [ProductController::class,'hapus']);
Route::post('/products/add', [ProductController::class,'store']);
Route::get('/images/{filename}', [ProductController::class,'image']);




Route::post('/auth/regis', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/logout', [AuthController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
