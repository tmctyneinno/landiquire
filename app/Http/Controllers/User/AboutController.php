<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\CompanyGoal;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //


    public function __Invoke()
    {
        return view('frontend.about')
        ->with('about', About::latest()->first())
        ->with('goals', CompanyGoal::latest()->get())
        ->with('teams', TeamMember::latest()->get());
    }

    public function getTeamMember($team_id){
;
        return view('frontend.team-details')
        ->with('team', decrypt($team_id)->first());
    }
}
