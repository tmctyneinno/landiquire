<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Exception;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.events.index')
        ->with('Events', Events::latest()->get())
        ->with('bheading', 'Events ')
        ->with('breadcrumb', 'Events');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.events.create')
        ->with('bheading', 'Events')
        ->with('breadcrumb', 'Events');
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
            $Events = new Events;
            $Events->topic = $request->topic;
            $Events->venue = $request->venue;
            $Events->organizers = $request->organizers;
            $Events->date = $request->date;
         $Events->description  = $request->description;
            if($request->image)
            $Events->image = StoreImage($request);
            $Events->save();

            Session::flash('alert', 'success');
            Session::flash('message', 'Events Added');
            return back();
        }catch(Exception $e){
            Session::flash('alert', 'error');
            Session::flash('message', $e->getMessage());
            return back()->withInput($request->all());
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

        return view('admin.events.edit')
        ->with('Events', Events::where('id', decrypt($id))->first())
        ->with('bheading', 'Events')
        ->with('breadcrumb', 'Events');
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
        try{
            $Events = Events::where('id', decrypt($id))->first();
            if($request->topic) $Events->topic = $request->topic;
            if($request->organizers) $Events->organizers  = $request->organizers;
            if($request->date) $Events->date  = $request->date;
            if($request->description) $Events->description  = $request->description;
            if($request->venue) $Events->venue  = $request->venue;
            if($request->image) $Events->image = StoreImage($request);
            $Events->save();
            Session::flash('alert', 'success');
            Session::flash('message', 'Events Updated');
            return back();
        }catch(Exception $e){
            Session::flash('alert', 'error');
            Session::flash('message', $e->getMessage());
            return back()->withInput($request->all());
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
}
