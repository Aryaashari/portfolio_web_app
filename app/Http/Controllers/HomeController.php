<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Role;
class HomeController extends Controller
{
    public function index() {
        $profile = Profile::first();
        // $roles = Role::all();
        // $role = [];
        // foreach ($roles as $r) {
        //     array_push($role,$r->role);
        // }
        return view('frontend.index', ["profile" => $profile]);
        // dd($profile);
    }
}
