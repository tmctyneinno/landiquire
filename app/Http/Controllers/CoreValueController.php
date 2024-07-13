<?php

namespace App\Http\Controllers;

use App\Models\CoreObjective;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CoreValueController extends Controller
{
    //

    public function Index()
    {
        $objectives = CoreObjective::latest()->get();
        return view('admin.core_values.index')
        ->with('objectives', $objectives)
        ->with('bheading', 'Company Core objectives')
        ->with('breadcrumb', 'Company Core objectives');
    }

    public function create()
    {
        return view('admin.core_values.create')
        ->with('bheading', 'Company Core objectives')
        ->with('breadcrumb', 'Company Core objectives');

    }


    public function store(Request $request)
    {
        //
  try{
        $objectives = new CoreObjective;
        $objectives->title = $request->title;
        $objectives->content = $request->content;
        // $objectives->icon = $request->icon;
        $objectives->save();
        Session::flash('alert', 'success');
        Session::flash('message', 'Company objectives added successfully');
        return redirect()->back();
  }catch(\Exception $e){
    Session::flash('alert', 'error');
    Session::flash('message', $e->getMessage());
    return redirect()->back()->withInput($request->all());
  }

}
public function Delete($id)
{
    $objectives = CoreObjective::where('id', decrypt($id))->first();
    if($objectives) {$objectives->delete(); 
        Session::flash('alert', 'error');
        Session::flash('message', 'Company objectives Deleted');return back();
    }else{
        Session::flash('alert', 'error');
        Session::flash('message', 'objectives not found');
        return back();
    }

}
}
