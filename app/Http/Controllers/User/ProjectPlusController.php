<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProjectPlusContent;

class ProjectPlusController extends Controller
{
    public function Index()
    {
     return view('frontend.about_projectplus')
     ->with('projectplus', ProjectPlusContent::get());
    }

    public function Projects()
    {
        
    }
}
