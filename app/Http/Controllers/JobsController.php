<?php

namespace App\Http\Controllers;

use App\Models\ClientJob;
use App\Models\Industry;
use Illuminate\Http\Request;

class JobsController extends Controller
{

    public function Index(){
        return view('admin.jobs.index', [
            'jobs' => ClientJob::latest()->get()
        ])
        ->with('bheading', 'Manage Jobs')
        ->with('breadcrumb', 'Post Jobs');
    }

    public function JobsCreate(){
        return view('admin.jobs.create', [
            'industries' => Industry::get()
        ])
        ->with('bheading', 'Manage Jobs')
        ->with('breadcrumb', 'Post Jobs');
    }

    public function JobsStore(Request $request){
        $request->validate([
            'title' => 'required',
            'contents' => 'required',
            'image' => 'required',
        ]);

        //dd($request->all());

        $data = [];
       try{ 
        if($request->contents){
            $data['contents'] = $request->contents;
        }
        if($request->title) {
            $data['title'] = $request->title;
        }
        if($request->image){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $image->move('images',$fileName);
            $data['image'] = $fileName;
        }
         Blog::create($data);
        \Session::flash('alert', 'success');
        \Session::flash('message','Page added successfully');
        return back();
    
   }catch(\Exception $e){
        \Session::flash('alert', 'error');
        \Session::flash('message','Request Failed, try again');
        return back()->withInput();
    }
    }

    public function BlogsEdit($id){
        return view('admin.blogs.edit', [
            'blog' => ClientJob::where('id', decrypt($id))->first(),
            'latest' => ClientJob::latest()->take(5)->get()
        ])
        ->with('bheading', 'Manage Blogs')
        ->with('breadcrumb', 'Edit Blog Post');
    }

    public function BlogsUpdate(Request $request, $id){
        $blog = ClientJob::whereId(decrypt($id))->first();
        try{ 
        if($request->contents){
            $blog->contents = $request->contents;
        }
        if($request->title) {
            $blog->title = $request->title;
        }
        if($request->image){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $image->move('images',$fileName);
            $blog->image = $fileName;
        }
        $blog->save();
        \Session::flash('alert', 'success');
        \Session::flash('message','Blog added successfully');
        return back();
    
    }catch(\Exception $e){
        \Session::flash('alert', 'error');
        \Session::flash('message','Request Failed, try again');
        return back()->withInput();
    }
    }


    public function BlogsDelete($id){
        $blog = ClientJob::whereId(decrypt($id))->first();
        $blog->delete();
        \Session::flash('alert', 'error');
        \Session::flash('message','Page Deleted successfully');
        return back();
    }

    public function BlogsActivate($id){
        $blog = ClientJob::whereId(decrypt($id))->first();
        $blog->update(['status' => 1]);
        \Session::flash('alert', 'error');
        \Session::flash('message','Page Updated successfully');
        return back();
    }

    public function BlogsDisable($id){
        $blog = ClientJob::whereId(decrypt($id))->first();
        $blog->update(['status' => 0]);
        \Session::flash('alert', 'error');
        \Session::flash('message','Page Update successfully');
        return back();
}
}
