<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

Route::post('/create',[ImageController::class, 'create']);
Route::post('/createvideo',[ImageController::class, 'createVideo']);
Route::post('/audio',[ImageController::class, 'audio']);
Route::get('/get',[ImageController::class, 'get']);