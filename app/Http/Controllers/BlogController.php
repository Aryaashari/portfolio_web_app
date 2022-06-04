<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Post;

class BlogController extends Controller
{
    public function index() {
        $blogPage = Page::where('page_name','blog')->get()->first();
        $posts = Post::all();
        
        return view('frontend.blog', ["blogPage" => $blogPage, "posts" => $posts]);
    }
}
