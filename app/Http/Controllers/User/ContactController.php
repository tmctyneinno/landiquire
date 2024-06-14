<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function Index(){
        return view('frontend.contact');
    }

    public function Store(Request $request){
        
    }
}
