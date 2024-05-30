<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\Session;
use App\Models\SubMenu;

class AboutUsPagesController extends Controller
{
    //


    public function AboutUsPagesEdit($id){
        return view('admin.about.edit', [
            'page' => Page::where('id', decrypt($id))->first()
        ])
        ->with('bheading', 'Edit About Us Page')
        ->with('breadcrumb', 'Edit About Us Page');

    }

    public function AboutUsPagesUpdate(Request $request, $id){
      
        if($request->title){
            $data['title'] = $request->title;
        }
        if($request->contents){
            $data['contents'] = $request->contents;
        }
        if($request->mission){
            $data['mission'] = $request->mission;
        }
        if($request->vision){
            $data['vision'] = $request->vision;
        }
        if($request->core_values){
            $data['core_values'] = $request->core_values;
        }
        if($request->image){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $image->move('images',$fileName);
            $data['image'] = $fileName;
        }
        About::where('id', decrypt($id))
        ->update($data);
        Session::flash('alert', 'success');
        Session::flash('message','Page updated successfully');
        return back();
        
    }

}
