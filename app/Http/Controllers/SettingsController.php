<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Setting;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
{

    public function Index(){
        return view('admin.settings.index')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }


    public function Socials(){   
        return view('admin.settings.socials')
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }

    public function Abouts(){
        return view('admin.settings.abouts');
    }


    public function UpdateSocials(Request $request){
        $data = [
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'linkedIn' => $request->linkedIn,
        ];
        $testim = Setting::first();
        $testim->fill($data)->save();
        Session::flash('alert', 'success');
        Session::flash('message', 'Testimonial updated Successfully');
        return back();
    }

    public function UpdateSettings(Request $request){

        $data = [
            'site_name' => $request->site_name,
            'site_phone' => $request->site_phone,
            'site_email' => $request->site_email,
            'address' => $request->address,
            'opening_hours' => $request->opening_hours,
            'about' => $request->about_us,
            'announcement' => $request->announcement
        ];

        if($request->file('image')){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = 'logo'.'.'.$ext;
            $image->move('assets',$fileName);
            $data['logo'] = $fileName;
        }

        $testim = Setting::first();
       $testim->fill($data)->save();
        Session::flash('alert', 'success');
        Session::flash('message', 'Testimonial updated Successfully');
        return back();
    }

    public function UserAccount(){
        $user = User::where('id', auth()->user()->id)->first();
        return view('admin.settings.account', ['user' => $user])
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Website Settings');
    }

    public function UpdateAccount(Request $request){
        $data = [];
        if($request->name){
            $data['name'] = $request->name;
        }
        if($request->email){
            $data['email'] = $request->email;
        }
          if($request->phone){
            $data['phone'] = $request->phone;
        }
        if($request->password){
            $data['password'] = bcrypt($request->password);
        } 
        $user = User::where('id', auth()->user()->id)->first();
      $ss =   $user->fill($data)->save();
      if($ss){
        Session::flash('alert', 'success');
        Session::flash('message', 'Details Updated Successfully');
        return back();
      }else{
        Session::flash('alert', 'error');
        Session::flash('message', 'Request not completed, Nothing changed ');
        return back();

      }
    }
}
