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
            $pages['pages'] = Page::where('menu_id', $menuId->id)->first();
            $pages['breadcrums'] =  $menuId->name;
            $pages['sidebar'] = Menu::get();
            return view('frontend.subpages', $pages);
        }
    }


    public function Subpages($id){
        $id = SubMenu::where('id', $id)->first();
        $pages['pages'] = Page::where('sub_menu_id', $id->id)->first();
        $pages['breadcrums'] =  $id->name;
        $pages['sidebar'] = SubMenu::where('menu_id', $id->menu_id)->get();
        if(!$pages){
            return back();
        }
        return view('frontend.subpages', $pages);
    }

}
