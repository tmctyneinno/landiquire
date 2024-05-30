<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //

    public function Index(){
        return view('frontend.events')
        ->with('events', Events::latest()->get());
    }
}
