<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//imports
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ImageController;

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
Route::apiResource('products', ProductController::class);
Route::post('/create',[ImageController::class, 'create']);
Route::post('/createvideo',[ImageController::class, 'createVideo']);
Route::get('/get',[ImageController::class, 'get']);