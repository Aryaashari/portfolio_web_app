<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\BlogController;


// Home
Route::get('/', [HomeController::class, 'index']);

// About
Route::get('/about', [AboutController::class, 'index']);

// Projects
Route::get('/projects', [ProjectsController::class, 'index']);

// Blog
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/post/{post:slug}', [BlogController::class, 'detail']);
Route::get('/blog/category/{category:category}', [BlogController::class, 'category']);


// Admin
Route::prefix('admin')->group(function() {

    // Dashboard
    Route::view('/dashboard', 'admin.layouts.main');

});