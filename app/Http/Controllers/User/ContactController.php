<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Mail\ContactUs;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    public function Index(){
        return view('frontend.contact');
    }

    public function Store(Request $request){
       $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',
            'captcha' => 'required',
            
        ]);
        $capt = captcha_check($request->captcha);
        if(!$capt){
            Session::flash('message', 'Captcha does not match, try again');
            Session::flash('alert', 'danger');
            return back()->withInput($request->all());
           
        }
        $data = [
            'name' =>  $request->name,
            'phone' => $request->phone,
            'email' =>  $request->email,
            'message' => $request->message
        ];
        $settings = Setting::latest()->first();
        Session::flash('message', 'Request sent Successfully');
        Session::flash('alert', 'success');
        Mail::to($settings->site_email)->send(new ContactUs($data));
        return back();
    }
}
