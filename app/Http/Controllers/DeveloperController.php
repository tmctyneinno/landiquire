<?php

namespace App\Http\Controllers;

use App\Models\DeveloperContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DeveloperController extends Controller
{
    
    public function Index() {
        $developer = DeveloperContent::latest()->get();
        return view('admin.developer.index')
        ->with('developer', $developer)
        ->with('bheading', 'Company developer')
        ->with('breadcrumb', 'Company developer');
    } 

    public function create()
    {
        return view('admin.developer.create')
        ->with('bheading', 'Company developer')
        ->with('breadcrumb', 'Company developer');

    }


    public function store(Request $request)
    {
        //
  try{
        $developer = new DeveloperContent();
        $developer->title = $request->title;
        $developer->content = $request->content;
        $developer->floats = $request->floats;
        $developer->image  = StoreImage($request);
        $developer->save();
        Session::flash('alert', 'success');
        Session::flash('message', 'Company  Partners added successfully');
        return redirect()->back();
  }catch(\Exception $e){
    Session::flash('alert', 'error');
    Session::flash('message', $e->getMessage());
    return redirect()->back()->withInput($request->all());
  }

}

public function Delete($id)
{
    $advantage = DeveloperContent::where('id', decrypt($id))->first();
    if($advantage) {$advantage->delete(); 
        Session::flash('alert', 'error');
        Session::flash('message', 'Company Partners Deleted');return back();
    }else{
        Session::flash('alert', 'error');
        Session::flash('message', 'Partner not found');
        return back();
    }

}
    
}
