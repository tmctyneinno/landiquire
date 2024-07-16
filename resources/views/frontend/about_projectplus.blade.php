@extends('layouts.app')
@section('contents')
   
<div class="page-header parallaxie" style="background-image:url({{asset('images/'.$projectplus->first()?->image)}})">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header-box">
                    <h2 class="text-anime" style="color:#fff">About Project Plus</h2>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">/</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-us">
    <div class="container">
        <div class="row align-items-center">
        
            @forelse($projectplus as $projectplus)
            @if($projectplus->floats == "right")
            <div class="col-lg-6"  >
                <!-- About Left Image Start -->
                <div class="about-images ">
                    <div class="about-video">
                        <figure class="reveal image-anime">
                            <img src="{{asset('assets/'.$settings->logo)}}" alt="" style="width: 150px">
                            {{-- <img src="{{asset('images/'.$projectplus->image)}}" alt=""> --}}
                        </figure>

                   
                    </div>

                    <div class="about-image">
                        <figure class="reveal image-anime">
                            <img src="{{asset('images/'.$projectplus->image)}}" alt="">
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
                        <h3 class="wow fadeInUp"> {{$projectplus->title}}</h3>
                        <h2 class="text-anime">{{$projectplus->title}}</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Content Body Start -->
                    <div class="about-content-body">
                        <p class="wow fadeInUp" data-wow-delay="0.5s">{!! $projectplus->content !!}</p>
                    </div>
                    <!-- About Content Body End -->

                </div>
                <!-- About Content End -->
            </div>
            @else 
            <div class="col-lg-6">
                <!-- About Content Start -->
                <div class="about-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp"> {{$projectplus->title}}</h3>
                        <h2 class="text-anime">{{$projectplus->title}}</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Content Body Start -->
                    <div class="about-content-body">
                        <p class="wow fadeInUp" data-wow-delay="0.5s">{!! $projectplus->content !!}</p>
                    </div>
                    <!-- About Content Body End -->

                </div>
                <!-- About Content End -->
            </div>
            <div class="col-lg-6"  >
                <!-- About Left Image Start -->
                <div class="about-images ">
                    <div class="about-video">
                        <figure class="reveal image-anime">
                            <img src="{{asset('images/'.$projectplus->image)}}" alt="">
                        </figure>

                   
                    </div>

                    <div class="about-image">
                        <figure class="reveal image-anime">
                            <img src="{{asset('images/'.$projectplus->image)}}" alt="">
                        </figure>
                    </div>
                </div>
                <!-- About Left Image End -->
            </div>
            @endif
            @empty 
            @endforelse
        </div>
    </div>
</div>


@endsection
