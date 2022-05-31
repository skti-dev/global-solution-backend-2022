<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Controllers\RegisterController;

Route::get('/list', [ListController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
