<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectPlusContent;

class ProjectPlusController extends Controller
{
    public function Index()
    {
     return view('frontend.about_projectplus')
     ->with('projectplus', ProjectPlusContent::get())
     ->with('title', 'Project Plus');
    }

    public function Projects()
    {
        return view('frontend.projects')
        ->with('projects', Project::latest()->get())
        ->with('title', 'Project Plus');
    }

    public function ProjectsDetails($id)
    {
        $project = Project::where('id', decrypt($id))->first();
        return view('frontend.projects_details')
        ->with('project', $project)
        ->with('title', 'Project plus');
    }
}
