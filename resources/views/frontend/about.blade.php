@extends('layouts.app')
@section('contents')
   

<!-- Page Header Section Start -->
<div class="page-header parallaxie" style="background-image:url({{asset('images/'.$about->image)}})">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Subpage Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime">About Us</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">/About us</li>
                        </ol>
                    </nav>
                </div>
                <!-- Subpage Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->	

<!-- About Section Start -->
<div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- About Left Image Start -->
                <div class="about-images">
                    <div class="about-video">
                        <figure class="reveal image-anime">
                            <img src="{{asset('images/'.$about->image)}}" alt="">
                        </figure>

                   
                    </div>

                    <div class="about-image">
                        <figure class="reveal image-anime">
                            <img src="{{asset('images/'.$about->image)}}" alt="">
                        </figure>
                    </div>
                </div>
                <!-- About Left Image End -->
            </div>
            <div class="col-lg-6">
                <!-- About Content Start -->
                <div class="about-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">About {{$settings->site_name}}</h3>
                        <h2 class="text-anime">{{$about->title}}</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Content Body Start -->
                    <div class="about-content-body">
                        <p class="wow fadeInUp" data-wow-delay="0.5s">{!! $about->contents !!}</p>

                        <ul>
                        	<li class="wow fadeInUp" data-wow-delay="0.75s" style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInUp;">
                                <div class="icon-box"><img src="{{asset('assets/images/icon-about-1.svg')}}" alt=""></div>
                                <span>Mission</span>
                                {!! $about->mission !!}
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="0.75s" style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInUp;">
                                <div class="icon-box"><img src="{{asset('assets/images/icon-about-1.svg')}}" alt=""></div>
                                <span>Vision</span>
                                {!! $about->vision !!}
                            </li>
                        </ul>
                    </div>
                    <!-- About Content Body End -->

                </div>
                <!-- About Content End -->
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->
<div class="how-it-works" style="padding:20px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    {{-- <h3 class="wow fadeInUp"></h3> --}}
                    <h5 class="text-anime" style="font-size: 20px">Our Core Objectives</h5>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            @forelse($objectives as $values)
            <div class="col-lg-3 col-md-4">
                <!-- How it Work Item Start -->
                <div class="how-it-work-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <img src="{{asset('assets/images/'.$values->icon)}}" alt="">
                    </div>

                    <h3>{{$values->title}}</h3>
                    <p>{{$values->content}}</p>
                </div>
                <!-- How it Work Item End -->
            </div>
            @empty 
            @endforelse

    
        </div>
    </div>
</div>
<!-- How It Work Section Start -->
<div class="how-it-works">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Comptitive Advantage</h3>
                    {{-- <h2 class="text-anime">F</h2> --}}
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- Testimonial Carousel Start -->
                <div class="testimonial-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @forelse ($advantage as $item)
                            <div class="swiper-slide">
                                <div class="testimonial-slide">
                                    <div class="testimonial-rating">
                                      {{$item->title}}
                                    </div>

                                    <div class="testimonial-content">
                                        <p>{{$item->content}}</p>
                                    </div>     
                                </div>
                            </div>
                             
                            @empty
                                
                            @endforelse
                            <!-- Testimonial Slide End -->
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- Testimonial Carousel End -->
            </div>
        </div>
    </div>
</div>
<!-- How It Work Section End -->
<div class="how-it-works" style="padding:20px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    {{-- <h3 class="wow fadeInUp"></h3> --}}
                    <h5 class="text-anime" style="font-size: 30px">Our Core Value</h5>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            @forelse($goals as $values)
            <div class="col-lg-3 col-md-4">
                <!-- How it Work Item Start -->
                <div class="how-it-work-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <img src="{{asset('assets/images/'.$values->icon)}}" alt="">
                    </div>

                    <h3>{{$values->title}}</h3>
                    <p>{{$values->content}}</p>
                </div>
                <!-- How it Work Item End -->
            </div>
            @empty 
            @endforelse

    
        </div>
    </div>
</div>
<!-- Gallery Section Start -->
{{-- <div class="photo-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Gallery</h3>
                    <h2 class="text-anime">Our Photo Gallery</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row project-gallery-items">
            <div class="col-lg-3 col-6">
                <!-- Gallery Item Start -->
                <div class="gallery-item wow fadeInUp" data-wow-delay="0.25s">
                    <a href="images/post-1.jpg">
                        <figure class="image-anime">
                            <img src="images/post-1.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- Gallery Item End -->
            </div>

            <div class="col-lg-3 col-6">
                <!-- Gallery Item Start -->
                <div class="gallery-item wow fadeInUp" data-wow-delay="0.5s">
                    <a href="images/post-2.jpg">
                        <figure class="image-anime">
                            <img src="images/post-2.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- Gallery Item End -->
            </div>

            <div class="col-lg-3 col-6">
                <!-- Gallery Item Start -->
                <div class="gallery-item wow fadeInUp" data-wow-delay="0.75s">
                    <a href="images/post-3.jpg">
                        <figure class="image-anime">
                            <img src="images/post-3.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- Gallery Item End -->
            </div>

            <div class="col-lg-3 col-6">
                <!-- Gallery Item Start -->
                <div class="gallery-item wow fadeInUp" data-wow-delay="1s">
                    <a href="images/post-4.jpg">
                        <figure class="image-anime">
                            <img src="images/post-4.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- Gallery Item End -->
            </div>

            <div class="col-lg-3 col-6">
                <!-- Gallery Item Start -->
                <div class="gallery-item wow fadeInUp" data-wow-delay="1.25s">
                    <a href="images/post-5.jpg">
                        <figure class="image-anime">
                            <img src="images/post-5.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- Gallery Item End -->
            </div>

            <div class="col-lg-3 col-6">
                <!-- Gallery Item Start -->
                <div class="gallery-item wow fadeInUp" data-wow-delay="1.5s">
                    <a href="images/post-6.jpg">
                        <figure class="image-anime">
                            <img src="images/post-6.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- Gallery Item End -->
            </div>

            <div class="col-lg-3 col-6">
                <!-- Gallery Item Start -->
                <div class="gallery-item wow fadeInUp" data-wow-delay="1.75s">
                    <a href="images/post-7.jpg">
                        <figure class="image-anime">
                            <img src="images/post-7.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- Gallery Item End -->
            </div>

            <div class="col-lg-3 col-6">
                <!-- Gallery Item Start -->
                <div class="gallery-item wow fadeInUp" data-wow-delay="2s">
                    <a href="images/post-8.jpg">
                        <figure class="image-anime">
                            <img src="images/post-8.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- Gallery Item End -->
            </div>
        </div>
    </div>
</div> --}}
<!-- Gallery Section End -->


<!-- Testimonial Section Start -->
@if(count($testimonial) > 0)
<div class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Testimonial</h3>
                    <h2 class="text-anime">What our Client Says</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- Testimonial Carousel Start -->
                <div class="testimonial-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                        
                            @foreach ($testimonial as $ssd)
                                
                            <div class="swiper-slide">
                                <div class="testimonial-slide">
                                    <div class="testimonial-rating">
                                        <img src="images/icon-rating.svg" alt="">
                                    </div>

                                    <div class="testimonial-content">
                                        <p>{{$ssd->content}}</p>
                                    </div>

                                    <div class="testimonial-author-info">
                                        <h3>- {{$ssd->name}}</h3>
                                    
                                    </div>
                                </div>
                            </div>
                          
                            @endforeach
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- Testimonial Carousel End -->
            </div>
        </div>
    </div>
</div>

@endif

@endsection
