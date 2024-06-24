<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.teams.index')
        ->with('teams', TeamMember::latest()->get())
        ->with('bheading', 'Team Members')
        ->with('breadcrumb', 'Team Members');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teams.create')
        ->with('bheading', 'Team Members')
        ->with('breadcrumb', 'Team Members');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $teams = new TeamMember();
            $teams->name = $request->name;
            $teams->about = $request->about;
            $teams->position = $request->position;
            $teams->image = StoreImage($request);
            $teams->save();
            Session::flash('alert', 'success');
            Session::flash('message', 'Team Member Added successfully');
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
        return view('admin.teams.edit')
        ->with('team', TeamMember::where('id', decrypt($id))->first())
        ->with('bheading', 'Teams Members')
        ->with('breadcrumb', 'Team Members');
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
        try{
        $teams = TeamMember::where('id', decrypt($id))->first();
        $teams->name = $request->name;
        $teams->about = $request->about;
        $teams->position = $request->position;
        if($request->image){
        $teams->image = StoreImage($request);
        }
        $teams->save();
        Session::flash('alert', 'success');
        Session::flash('message', 'Team Member Added successfully');
        return redirect()->back();
    }catch(\Exception $e){
        Session::flash('alert', 'error');
        Session::flash('message', $e->getMessage());
        return redirect()->back();
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $goals = TeamMember::where('id', decrypt($id))->first();
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
