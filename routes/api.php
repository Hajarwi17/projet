<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateController;
Route::get('/users', [CreateController::class, 'index']);
Route::post('/users', [CreateController::class, 'creer']);
Route::put('/users/{id}', [CreateController::class, 'modifier']);
Route::delete('/users/{id}', [CreateController::class, 'delete']);
Route::get('/users/{id}', [CreateController::class, 'afficher']);