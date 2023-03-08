
@extends('layouts.app')
@section('contents')
<!--== Start Header Area Wrapper ==-->

<!--== End Header Area Wrapper ==-->

<!-- Start Slider Area Wrapper -->
@include('frontend.minimal.slider')
<!-- End Slider Area Wrapper -->
<div class="call-to-action-wrapper layout--2">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-lg-start">
                <div class="call-action-inner d-lg-flex align-items-center justify-content-between">
                    <div class="call-action-inner-left mb-sm-22 mb-md-32 text-center text-lg-start">
                        <h2>Are you looking for First-Class Human Resources Consultant?</h2>
                    </div>
                    <div class="call-action-inner-right btn-group text-center text-lg-end">
                        <a href="{{route('pages', encrypt(5))}}" class="btn btn-bordered">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Service Area Wrapper -->
<section class="service-area-wrapper mt-90 mt-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="service-content-wrapper">
                    <div class="section-header-wrap">
                        <!-- Start Section Title -->
                        <div class="section-title-wrap">
                            <h2>Our Services</h2>
                        </div>
                        <!-- End Section Title -->

                        <!-- Start Service Slider Arrows -->
                        
                        <!-- End Service Slider Arrows -->
                    </div>

                    <!-- Start Service Content Inner -->
                    <div class="service-content-inner">
                        <div class="ht-slick-wrapper">
                            <div class="ht-slick-slider slick-row-30"
                                data-slick='{"slidesToShow": 3, "prevArrow":"#service-prev", "nextArrow":"#service-next", "responsive":[{"breakpoint": 992,"settings":{"slidesToShow": 1}}]}'>
                                <!-- Start Single Service Item -->
                                
                                @forelse ($services as $ss )
                                    
                              
                                <div class="service-item">
                                    <figure class="service-item__thumb">
                                        <a href="{{route('subpages', encrypt($ss->id))}}"><img src="{{asset('images/'.$ss->image)}}"
                                                                            alt="Service"/></a>
                                        <figcaption class="service-item__thumb-hvr">
                                            <a href="{{route('subpages', encrypt($ss->id))}}" class="read-more">Read More</a>
                                            <a href="{{route('subpages', encrypt($ss->id))}}" class="btn-link-icon"><i
                                                    class="fa fa-external-link"></i></a>
                                        </figcaption>
                                    </figure>

                                    <div class="service-item__info">
                                        <h2><a href="{{route('subpages', encrypt($ss->id))}}">{{$ss->name}}</a></h2>
                                        <p>{{substr($ss->title,0,150)}}.</p>
                                        <a href="{{route('subpages', encrypt($ss->id))}}" class="btn-read-more">Read More</a>
                                    </div>
                                </div>
                                <!-- End Single Service Item -->
                                @empty
                                    
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <!-- End Service Content Inner -->
                </div>
            </div>

          
        </div>
    </div>
</section>
<!-- End Service Area Wrapper -->
<section class="testimonial-area-wrapper mt-90 mt-sm-60 bg-img" data-bg="{{asset('images/serice.jpeg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <!-- Start Section Title -->
                <div class="section-title-wrap layout--2 white mb-38">
                    <h4 style="color: #fff">Need any advice on how best NCIC can serve you?</h4>
                </div>
                <!-- End Section Title -->
            </div>
        </div>

        <div class="row">
            <div class="col-12 m-0">
                <div class="testimonial-content-wrap">
                    <div class="ht-slick-wrapper">
                        <div class="ht-slick-slider slick-row-30"
                            data-slick='{"slidesToShow": 1, "dots": false, "autoplay": false, "arrows": false, 
                            "responsive":[{"breakpoint": 768,"settings":{"slidesToShow": 1}}, 
                            {"breakpoint": 992,"settings":{"slidesToShow": 2}}]}'>
                            <!-- Start Single Testimonial Item -->
                            <div class="testimonial-item">
                                <p style="color:#fff; font-size:25px; text-align:center; font-weight:bolder">Do contact us at {{$settings->site_email}} or call {{$settings->site_phone}}</p>
                                
                                 
                                    
                                       <p style="color:#fff; font-size:25px; text-align:center"> <a href="{{route('pages', encrypt(5))}}" class="btn btn-primary">Contact Us </a></p>
                                    
                              
                            </div>
                           
                            <!-- End Single Testimonial Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Start Testimonial Wrapper -->
<section class="testimonial-area-wrapper mt-90 mt-sm-60 bg-img" data-bg="assets/img/testimonial/home1-testi-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <!-- Start Section Title -->
                <div class="section-title-wrap layout--2 white mb-38">
                    <h2>Testimonial</h2>
                </div>
                <!-- End Section Title -->
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="testimonial-content-wrap">
                    <div class="ht-slick-wrapper">
                        <div class="ht-slick-slider slick-row-30"
                            data-slick='{"slidesToShow": 3, "dots": true, "autoplay": true, "arrows": false, "responsive":[{"breakpoint": 768,"settings":{"slidesToShow": 1}}, {"breakpoint": 992,"settings":{"slidesToShow": 2}}]}'>
                            <!-- Start Single Testimonial Item -->
                           
                            @forelse ($testimonials as  $testm)
                            <!-- Start Single Testimonial Item -->
                            <div class="testimonial-item">
                                <div class="testimonial-item__quote">
                                    <p>{{substr($testm->content,0,200)}}</p>
                                </div>
                                <div class="testimonial-item__client">
                                    <figure class="testimonial-item__client__thumb">
                                        <img src="{{asset('images/'.$testm->image)}}" alt="Testimonial"/>
                                    </figure>
                                    <div class="testimonial-item__client__info">
                                        <h4>{{$testm->name}}</h4>
                                    </div>
                                </div>
                            </div>

                            @empty

                            @endforelse
                           
                            <!-- End Single Testimonial Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Wrapper -->

<div class=" p-4">
     

       
</div>

@endsection
