<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Developer;
use App\Models\DeveloperContent;
use App\Models\Partner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class DeveloperController extends Controller
{
    //

    public function Index()
    {
        return view('frontend.developer')
        ->with('developer', DeveloperContent::get())
        ->with('title', 'For Developer');
    }

   
    public function Store(Request $request)
    {
            $valid = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required'
            ]);
            $capt = captcha_check($request->captcha);
            if(!$capt){
                Session::flash('message', 'Captcha does not match, try again');
                Session::flash('alert', 'danger');
                return back()->withInput($request->all());
               
            }
            if($valid->fails()){
                Session::flash('alert', 'danger');
                Session::flash('message', $valid->errors()->first());
                return back()->withErrors($valid)->withInput($request->all());
            }

            try{
            DB::beginTransaction();
            $data['name'] = $request->name; 
            $data['phone'] = $request->phone;
            $data['email'] = $request->email;
            $data['address'] = $request->address;
            $data['city'] = $request->city;
            $data['state'] = $request->state;
            Developer::create($data);
            Session::flash('alert', 'success');
            Session::flash('message', 'Request sent successfully, our team will contact you soon');
            DB::commit();
            return back();
        }catch(\Exception $e){
            DB::rollBack();
            Session::flash('alert', 'danger');
            Session::flash('message', $e->getMessage());
            return back()->withErrors($valid)->withInput($request->all());
        }
        
    }
}
