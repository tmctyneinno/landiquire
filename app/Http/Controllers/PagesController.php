<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\Page;
class PagesController extends Controller
{
 
    public function Pages($id){
        $menuId = Menu::where('id', $id)->first();
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

}
