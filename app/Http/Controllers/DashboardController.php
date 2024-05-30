<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\CompanyGoal;
use App\Models\DonationCategory;
use App\Models\Slider;
use App\Models\SubMenu;
use App\Models\Testimonial;


class DashboardController extends Controller
{
    public function Index(){
        return view('frontend.dashboard', [
            'sliders' => Slider::where('status', 1)->get(),
            'blogs' => Blog::where('status', 1)->latest()->get(),
            'services' => SubMenu::where('menu_id', 2)->get(),
            'testimonials' => Testimonial::latest()->get(),
            'about' => About::latest()->first(),
            'goals' => CompanyGoal::get(),
            'donations' => DonationCategory::latest()->get()
        ]);
    }
}
