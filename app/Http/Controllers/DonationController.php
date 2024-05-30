<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\DonationCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.donations.index')
        ->with('donations', DonationCategory::latest()->get())
        ->with('bheading', 'Donation Category')
        ->with('breadcrumb', 'Donation Category');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.donations.create')
        ->with('bheading', 'Donation Category')
        ->with('breadcrumb', 'Donation Category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $donation = new DonationCategory;
            $donation->title = $request->title;
            $donation->content = $request->content;
            $donation->goal_amount  = $request->goal_amount;
            if($request->image)
            $donation->image = StoreImage($request);
            $donation->save();

            Session::flash('alert', 'success');
            Session::flash('message', 'Donation Category Added');
            return back();
        }catch(Exception $e){
            Session::flash('alert', 'error');
            Session::flash('message', $e->getMessage());
            return back()->withInput($request->all());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        return view('admin.donations.edit')
        ->with('donation', DonationCategory::where('id', decrypt($id))->first())
        ->with('bheading', 'Donation Category')
        ->with('breadcrumb', 'Donation Category');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        try{
        $donation = DonationCategory::where('id', decrypt($id))->first();
        if($request->title) $donation->title = $request->title;
        if($request->content) $donation->content  = $request->content;
        if($request->image) $donation->image = StoreImage($request);
        $donation->save();
        Session::flash('alert', 'success');
        Session::flash('message', 'Donation Category Updated');
        return back();
    }catch(Exception $e){
        Session::flash('alert', 'error');
        Session::flash('message', $e->getMessage());
        return back()->withInput($request->all());
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function Donors($donationCategoryId){
        $donationCategory = DonationCategory::where('id', decrypt($donationCategoryId))->first();
        $donations = Donation::where('donation_category_id', $donationCategory->id)->get();
        return view('admin.donations.donors')
        ->with('donations', $donations)
        ->with('donationCategory', $donationCategory)
        ->with('bheading', 'Donations')
        ->with('breadcrumb', 'Donations');
    }
}
