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
                                    <a href="{{route('admin.events.create')}}" class="mr-3 btn btn-primary" style="color:aliceblue">
                                        <i class="fa fa-bars"> Add New Events</i>
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
                                  
                                        @forelse ($Events as  $sp)
                                            <tr>
                                            
                                                <td>
                                                    <a href="#">{!!$sp->topic!!}</a>
                                                </td>    
                                                <td>
                                                    <a href="#">{{$sp->venue}}</a>
                                                </td>
                                                <td>
                                                    <a href="#">{{$sp->date}}</a>
                                                </td>
                                                <td>
                                                    <a href="#">{{$sp->organizers}}</a>
                                                </td>
                                                <td> 
                                                {!!substr($sp->description,0,100)!!}   
                                                </td>   
                                                <td> 
                                                   <img src="{{asset('image/'.$sp->image)}}" width="100px">
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
                                                            <a href="{{route('admin.events.edit', encrypt($sp->id))}}" class="dropdown-item">Edit</a>
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