@extends('layouts.app')
@section('contents')
    <div class="page-title-area title-bg-three">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        {{-- <h2></h2> --}}
                        <ul>
                            <li>
                                <a href="{{route('index')}}">Home</a>
                            </li>
                            <li>
                                <span>Our Teams</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="donation-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-8">
                    <div class="details-item">
                        <div class="details-img">
                       
                            <h2>{{$team->name}}</h2>
                            <p>{{$team->position}}</p>
                            <img src="{{asset('images/'.$team->image)}}" alt="Details" width="300px">
                            <p>{!! $team->about !!}</p>
             
                        </div>
                     
                    </div>
                </div>
               
            </div>
        </div>
    </div>
@endsection
