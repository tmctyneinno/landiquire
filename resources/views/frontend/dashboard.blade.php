
@extends('layouts.app')
@section('contents')
<!--== Start Header Area Wrapper ==-->

<!--== End Header Area Wrapper ==-->

<!-- Start Slider Area Wrapper -->
@include('frontend.minimal.slider')
<!-- End Slider Area Wrapper -->

<!-- Start Service Area Wrapper -->
<section class="service-area-wrapper mt-90 mt-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-8">
                <div class="service-content-wrapper">
                    <div class="section-header-wrap">
                        <!-- Start Section Title -->
                        <div class="section-title-wrap">
                            <h2>Our Services</h2>
                        </div>
                        <!-- End Section Title -->

                        <!-- Start Service Slider Arrows -->
                        <div class="ht-slick-arrows">
                            <button id="service-prev"><i class="fa fa-angle-left"></i></button>
                            <button id="service-next"><i class="fa fa-angle-right"></i></button>
                        </div>
                        <!-- End Service Slider Arrows -->
                    </div>

                    <!-- Start Service Content Inner -->
                    <div class="service-content-inner">
                        <div class="ht-slick-wrapper">
                            <div class="ht-slick-slider slick-row-30"
                                data-slick='{"slidesToShow": 2, "prevArrow":"#service-prev", "nextArrow":"#service-next", "responsive":[{"breakpoint": 992,"settings":{"slidesToShow": 1}}]}'>
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
                                        <p>{{$ss->title}}.</p>
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

            <div class="col-md-6 col-lg-4">
                <!-- Start Leave a Message Area -->
                <div class="leave-message-area-wrapper mt-sm-40">
                    <div class="section-title-wrap mb-34">
                        <h2 class="mb-16">Leave A Message</h2>
                        <p>Get in Touch</p>
                    </div>

                    <!-- Start Massage Form -->
                    <div class="leave-message-form">
                        <form action="#">
                            <div class="leave-message-form__inner">
                                <div class="leave-message-form__inner__item">
                                    <input type="text" placeholder="Your Name" required/>
                                </div>
                                <div class="leave-message-form__inner__item">
                                    <input type="email" placeholder="Your Email" required/>
                                </div>
                                <div class="leave-message-form__inner__item">
                                    <textarea rows="4" cols="10" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="leave-message-form__inner__item">
                                    <button class="btn btn-brand">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Massage Form -->
                </div>
                <!-- End Leave a Message Area -->
            </div>
        </div>
    </div>
</section>
<!-- End Service Area Wrapper -->


<!-- Start About Area Wrapper -->
<section class="about-area-wrapper mt-90 mt-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <figure class="about-thumbnail-area">
                    <img src="assets/img/extra/about-1.jpg" alt="About"/>
                </figure>
            </div>

            <div class="col-lg-6">
                <div class="about-content-wrap mt-md-36 mt-sm-36">
                    <div class="section-title-wrap">
                        <h2>Who We Are?</h2>
                    </div>

                    <div class="about-text mt-10 mt-sm-0">
                        <p>Our technical safety engineers with extensive backgrounds and knowledge in process engineering, loss control, prevention and HSE Technologies</p>
                        <a href="#" class="btn btn-read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area Wrapper -->

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

<!-- Start Recent News & Why Choose Area -->
<section class="news-why-choose-area mt-90 mt-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-xl-6">
                <div class="news-content-wrapper">
                    <div class="section-header-wrap">
                        <!-- Start Section Title -->
                        <div class="section-title-wrap">
                            <h2>Recent Blogs</h2>
                        </div>
                        <!-- End Section Title -->

                        <!-- Start News Slider Arrows -->
                        <div class="ht-slick-arrows">
                            <button id="news-prev"><i class="fa fa-angle-left"></i></button>
                            <button id="news-next"><i class="fa fa-angle-right"></i></button>
                        </div>
                        <!-- End News Slider Arrows -->
                    </div>

                    <!-- Start Recent News Content -->
                    <div class="news-content-inner mt-30">
                        <div class="ht-slick-wrapper">
                            <div class="ht-slick-slider slick-row-30"
                                data-slick='{"slidesToShow": 2, "prevArrow":"#news-prev", "nextArrow":"#news-next", "responsive":[{"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                                <!-- Start Single News Item -->
                                
                                @forelse ($blogs as $blog )
                               
                                <div class="news-item hvr-dir-item">
                                    <figure class="news-item__thumb">
                                        <a href="#"><img src="{{asset('images/'.$blog->image)}}" alt="Post"/></a>
                                        <figcaption class="news-item__thumb-hvr hvr-dir">
                                            <a href="{{asset('images/'.$blog->image)}}" class="btn-zoom btn-popup-img"><i
                                                    class="fa fa-search-plus"></i></a>
                                        </figcaption>
                                    </figure>

                                    <div class="news-item__info">
                                        <h2><a href="blog-details.html">{{$blog->title}}</a></h2>
                                        <div class="post-meta">
                                            <a href="#" class="post-date"><i class="fa fa-clock-o"></i> {{$blog->created_at->format('d/m/y')}}</a>
                                        </div>
                                        <p>{!! substr($blog->contents, 0, 200) !!}</p>
                                        <a href="{{route('blog.details', encrypt($blog->id))}}" class="btn btn-brand">Read More</a>
                                    </div>
                                </div>    
                                @empty
                                    
                                @endforelse
                                <!-- End Single News Item -->

                                
                                <!-- End Single News Item -->
                            </div>
                        </div>
                    </div>
                    <!-- End Recent News Content -->
                </div>
            </div>

            <div class="col-lg-5 col-xl-6">
                <!-- Start Why Choose Content -->
                <div class="why-choose-content-wrap mt-md-84 mt-sm-52">
                    <div class="section-title-wrap mb-34">
                        <h2 class="mb-2">Industries Serviced
                        </h2>
                    </div>

                    <div class="why-choose-content-inner">
                        <div class="accordion" id="chooseAccordion">
                           
                            <!-- End Why choose Us Item -->

                            <!-- Start Why choose Us Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Effortless customization
                                    </button>
                                </h2>
                               
                            </div>
                            <!-- End Why choose Us Item -->

                            <!-- Start Why choose Us Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Powerful Shortcodes
                                    </button>
                                </h2>   
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Powerful Shortcodes
                                    </button>
                                </h2>   
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Powerful Shortcodes
                                    </button>
                                </h2>   
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Powerful Shortcodes
                                    </button>
                                </h2>   
                            </div>
                            <!-- End Why choose Us Item -->

                        </div>
                    </div>
                </div>
                <!-- End Why Choose Content -->
            </div>
        </div>
    </div>
</section>

@endsection
