<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Page;

class ProjectsController extends Controller
{
    public function index() {
        $projects = Project::all();
        $projectPage = Page::where('page_name','project')->first();
        return view('frontend.project', ["projectPage" => $projectPage, "projects" => $projects]);
    }
}
