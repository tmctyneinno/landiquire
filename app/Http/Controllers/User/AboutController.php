<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\CompanyGoal;
use App\Models\ComptitiveAdvantage;
use App\Models\CoreObjective;
use App\Models\TeamMember;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //


    public function __Invoke()
    {
        return view('frontend.about')
        ->with('about', About::latest()->first())
        ->with('goals', CompanyGoal::latest()->get())
        ->with('teams', TeamMember::get())
        ->with('objectives', CoreObjective::get())
        ->with('testimonial', Testimonial::latest()->get())
        ->with('advantage', ComptitiveAdvantage::get())
        ->with('title', 'About');
    }

    public function getTeamMember($team_id){
;
        return view('frontend.team-details')
        ->with('team', TeamMember::where('id', decrypt($team_id))->first());
    }

}
