<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

Route::resource('posts', PostController::class);
Route::resource('category', CategoryController::class);

