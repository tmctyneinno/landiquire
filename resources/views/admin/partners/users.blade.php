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
                                {{-- <a href="{{route('admin.addMenu')}}" class="mr-3 btn btn-primary" style="color:aliceblue">
                                        <i class="fa fa-bars"> Create</i>
                                    </a> --}}
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Intent Document</th>
                                                <th>Company Profile</th>
                                                <th>Property Document</th>
                                                <th>Date Created</th>
                                                <th> Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if (count($partners) > 0)
                                                @foreach ($partners as $sp)
                                                    <tr>

                                                        <td>
                                                            <a href="#">{{ $sp->name }}</a>
                                                        </td>
                                                        <td>
                                                            <a href="#">{{ $sp->email }}</a>
                                                        </td>
                                                        <td>
                                                            <a href="#">{{ $sp->phone }}</a>
                                                        </td>

                                                        <td>
                                                            <a href="{{ asset('images/' . $sp->intent_document) }}"
                                                                class="badge bg-red-400">{{ $sp->intent_document }}</a>
                                                        </td>
                                                        <td>
                                                            <a href="#">{{ $sp->company_profile }}</a>
                                                        </td>
                                                        <td>
                                                            <a href="#">{{ $sp->property_document }}</a>
                                                        </td>
                                                        <td>
                                                            <a href="#">{{ $sp->created_at->format('d M, Y') }}</a>
                                                        </td>
                                                        <td>
                                                            @if ($sp->status == '2')
                                                                <span class="badge badge-danger"> Rejected </span>
                                                            @elseif($sp->status == '1')
                                                                <span class="badge badge-success"> Approved </span>
                                                            @else
                                                                <span class="badge badge-info"> pending </span>
                                                            @endif
                                                        </td>
                                                        <td class="text-right">
                                                            <div class="dropdown">
                                                                <a href="#" data-toggle="dropdown">
                                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                                </a>
                                                                @if ($sp->status == 0)
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a href="{{ route('admin.partners.users.status', [encrypt($sp->id), 1]) }}"
                                                                            class="dropdown-item "
                                                                            style="color:green">Approve</a>
                                                                        <a href="{{ route('admin.partners.users.status', [encrypt($sp->id), 2]) }}"
                                                                            class="dropdown-item"
                                                                            style="color:red">Reject</a>
                                                                    </div>
                                                                @endif
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
