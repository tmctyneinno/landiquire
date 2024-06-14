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


    <div class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{asset('images/'.$about->image)}}" alt="About">
                    </div>
                </div>
                <div class="col-lg-6">
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
                @forelse($goals $goal)
                <div class="col-sm-6 col-lg-4">
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


    <div class="benefit-area two pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="benefit-img">
                        <img src="assets/img/benefit-main1.jpg" alt="Benefit">
                        <img src="assets/img/benefit-shape1.png" alt="Benefit">
                        <div class="video-wrap">
                            <button class="js-modal-btn" data-video-id="uemObN8_dcw">
                                <i class="icofont-ui-play"></i>
                            </button>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>


    <section class="team-area four pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Our Team Members</span>
                <h2>Meet our excellent</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="team-item">
                        <div class="top">
                            <img src="assets/img/team/team1.jpg" alt="Team">
                            <ul>
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
                            </ul>
                        </div>
                        <div class="bottom">
                            <h3>Jenas handar</h3>
                            <span>CEO & Founder</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="team-item">
                        <div class="top">
                            <img src="assets/img/team/team2.jpg" alt="Team">
                            <ul>
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
                            </ul>
                        </div>
                        <div class="bottom">
                            <h3>Smithy alisha</h3>
                            <span>Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="team-item">
                        <div class="top">
                            <img src="assets/img/team/team3.jpg" alt="Team">
                            <ul>
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
                            </ul>
                        </div>
                        <div class="bottom">
                            <h3>Johan mendal</h3>
                            <span>Volunteer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
