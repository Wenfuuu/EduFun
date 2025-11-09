<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\WriterController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'show']);
Route::get('/subject/{id}', [SubjectController::class, 'show']);
Route::get('/writers', [WriterController::class, 'index']);
Route::get('/writers/{id}', [WriterController::class, 'show']);
