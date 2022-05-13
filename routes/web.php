<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('frontend/index');
});

Route::get('/about', function () {
    return view('frontend/about');
});

Route::get('/projects', function () {
    return view('frontend/project');
});

Route::get('/blog', function () {
    return view('frontend/blog');
});

Route::get('/single-post', function () {
    return view('frontend/single-post');
});

Route::get('/post-category', function () {
    return view('frontend/post-category');
});
