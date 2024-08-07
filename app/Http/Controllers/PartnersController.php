<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\PartnerContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PartnersController extends Controller
{

    public function Index()
    {
        $partner = PartnerContent::latest()->get();
        return view('admin.partners.index')
        ->with('partner', $partner)
        ->with('bheading', 'Company Partners')
        ->with('breadcrumb', 'Company Partners');
    } 

    public function create()
    {
        return view('admin.partners.create')
        ->with('bheading', 'Company Partners')
        ->with('breadcrumb', 'Company Partners');
    }


    public function store(Request $request)
    {
  try{
        $partner = new PartnerContent;
        $partner->title = $request->title;
        $partner->content = $request->content;
        $partner->floats = $request->floats;
        $fileName  = StoreImage($request);
        $partner->image = $fileName;
        // dd($partner);
        $partner->save();
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
    $advantage = PartnerContent::where('id', decrypt($id))->first();
    if($advantage) {$advantage->delete(); 
        Session::flash('alert', 'error');
        Session::flash('message', 'Company Partners Deleted');return back();
    }else{
        Session::flash('alert', 'error');
        Session::flash('message', 'Partner not found');
        return back();
    }

}

public function User()
{
    return view('admin.partners.users')
    ->with('partners', Partner::latest()->get())
    ->with('bheading', 'Partners Registration')
    ->with('breadcrumb', 'Partners Registration');
}

public function UpdateStatus($user, $status)
{

    $partner = Partner::where('id', decrypt($user))->first();
    if($partner)
    {
        $partner->update([
            'status' => $status
        ]);
    }
    // dd($partner);
    Session::flash('alert', 'error');
    Session::flash('message', 'An error occured');
    return back();
} 
}
