<?php

namespace App\Http\Controllers;

use App\Models\AdminActivity;
use App\Models\Blog;


class AdminDashboardController extends Controller
{

    public function Index(){
        return view('admin.index', [
    
            'blogs' =>  Blog::get(),
            'logins' => AdminActivity::take(5)->latest()->get()
        ])
        ->with('bheading', 'Index')
        ->with('breadcrumb', 'Index');
    }
}
