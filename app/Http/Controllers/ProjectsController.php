<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.projects.index')
        ->with('projects', Project::latest()->get())
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
        return view('admin.projects.create')
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
            $project = new Project();
            $project->title = $request->title;
            $project->content = $request->content;
            $project->features = $request->features;
            $project->amount = $request->price;
            $project->size = $request->size;
            $project->location = $request->location;
            if($request->image){
            $project->image  = StoreImage($request);
            } 
            if($request->images){
                $project->gallery = json_encode(StoreImages($request->images));
            }
            $project->save();
            Session::flash('alert', 'success');
            Session::flash('message', 'Project Plus  Added successfully');
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
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.projects.edit')
        ->with('project', Project::where('id', decrypt($id))->first())
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
            $project = Project::where('id', decrypt($id))->first();
            $project->title = $request->title;
            $project->content = $request->content;
            $project->features = $request->features;
            $project->amount = $request->price;
            $project->size = $request->size;
            $project->location = $request->location;
            if($request->image){
            $project->image  = StoreImage($request);
            } 
            if($request->images){
                $project->gallery = json_encode(StoreImages($request->images));
            }
            $project->save();
            Session::flash('alert', 'success');
            Session::flash('message', 'Project Plus  Updated successfully');
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
        $project = Project::where('id', decrypt($id))->first();
        if($project) {$project->delete(); 
            Session::flash('alert', 'error');
            Session::flash('message', 'Project Plus  Deleted');return back();
        }else{
            Session::flash('alert', 'error');
            Session::flash('message', 'Project Plus not found');
            return back();
        }
    }
}
