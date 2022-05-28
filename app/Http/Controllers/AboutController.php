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
        $pageName = Page::where('page_name','about')->get()[0]->title;
        $sosmeds = Sosmed::all();
        $education1 = Education::where('order',1)->get()[0];
        $education2 = Education::where('order',2)->get()[0];
        $education3 = Education::where('order',3)->get()[0];
        $education4 = Education::where('order',4)->get()[0];
        // dd($education1);
        $skills = Skill::all();
        // dd($skills);

        return view('frontend.about', ["profile" => $profile, "pageName" => $pageName, "sosmeds" => $sosmeds, "education1" => $education1, "education2" => $education2, "education3" => $education3, "education4" => $education4, "skills" => $skills]);
    }
}
