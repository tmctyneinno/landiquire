@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                     <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title">Website</h6>
                                <div>
                                    <a href="{{route('admin.donation.create')}}" class="mr-3 btn btn-primary" style="color:aliceblue">
                                        <i class="fa fa-bars"> Add Donation Category</i>
                                    </a>
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                       
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                 <div class="table-responsive">
                                        <table id="myTable" class="table table-striped table-bordered">
                                           <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Target Amount</th>
                                                <th>Amount Paid</th>
                                                <th>Total Donors</th>
                                                <th>Content</th>
                                                 <th>Image</th>
                                                 <th>Created At</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                  
                                        @forelse ($donations as  $sp)
                                            <tr>
                                            
                                                <td>
                                                    <a href="#">{!!$sp->title!!}</a>
                                                </td>    
                                                <td>
                                                    <a href="#">{{moneyFormat($sp->goal_amount)}}</a>
                                                </td>
                                                <td>
                                                    <a href="#">{{moneyFormat($sp->amount_raised)}}</a>
                                                </td>
                                                <td>
                                                    <a href="#">{{$sp->total_donors??0}}</a>
                                                </td>
                                                <td> 
                                                {!!substr($sp->content,0,100)!!}   
                                                </td>   
                                                <td> 
                                                   <img src="{{asset('images/'.$sp->image)}}" width="100px">
                                                    </td>  
                                                  <td>
                                                    <a href="#">{{$sp->created_at}}</a>
                                                </td>
                                                        
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a href="#" data-toggle="dropdown">
                                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="{{route('admin.donation.edit', encrypt($sp->id))}}" class="dropdown-item">Edit</a>
                                                            <hr>
                                                            <a href="{{route('admin.donation.donors', encrypt($sp->id))}}" class="dropdown-item">View Donors</a>
                                                      </div>
                                                    </div>
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