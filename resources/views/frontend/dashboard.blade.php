@extends('layouts.app')
@section('contents')
  
  @include('frontend.minimal.slider')

    {{-- <div class="about-area pt-100 pb-70">
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
                        <span class="about-span">{!!substr($about->contents,0,300)!!}</span>
                        
                        <div class="about-btn-area">
                            <a class="common-btn" href="#">Read More about us </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="about-area pt-100 pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="about-content">
                        <div style="float:left; width:30%" class="p-5">
                            <img src="{{asset('images/'.$about->image)}}" alt="About">
                        </div>
                        <div class="section-title">
                            <h2>{{ucfirst($about->title)}}</h2>
                        </div>
                        <p> 
                            {!! substr($about->contents,0,1250) !!} <a href="{{route('users.about.index')}}">read more</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="benefit-area three pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Core features</span>
                <h2>Our goals and missions</h2>
            </div>
            <div class="row">
                @forelse($goals as $goal)
                <div class="col-sm-6 col-lg-3">
                    <div class="benefit-item">
                        <i class="{{$goal->icon}}"></i>
                        <h3>{{$goal->title}}</h3>
                        <p>{{$goal->content}}</p>
                    </div>
                </div>
                @empty
                @endforelse
                
            </div>
        </div>
    </div>


    <section class="donations-area three pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Causes to care</span>
                <h2>Be the reason of someone smiles</h2>
                <p>Your support will touch a life today, donation to the growth and development of our foundation</p>
            </div>
            <div class="row">
                @forelse($donations as $donation)
                <div class="col-sm-6 col-lg-4">
                    <div class="donation-item">
                        <div class="top">
                            <h3>
                                <a href="{{route('user.donation.details', encrypt($donation->id))}}">{{$donation->title}}</a>
                            </h3>
                            <p>{!!substr($donation->content,0,150)!!}.</p>
                        </div>
                        <div class="img">
                            <img src="{{asset('images/'.$donation->image)}}" alt="Donation">
                            <a class="common-btn" href="{{route('user.donation.details', encrypt($donation->id))}}">Donate Now</a>
                        </div>
                        <div class="inner">
                            <div class="bottom">
                                <div class="skill">
                                    <div class="skill-bar skill1 wow fadeInLeftBig" style="width: {{($donation->amount_raised * 100)/$donation->goal_amount}}%">
                                        <span class="skill-count1" >@if($donation->amount_raised > 0) {{($donation->amount_raised * 100)/$donation->goal_amount}}% @else 0% @endif</span>
                                    </div>
                                </div>
                                <ul>
                                    <li> Raised {{moneyFormat($donation->amount_raised)}}</li>
                                    <li> Goal {{moneyFormat($donation->goal_amount)}}</li>
                                </ul>
                                @if($donation->amount_raised > 0)
                                <h4>Donated by <span>{{$donation->total_donors}}people</span></h4>
                                @else 
                                <h4>No Donations</h4>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
              @empty 
              @endforelse
            </div>
        </div>
    </section>

    <section class="gallery-area two pt-100 pb-70">
        <div class="container-fluid">
            <div class="section-title">
                <span class="sub-title">Our gallery</span>
                <h2>Have a view of our beuatiful moments</h2>
            </div>
            <div class="gallery-slider owl-theme owl-carousel">
                @forelse($galleries as $gallery)
                <div class="gallery-item">
                    <a href="{{asset('images/'.$gallery->images)}}" data-lightbox="roadtrip" >
                        <img src="{{asset('images/'.$gallery->images)}}" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a> 
                    {{-- <p style="font-weight:bolder; font-family:Verdana, Geneva, Tahoma, sans-serif" class="p-2">{{$gallery->title}} </p> --}}
                   
                </div>
                @empty 
                @endforelse
               
            </div>
        </div>
    </section>


    <section class="team-area pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Our Team</span>
                <h2>Meet our excellent Team Members</h2>
              
            </div>
            <div class="row">
                @forelse($teams as $team)
                <div class="col-sm-6 col-lg-4">
                    <div class="team-item">
                        <a href="{{route('team.member', encrypt($team))}}">
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
                            <span>{{ucfirst($team->about)}}</span>
                        </div>
                    </a>
                    </div>
                </div>
                @empty 

                @endforelse
              
            </div>
        </div>
    </section>

{{-- 
    <section class="testimonial-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Testimonials</span>
                <h2>Review from our clients</h2>
            </div>
            <div class="testimonial-slider owl-theme owl-carousel">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="testimonial-img">
                            <img src="assets/img/testimonial/testimonial1.jpg" alt="Testimonial">
                            <h3>Jac Jacson</h3>
                            <span>CEO & Abanda</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial-content">
                            <ul>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                            </ul>
                            <p>The legal definition of a charitable organization (and of charity) varies between countries
                                and in some instances regions of the country. The regulation, the tax treatment.</p>
                            <i class="icofont-quote-left quote"></i>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="testimonial-img">
                            <img src="assets/img/testimonial/testimonial2.jpg" alt="Testimonial">
                            <h3>Tom Henry</h3>
                            <span>Manager</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial-content">
                            <ul>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                            </ul>
                            <p>The legal definition of a charitable organization (and of charity) varies between countries
                                and in some instances regions of the country. The regulation, the tax treatment.</p>
                            <i class="icofont-quote-left quote"></i>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="testimonial-img">
                            <img src="assets/img/testimonial/testimonial3.jpg" alt="Testimonial">
                            <h3>Micheal Shon</h3>
                            <span>Director</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial-content">
                            <ul>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                            </ul>
                            <p>The legal definition of a charitable organization (and of charity) varies between countries
                                and in some instances regions of the country. The regulation, the tax treatment.</p>
                            <i class="icofont-quote-left quote"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


@if(count($blogs)> 0)
    <section class="blog-area three pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Latest news & blog</span>
                <h2>Latest  Blog</h2>
            </div>
            <div class="row">
                @forelse($blogs as $blog)
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="top">
                            <a href="blog-details.html">
                                <img src="{{asset('images/'.$blog->image)}}" alt="Blog">
                            </a>
                        </div>
                        <div class="bottom">
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    <span>{{$blog->created_at->format('d m Y')}}</span>
                                </li>
                                <li>
                                    <i class="icofont-user-alt-3"></i>
                                    <span>By:</span>
                                    <a href="#">Admin</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">{{$blog->title}}</a>
                            </h3>
                            <p>{!!  substr($blog->contents, 0,200)!!}</p>
                            <a class="blog-btn" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                @empty 
                @endif
            </div>
        </div>
    </section>
    @endif


   


    <div class="go-top">
        <i class="icofont-arrow-up"></i>
        <i class="icofont-arrow-up"></i>
    </div>
@endsection
