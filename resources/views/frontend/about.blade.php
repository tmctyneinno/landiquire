@extends('layouts.app')
@section('contents')
    <div class="page-title-area title-bg-one">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>About</h2>
                        <ul>
                            <li>
                                <a href="{{asset('index')}}">Home</a>
                            </li>
                            <li>
                                <span>About</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about-area pt-100 pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="about-img">
                        <img src="{{asset('images/'.$about->image)}}" alt="About">
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="sub-title">About us</span>
                            <h2>{{$about->title}}</h2>
                        </div>
                        <p>
                            {!! $about->contents !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="dream-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Fulfill our dream</span>
                <h2>Let's make a change</h2>
            </div>
            <div class="row">
                @forelse($goals as $goal)
                <div class="col-sm-6 col-lg-3">
                    <div class="dream-item">
                        <h3>
                            <a href="donations.html">{{$goal->title}}</a>
                        </h3>
                        <p>{!! $goal->content !!}</p>
                        <span class="sub-span"></span>
                    </div>
                </div>
                @empty
                @endforelse
             
            </div>
        </div>
    </section>



    <section class="team-area four pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Our Team Members</span>
                <h2>Meet our excellent</h2>
            </div>
            <div class="row">
                @forelse($teams as $team)
                <div class="col-sm-6 col-lg-4">
                    <div class="team-item">
                        <div class="top">
                            <img src="{{asset('images/'.$team->image)}}" alt="{{ucfirst($team->name)}}">
                            {{-- <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="icofont-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="icofont-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="icofont-youtube-play"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </li>
                            </ul> --}}
                        </div>
                        <div class="bottom">
                            <h3>{{ucfirst($team->name)}}</h3>
                            <span>{{ucfirst($team->position)}}</span>
                        </div>
                    </div>
                </div>
                @empty 

                @endforelse
              
            </div>
        </div>
    </section>
@endsection
