<?php

namespace App\Http\Controllers;

use App\Models\CompanyGoal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GoalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.goals.index')->with('goals', CompanyGoal::latest()->get())
        ->with('bheading', 'Company Goals')
        ->with('breadcrumb', 'Company Goals');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.goals.create')
        ->with('bheading', 'Company Goals')
        ->with('breadcrumb', 'Company Goals');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
  try{
        $goals = new CompanyGoal;
        $goals->title = $request->title;
        $goals->content = $request->content;
        $goals->icon = $request->icon;
        $goals->save();
        Session::flash('alert', 'success');
        Session::flash('message', 'Company Goal added successfully');
        return redirect()->back();
  }catch(\Exception $e){
    Session::flash('alert', 'error');
    Session::flash('message', $e->getMessage());
    return redirect()->back();
  }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $goals = CompanyGoal::where('id', decrypt($id))->first();
        if($goals) {$goals->delete(); 
            Session::flash('alert', 'error');
            Session::flash('message', 'Company Goal Deleted');return back();
        }else{
            Session::flash('alert', 'error');
            Session::flash('message', 'Item not found');
            return back();
        }

    }
}
