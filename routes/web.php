<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubjectController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'show']);
Route::get('/subject/{id}', [SubjectController::class, 'show']);
