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
                                    <a href="{{route('admin.projectplus.create')}}" class="mr-3 btn btn-primary" style="color:aliceblue">
                                        <i class="fa fa-bars"> Create Project Plus Content</i>
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
                                                <th>Name</th>
                                                <th>Content</th>
                                                 <th>Icon</th>
                                                 <th>Created At</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                  
                                        @if(isset($projectplus) && count($projectplus) > 0)
                                        @foreach ($projectplus as  $sp)
                                            <tr>
                                            
                                                <td>
                                                    <a href="#">{{$sp->title}}</a>
                                                </td>    
                                                <td> 
                                                {!! substr($sp->content,0,100) !!}   
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
                                                            <a href="{{route('admin.projectplus.edit', encrypt($sp->id))}}" class="dropdown-item">Edit</a>
                                                            <a onclick="return confirm('Proceed and delete Project plus content')" href="{{route('admin.projectplus.delete', encrypt($sp->id))}}" class="dropdown-item">Delete</a>
                                                      </div>
                                                    </div>
                                                </td>
                                            </tr>
                                              @endforeach
                                              @else 
                                              <tr>
                                              <td> No data available </td>
                                              </tr>
                                              @endif
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