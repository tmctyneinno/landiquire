<?php

namespace App\Http\Controllers;

use App\Models\ProjectPlusContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProjectPlusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.projectplus.index')
        ->with('projectplus', ProjectPlusContent::latest()->get())
        ->with('bheading', 'Project Plus')
        ->with('breadcrumb', 'Project Plus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projectplus.create')
        ->with('bheading', 'Project Plus')
        ->with('breadcrumb', 'Project Plus');
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
            $project = new ProjectPlusContent();
            $project->title = $request->title;
            $project->content = $request->content;
            $project->floats = $request->floats;
            if($request->image){
            $project->image  = StoreImage($request);
            }
            $project->save();
            Session::flash('alert', 'success');
            Session::flash('message', 'Project Plus Content added successfully');
            return redirect()->back();
      }catch(\Exception $e){
        Session::flash('alert', 'error');
        Session::flash('message', $e->getMessage());
        return redirect()->back()->withInput($request->all());
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
        return view('admin.projectplus.edit')
        ->with('projectplus', ProjectPlusContent::where('id', decrypt($id))->first())
        ->with('bheading', 'Project Plus')
        ->with('breadcrumb', 'Project Plus');
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
            $project =ProjectPlusContent::where('id', decrypt($id))->first();
            $project->title = $request->title;
            $project->content = $request->content;
            $project->floats = $request->floats;
            if($request->image){
            $project->image  = StoreImage($request);
            } 
            $project->save();
            Session::flash('alert', 'success');
            Session::flash('message', 'Project Plus Content updated successfully');
            return redirect()->back();
      }catch(\Exception $e){
        Session::flash('alert', 'error');
        Session::flash('message', $e->getMessage());
        return redirect()->back()->withInput($request->all());
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
        //
    }


    public function delete($id)
    {
        $project = ProjectPlusContent::where('id', decrypt($id))->first();
        if($project) {$project->delete(); 
            Session::flash('alert', 'error');
            Session::flash('message', 'Project Plus content Deleted');return back();
        }else{
            Session::flash('alert', 'error');
            Session::flash('message', 'Project Plus not found');
            return back();
        }
    }
}
