<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UsersController;
use App\Http\Controllers\API\ProductsController;
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

Route::post('/register', [UsersController::class, 'register']);
Route::post('/users/login', [UsersController::class, 'login']);
Route::post('/users/logout', [UsersController::class, 'logout']);
Route::post('/products/get', [ProductsController::class, 'get_products']);
Route::get('/users/get', [UsersController::class, 'get_users']);
Route::post('/users/home', [UsersController::class, 'home']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
