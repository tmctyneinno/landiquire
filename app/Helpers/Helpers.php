<?php 
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


if(!function_exists('StoreImage')){
   function StoreImage($request){
    $image = $request->file('image');
    $ext = $image->getClientOriginalExtension();
    $fileName =  time().'.'.$ext;
  Image::make($image)->resize(500,450)->save('images/'. $fileName);
    return $fileName;
    }
}

if(!function_exists('StoreFile')){
    function StoreFile($file){
     $ext = $file->getClientOriginalExtension();
     $fileName =  time().'.'.$ext;
     $file->move('images',$fileName);
     return $fileName;
     }
 }

if(!function_exists('StoreImages')){
    function StoreImages($image){
     $ext = $image->getClientOriginalExtension();
     $fileName =  time().'.'.$ext;
   Image::make($image)->resize(500,450)->save('images/'. $fileName);
     return $fileName;
     }
 }

if(!function_exists('authUser')){
    function authUser(){
        return auth()->user();
    }
}

if(!function_exists('moneyFormat')){
function moneyFormat($value){
    return '₦'.number_format($value,2);
}
}