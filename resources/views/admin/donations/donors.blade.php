@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                     <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title">{{$donationCategory->title}}</h6>
                                
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body" style="border: 2px solid #eee">
                                        
                                       <span style="font-weight:bold" class="p-2">Target Amount</span>
                                     
                                        <p> {{moneyFormat($donationCategory->goal_amount)}}</p>
                                        <div class="row">
                                            <div class="col">
                                                <div class="text-black mb-1 small">Amount Paid</div>
                                                <div>{{moneyFormat($donationCategory->amount_raised)}}</div>
                                            </div>
                                            <div class="col">
                                                <div class="text-black mb-1 small">Number of Donors</div>
                                                <div>{{moneyFormat($donationCategory->total_donors??0)}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                 <div class="table-responsive">
                                        <table id="myTable" class="table table-striped table-bordered">
                                           <thead>
                                            <tr>
                                                <th>Name of Donor</th>
                                                <th>Email of Donor</th>
                                                <th>Amount Paid</th>
                                                 <th>Date Paid</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                  
                                        @forelse ($donations as  $sp)
                                            <tr>
                                            
                                                <td>
                                                    <a href="#">{{$sp?->user?->name}}</a>
                                                </td>    
                                                <td>
                                                    <a href="#">{{$sp?->user?->email}}</a>
                                                </td>
                                                <td>
                                                    <a href="#">{{number_format($sp->amount,2)}}</a>
                                                </td>  
                                                  <td>
                                                    <a href="#">{{$sp->created_at}}</a>
                                                </td>
                                            </tr>
                                              @empty
                                              <tr>
                                                <td> No data available </td>
                                                </tr>
                                              @else 
                                              @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                 </div>
                  </div>

@endsection