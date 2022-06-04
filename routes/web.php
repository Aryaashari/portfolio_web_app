<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\BlogController;
// use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

// Route::get('/single-post', [BlogController::class, 'singlePost']);

// Route::get('/post-category', [BlogController::class, 'postCategory']);
