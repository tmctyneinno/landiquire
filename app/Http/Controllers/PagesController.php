<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\Page;
use App\Models\ClientJob;
use App\Models\Industry;

class PagesController extends Controller
{
    public function Pages($id){
        $menuId = Menu::where('id', $id)->first();
        if($menuId->slug == 'blogs'){
            return view('frontend.blogs', ['blogs' => Blog::latest()->get(), 'popular' => Blog::where('views', '>', 10)->get()]);
           }
        if($menuId->slug == 'jobs'){
            
            return view('frontend.jobs',[
                'jobs' => ClientJob::latest()->get(),
                'industries' => Industry::get(),
            ]);
        }

        if($menuId->slug == 'contact'){
            return view('frontend.contact');
        }
        if($menuId->has_child){
            $pages['pages'] = SubMenu::where('menu_id', $menuId->id)->get();
            $pages['breadcrums'] = $pages['pages'][0]->name;
            return view('frontend.pages', $pages);
        }else{
            $pages = Page::where('menu_id', $menuId->id)->first();
        if(!$pages){
            return back();
        }
            $pages['pages'] = Page::where('menu_id', $menuId->id)->first();
            $pages['breadcrums'] =  $menuId->name;
            $pages['sidebar'] = Menu::get();
            return view('frontend.subpages', $pages);
        }
    }


    public function Subpages($id){
        $id = SubMenu::where('id', $id)->first();

        $pages = Page::where('sub_menu_id', $id->id)->first();
        if(!$pages){
            return back();
        }
        $pages['pages'] = $pages;
        $pages['breadcrums'] =  $id->name;
        $pages['sidebar'] = SubMenu::where('menu_id', $id->menu_id)->get();
        
      
        return view('frontend.subpages', $pages);
    }


    public function BlogDetails($id){
        $id = decrypt($id);
        return view('frontend.blog_details', [
            'blogs' => Blog::where('id', $id)->first(),
            'popular' => Blog::where('views', '>', '10')->get(),
        ]);
    }

    public function JobCategory($id){
        $id = explode('-', $id);
        $jobs = ClientJob::where('industries_id', $id)->get();
        if(count($jobs)> 0){
        return view('frontend.jobs', [
            'jobs' => ClientJob::where('industries_id', $id)->get(),
            'industries' => Industry::get()
        ]);
    }else{
        return back();
    }
    }
}
