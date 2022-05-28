<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
class HomeController extends Controller
{
    public function index() {
        $profile = Profile::first();
        return view('frontend.index', ["profile" => $profile]);
        // dd($profile);
    }
}
