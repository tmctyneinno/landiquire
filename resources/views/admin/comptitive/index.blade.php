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
                                    <a href="{{route('admin.comptitive.advantage.create')}}" class="mr-3 btn btn-primary" style="color:aliceblue">
                                        <i class="fa fa-bars"> Create New</i>
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
                                  
                                        @if(isset($advantage) && count($advantage) > 0)
                                        @foreach ($advantage as  $sp)
                                            <tr>
                                            
                                                <td>
                                                    <a href="#">{{$sp->title}}</a>
                                                </td>    
                                                <td> 
                                                {{$sp->content}}   
                                                </td>   
                                                <td> 
                                                    {{$sp->icon}}   
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
                                                            <a href="{{route('admin.comptitive.advantage.Delete', encrypt($sp->id))}}" class="dropdown-item">Delete</a>
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