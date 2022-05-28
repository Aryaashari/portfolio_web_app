<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('frontend.index');
    }

    public function about() {
        return view('frontend.about');
    }

    public function projects() {
        return view('frontend.project');
    }

    public function blog() {
        return view('frontend.blog');
    }
}
