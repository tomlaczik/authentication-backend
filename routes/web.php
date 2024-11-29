<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/sessions', [LoginController::class, 'authenticate']);

Route::delete('/sessions', function (Request $request) {
    $request->user()->currentAccessToken()->delete();
})->middleware('auth:sanctum');

Route::get('/users/current', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
