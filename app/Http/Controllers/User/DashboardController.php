<?php

namespace App\Http\Controllers\User;


use App\Models\About;
use App\Models\Blog;
use App\Models\CompanyGoal;
use App\Models\Gallery;
use App\Models\Slider;
use App\Models\SubMenu;
use App\Models\TeamMember;
use App\Models\Testimonial;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Property;

class DashboardController extends Controller
{
    public function Index(){

        
        return view('frontend.dashboard', [
            'sliders' => Slider::where('status', 1)->get(),
            'blogs' => Blog::latest()->get(),
            'services' => SubMenu::where('menu_id', 2)->get(),
            'testimonials' => Testimonial::latest()->get(),
            'about' => About::latest()->first(),
            'goals' => CompanyGoal::get(),
            'teams' => TeamMember::take(4)->get(),
            'galleries' => Gallery::latest()->get(),
            'projects' => Project::latest()->get(),
            'properties' => Property::latest()->take(4)
        ])
        ->with('title', 'Home');
    }

   
}
