<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class BlogController extends Controller
{
    public function index() {
        $blogPage = Page::where('page_name','blog')->get()->first();
        return view('frontend.blog', ["blogPage" => $blogPage]);
    }
}
