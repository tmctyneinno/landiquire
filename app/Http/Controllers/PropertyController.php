<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.property.index')
        ->with('properties', Property::latest()->get())
        ->with('bheading', 'Property for Sale')
        ->with('breadcrumb', 'Property for Sale');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.property.create')
        ->with('bheading', 'Property for Sale')
        ->with('breadcrumb', 'Property for Sale');
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
            $project = new Property();
            $project->title = $request->title;
            $project->content = $request->content;
            $project->features = $request->features;
            $project->prices = $request->price;
            $project->sizes = $request->size;
            $project->location = $request->location;
            if($request->image){
            $project->image  = StoreImage($request);
            } 
            if($request->images){
                $project->gallery = json_encode(StoreImages($request->images));
            }
            $project->save();
            Session::flash('alert', 'success');
            Session::flash('message', 'Property  Added successfully');
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
        return view('admin.property.edit')
        ->with('property', Property::where('id', decrypt($id))->first())
        ->with('bheading', 'Property for sale')
        ->with('breadcrumb', 'Property for sale');
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
            $project = Property::where('id', decrypt($id))->first();
            $project->title = $request->title;
            $project->content = $request->content;
            $project->features = $request->features;
            $project->prices = $request->price;
            $project->sizes = $request->size;
            $project->location = $request->location;
            if($request->image){
            $project->image  = StoreImage($request);
            } 
            if($request->images){
                $project->gallery = json_encode(StoreImages($request->images));
            }
            $project->save();
            Session::flash('alert', 'success');
            Session::flash('message', 'Property   Updated successfully');
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
        $project = Property::where('id', decrypt($id))->first();
        if($project) {$project->delete(); 
            Session::flash('alert', 'error');
            Session::flash('message', 'Property  Deleted');return back();
        }else{
            Session::flash('alert', 'error');
            Session::flash('message', 'Property not found');
            return back();
        }
    }
}
