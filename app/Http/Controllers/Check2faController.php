<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Mail;
use App\Mail\Check2faMail;
use App\Models\Setting;

use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class Check2faController extends Controller
{
 
        public function Index(){
            $user = Admin::where('id', auth('admin')->user()->id)->first();
            $data['otp'] = rand(111111,999999);
            $data['subject'] = 'Login Code';
            $user->update(['new_login' => $data['otp']]);
            try{
            Mail::to(Setting::pluck('site_email')[0])->send(new Check2faMail($data));
            }catch(\Exception $e){
            Session::flash('alert', 'error');
            Session::flash('msg', 'An network error occured, try again');
            return view('auth.2fa');
            }
            return view('auth.2fa');
        }
    
        public function VerifyCode(Request $request){
            $user = Admin::where('id', auth('admin')->user()->id)->first();
            if($user->new_login == $request->code){
                $user->update(['is_verified' => 1]);
                return redirect()->route('admin.index');
            }else{
                Session::flash('resend'); 
                return back()->withErrors(['code' => 'The code you entered is invalid or Expired']);
            }
        }

}
