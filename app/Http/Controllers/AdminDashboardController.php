<?php

namespace App\Http\Controllers;

use App\Models\AdminActivity;
use App\Models\Blog;
use App\Models\Developer;
use App\Models\Donation;
use App\Models\Partner;

class AdminDashboardController extends Controller
{

    public function Index(){
        return view('admin.index', [
    
            'partners' =>  Partner::latest()->take(6)->get(),
            'logins' => AdminActivity::take(5)->latest()->get(),
            'developer' => Developer::latest()->take(5)->get()
        ])
        ->with('bheading', 'Index')
        ->with('breadcrumb', 'Index');
    }
}
