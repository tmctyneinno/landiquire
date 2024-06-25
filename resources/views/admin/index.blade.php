@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-5">
            <div class="card bg-secondary-gradient">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <h6 class="card-title mb-3">Welcome back Admin!</h6>
                            <p>Manage your website easily.</p>
                            <ul class="mb-3">
                                {{-- <li>Post Blogs and manage post</li>
                                <li>Manage jobs and applicants</li> --}}
                            </ul>
                            
                        </div>
                        <div class="col-md-5">
                            <img src="{{asset('assets/'.$settings->logo)}}" width="50px" alt="..." class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title d-flex justify-content-between">
                        <span>Admin Last Login</span>
                        
                    </h6>
                   
                    <div class="table-responsive mt-5">
                        <table class="table table-borderless table-striped mb-0">
                            <thead>
                            <tr>
                                <th class="wd-40">Location</th>
                                <th class="wd-25 text-center">Login Ip</th>
                                <th class="wd-35 text-center">Date Login</th>
                                <th class="wd-35"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($logins as $login)
                            <tr>
                                <td> 
                                    @php $details = json_decode(file_get_contents("http://ipinfo.io/$login->login_ip/json"));
                                     echo $details->city.", ".$details->country;
                                    @endphp
                                    </td>
                                <td class="text-center">{{$login->login_ip}}</td>
                                <td class="text-center text-success">{{$login->created_at}}</td>
                            </tr>

                                
                            @empty
                                
                            @endforelse
                         
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
                {{-- <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="card-title mb-3">Jobs Posted</h6>
                                    <div class="d-flex d-sm-block d-lg-flex align-items-end">
                                        <h2 class="mb-0 mr-2 font-weight-bold">{{count($jobs)}}</h2>
                                        <p class="small text-muted mb-0 line-height-20">
                                            <span class="text-success">{{count($applicant)}}</span> Applicants
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <div class="avatar avatar-lg">
                                        <div class="avatar-title bg-success-bright text-success rounded-circle">
                                            <i class="fa fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                        
                    </div>
                    
                    
                </div> --}}
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="card-title mb-3">Donation Paid</h6>
                                    <div class="d-flex d-sm-block d-lg-flex align-items-end">
                                        <h2 class="mb-0 mr-2 font-weight-bold"></h2>
                                        <div class="table-responsive mt-5">
                                            <div class="table-responsive">
                                                <table id="myTable" class="table table-striped table-bordered">
                                                   <thead>
                                                    <tr>
                                                        <th>Name of Donor</th>
                                                        <th>Email of Donor</th>
                                                        <th>Amount</th>
                                                         <th>Status</th>
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
                                                            <a href="#">@if($sp->status == 'success')  <span class="badge bg-success"> completed</span> @else <span class="badge bg-danger"> Failed</span> @endif </a>
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
    </div>
</div>
@endsection
