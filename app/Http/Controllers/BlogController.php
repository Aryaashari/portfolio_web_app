<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;

class BlogController extends Controller
{
    public function index() {
        $blogPage = Page::where('page_name','blog')->get()->first();
        $posts = Post::all();
        
        return view('frontend.blog', ["blogPage" => $blogPage, "posts" => $posts]);
    }

    public function detail(Post $post) {
        $categories = Category::all();
        $comments = Comment::where("post_id", $post->id)->get();

        return view('frontend.single-post', ["post" => $post, "categories" => $categories, "comments" => $comments]);
    }

    public function category(Category $category) {
        $posts = $category->post()->get();

        return view('frontend.post-category', ["posts" => $posts, "category" => $category]);
    }
}
