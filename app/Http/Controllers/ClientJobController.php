<?php

namespace App\Http\Controllers;

use App\Models\ClientJob;
use App\Models\Industry;
use Illuminate\Http\Request;

class ClientJobController extends Controller
{
    public function Index(){
        return view();
    }

    public function Details($id){
        
        $id = explode('-', $id);
        $job = ClientJob::where('id', $id[0])->first();
        return view('frontend.jobs_details', [
            'job' => $job,
            'industries' => Industry::get()
        ]);
    }
}

