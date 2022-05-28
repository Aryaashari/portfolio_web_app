<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Education;
use App\Models\Sosmed;
use App\Models\Page;
use App\Models\Skill;

class AboutController extends Controller
{
    public function index() {
        $profile = Profile::first();
        $pageName = Page::where('page','about')->title;
        return view('frontend.about');
    }
}
