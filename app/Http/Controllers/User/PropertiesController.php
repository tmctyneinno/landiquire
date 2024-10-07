<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Property;

class PropertiesController extends Controller
{
    //

    public function Index()
    {
     return view('frontend.property')
     ->with('properties', Property::get())
     ->with('title', 'Property For Sale');
    }

    public function property($id)
    {
        $project = Property::where('id', decrypt($id))->first();
        return view('frontend.property_details')
        ->with('property', $project)
        ->with('title', 'property ');
    }
}
