<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    CategoryController
};

/* API Routes */
Route::apiResource('categories', CategoryController::class);

Route::get('/', function () {
    return response()->json(['message' => 'success']);
});
