<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\PartnerContent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PartnerController extends Controller
{
    //

    public function Index() {
        return view('frontend.partner')
        ->with('parners', PartnerContent::latest()->get());
    }

    public function Store(Request $request)
    {
            $valid = Validator::make($request->all(), [
                'company_profile' => 'required',
                'intent_document' => 'required',
                'property_document' => 'required'
            ]);
            if($valid->fails()){
                Session::flash('alert', 'danger');
                Session::flash('message', $valid->errors()->first());
                return back()->withErrors($valid)->withInput($request->all());
            }

            try{
            DB::beginTransaction();
            if($request->has('company_profile')){
                
                $data['company_profile'] = StoreFile($request->company_profile);
            }
            if($request->has('intent_document')){
                
                $data['intent_document'] =  StoreFile($request->intent_document);
            }
            if($request->has('property_document'))
            {
                $data['property_document'] = StoreFile($request->property_document);
            }
            $data['name'] = $request->name;
            $data['phone'] = $request->phone;
            $data['email'] = $request->email;
            Partner::create($data);
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
