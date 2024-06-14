@extends('layouts.app')

@section('contents')
    <div class="page-title-area title-bg-four">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>Events</h2>
                        <ul>
                            <li>
                                <a href="index-2.html">Home</a>
                            </li>
                            <li>
                                <span>Events</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="event-area four ptb-100">
        <div class="container">
            <div class="row">
                @forelse($events as $event)
                <div class="col-lg-4">
                    <div class="event-item">
                        <img src="{{asset('images/'.$event->image)}}" alt="Event">
                        <div class="inner">
                            <h4>{{$event->date}} <span></span></h4>
                            <h3>
                                <a href="{{route('users.events.details', encrypt($event->id))}}">{{$event->topic}}</a>
                            </h3>
                            <ul>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <span>{{$event->venue}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @empty 
                @endforelse
            </div>
            <div class="pagination-area">
                <ul>
                    <li>
                        <a href="#">Prev</a>
                    </li>
                    <li>
                        <a class="active" href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">Next</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
