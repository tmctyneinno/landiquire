@extends('layouts.app')

@section('contents')
    <div class="page-title-area title-bg-five">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>Event Details</h2>
                        <ul>
                            <li>
                                <a href="{{route('index')}}">Home</a>
                            </li>
                            <li>
                                <span>Event Details</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="event-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="details-item">
                        <div class="details-img">
                          <center><img src="{{asset('images/'.$event->image)}}" alt="Details"></center>  
                            <h2>{{$event->topic}}</h2>
                            <p>{!! $event->description !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="search widget-item">
                            
                        </div>
                        <div class="information widget-item">
                            <h3>Event information</h3>
                            <ul>
                                <li>
                                    <span>Organizer:</span>
                                    {{$event->organizers}}
                                </li>
                                <li>
                                    <span>Date:</span>
                                   {{$event->date}}
                                </li>
                                <li>
                                    <span>Location:</span>
                                    <a href="#">{{$event->venue}}</a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="widget-area">
                                <div class="common-right-content widget-item">
                                    <h3>Recent Events</h3>
                                    
                                        @forelse($events as $ss)
                                     
                                            <div class="details-img">
                                                <center><img src="{{asset('images/'.$event->image)}}" alt="Details"></center>  
                                                  <p > <span style="font-weight: bold; font-size:13px; text-align:justify; color:#000"> {{$event->topic}}</span>
                                                 <span>Organizer:</span>
                                                    {{$ss->organizers}} <br>
                                                    <span>Date:</span>
                                                    {{$ss->date}}</p>
                                              </div>
                                        
                                        @empty 
                                       
                                        @endforelse
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
