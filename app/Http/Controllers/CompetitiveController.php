<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComptitiveAdvantage;
use Illuminate\Support\Facades\Session;

class CompetitiveController extends Controller
{
    //

    public function Index()
    {
        $advantage = ComptitiveAdvantage::latest()->get();
        return view('admin.comptitive.index')
        ->with('advantage', $advantage)
        ->with('bheading', 'Company comptitive advantage')
        ->with('breadcrumb', 'Company comptitive advantage');
    } 

    public function create()
    {
        return view('admin.comptitive.create')
        ->with('bheading', 'Company comptitive advantage')
        ->with('breadcrumb', 'Company comptitive advantage');

    }


    public function store(Request $request)
    {
        //
  try{
        $Comptitive = new ComptitiveAdvantage;
        $Comptitive->title = $request->title;
        $Comptitive->content = $request->content;
        // $goals->icon = $request->icon;
        $Comptitive->save();
        Session::flash('alert', 'success');
        Session::flash('message', 'Company Comptitive advantage added successfully');
        return redirect()->back();
  }catch(\Exception $e){
    Session::flash('alert', 'error');
    Session::flash('message', $e->getMessage());
    return redirect()->back()->withInput($request->all());
  }

}

public function Delete($id)
{
    $advantage = ComptitiveAdvantage::where('id', decrypt($id))->first();
    if($advantage) {$advantage->delete(); 
        Session::flash('alert', 'error');
        Session::flash('message', 'Company Comptitive Advantage Deleted');return back();
    }else{
        Session::flash('alert', 'error');
        Session::flash('message', 'Comptitive Advantage not found');
        return back();
    }

}
}
