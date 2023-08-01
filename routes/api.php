<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;

Route::get('resources', [ResourceController::class, 'index']);
Route::post('resources', [ResourceController::class, 'store']);
Route::get('resources/{id}', [ResourceController::class, 'show']);
Route::put('resources/{id}', [ResourceController::class, 'update']);
Route::delete('resources/{id}', [ResourceController::class, 'destroy']);
