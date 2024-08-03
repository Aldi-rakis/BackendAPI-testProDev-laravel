<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('/category', App\Http\Controllers\Api\CategoryController::class);

Route::apiResource('/place', App\Http\Controllers\Api\PlaceController::class);