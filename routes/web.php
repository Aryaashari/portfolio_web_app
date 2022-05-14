<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;

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
Route::get('/', [PageController::class, 'home']);

// About
Route::get('/about', [PageController::class, 'about']);

// Projects
Route::get('/projects', [PageController::class, 'projects']);

// Blog
Route::get('/blog', [PageController::class, 'blog']);

Route::get('/single-post', [BlogController::class, 'singlePost']);

Route::get('/post-category', [BlogController::class, 'postCategory']);
