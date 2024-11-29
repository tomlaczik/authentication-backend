<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/users', [UserController::class, 'register']);
Route::get('/users/current', [UserController::class, 'getCurrent'])->middleware('auth:sanctum');

Route::post('/sessions', [SessionController::class, 'login']);
Route::delete('/sessions/current', [SessionController::class, 'logout'])->middleware('auth:sanctum');
