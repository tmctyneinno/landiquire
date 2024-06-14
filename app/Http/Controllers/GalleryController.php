<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GalleryController extends Controller
{
    //

    public function Index(){
        return view('admin.gallery.index')
        ->with('galleries', Gallery::latest()->get())
        ->with('bheading', 'Galleries Index')
        ->with('breadcrumb', 'Galleries Index');
    }

    public function Create(){
        return view('admin.gallery.create')
        ->with('bheading', 'Galleries Create')
        ->with('breadcrumb', 'Galleries Create');
    }

    public function Store(Request $request){
        $data = [];
        foreach($request->images as $image){
            $images =  StoreImages($image);
            $data[] = $images;
        }
        $data = Gallery::create([
            'images' => json_encode($data),
            'title' => $request->title
        ]);
        Session::flash('alert', 'success');
        Session::flash('message', 'Galleries Added successfully');
        return back();
    }

    public function Delete($gallery_id){
        $gallery = Gallery::whereId(decrypt($gallery_id))->first();
        if($gallery){
            $gallery->delete();
            Session::flash('alert', 'error');
            Session::flash('message', 'Galleries removed successfully');
            return back();
        }
        Session::flash('alert', 'error');
        Session::flash('message', 'Something went wrong');
        return back();
    }



}
