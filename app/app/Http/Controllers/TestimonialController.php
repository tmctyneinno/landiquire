<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Session;
class TestimonialController extends Controller
{
    //'



    public function Testimonials(){
       
        return view('admin.settings.testimonials', [
            'testimony' => Testimonial::latest()->get()
        ])
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }

    public function Socials(){
       
        return view('admin.settings.socials')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }

    public function CreateTestimonial(){
        return view('admin.settings.add_testimony')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }

    public function StoreTestimonial(Request $request){
        $request->validate([
            'name' => 'required',
            'content' => 'required'
        ]);
        $req = [
            'name' => $request->name,
            'content' => $request->content
        ];

        $ttm = Testimonial::create($req);
        if($ttm){
            Session::flash('alert', 'success');
            Session::flash('message', 'Testimonial Added Successfully');
            return back();
        }else{
            Session::flash('alert', 'error');
            Session::flash('message', 'Request failed, try again later');
            return back();
        }
    }
    

    public function EditTestimonial($id){
        return view('admin.settings.edit_testimony', [
            'testimonial' => Testimonial::where('id', decrypt($id))->first()
        ])
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }

    public function UpdateTestimonial(Request $request, $id){
        $data = [
            'name' => $request->name,
            'content' => $request->content
        ];
        $testim = Testimonial::where('id', decrypt($id))->first();
        $testim->fill($data)->save();
        Session::flash('alert', 'success');
        Session::flash('message', 'Testimonial updated Successfully');
        return back();
    }

    public function DeleteTestimonial($id){
        $testim = Testimonial::where('id', decrypt($id))->first();
        if($testim){
            $testim->delete();
            Session::flash('alert', 'error');
            Session::flash('message', 'Testimonial deleted Successfully');
            return back();
        }
        Session::flash('alert', 'error');
        Session::flash('message', 'Something went wrong, try again');
        return back();
    
    }
}
