<?php

use App\Http\Controllers\Api\ChatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/chat', [ChatController::class, 'store'])->middleware('throttle:20,1');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
