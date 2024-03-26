<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductController::class, 'index']);
Route::get('/manager', [ProductController::class, 'index']);
Route::get('/manager/create', [CategoryController::class, 'create']);
Route::get('/manager/{product}', [ProductController::class, 'show']);
Route::get('/manager/{product}/edit', [ProductController::class, 'edit']);

Route::post('/manager', [ProductController::class, 'store']);

Route::put('/manager/{product}', [ProductController::class, 'update']);

Route::delete('/manager/{product}',[ProductController::class, 'delete']);
