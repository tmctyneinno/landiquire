
@extends('layouts.app')
@section('contents')
<!--== Start Header Area Wrapper ==-->

<!--== End Header Area Wrapper ==-->

<!-- Start Slider Area Wrapper -->
@include('frontend.minimal.slider')
<!-- End Slider Area Wrapper -->

<!-- Start Call to Action Wrapper -->
<div class="call-to-action-wrapper bg-brand">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-lg-start">
                <div class="call-action-inner d-lg-flex align-items-center justify-content-between">
                    <div class="call-action-inner-left mb-sm-22 mb-md-32 text-center text-lg-start">
                        <h2>Looking for a <strong>quality constructor</strong> for your next project?</h2>
                    </div>
                    <div class="call-action-inner-right btn-group text-center text-lg-end">
                        <a href="project.html" class="btn btn-dark">View Our Projects</a>
                        <a href="contact.html" class="btn btn-dark">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Call to Action Wrapper -->

<!-- Start Service Area Wrapper -->
<section class="service-area-wrapper mt-84 mt-sm-54">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 m-auto">
                <!-- Start Section Title -->
                <div class="section-title-wrap layout--2 mb-36">
                    <h2>Our Services</h2>
                </div>
                <!-- End Section Title -->
            </div>
        </div>

        <div class="row mtm-30">
            <div class="col-sm-6 col-lg-4">
                <!-- Start Single Service Item -->
                <div class="service-item service-item--three white-bg">
                    <div class="service-item__icon">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <div class="service-item__info">
                        <h2><a href="service-details.html">Design & Build Package</a></h2>
                        <p>Duis quis dolor fermentum, consequat magna sit amet, dignissim odio. Pellentesque gravida
                            libero id lacus vestibulum commodo.</p>
                    </div>
                </div>
                <!-- End Single Service Item -->
            </div>

            <div class="col-sm-6 col-lg-4">
                <!-- Start Single Service Item -->
                <div class="service-item service-item--three white-bg">
                    <div class="service-item__icon">
                        <i class="fa fa-wrench"></i>
                    </div>

                    <div class="service-item__info">
                        <h2><a href="service-details.html">Building Renovation</a></h2>
                        <p>Duis quis dolor fermentum, consequat magna sit amet, dignissim odio. Pellentesque gravida
                            libero id lacus vestibulum commodo.</p>
                    </div>
                </div>
                <!-- End Single Service Item -->
            </div>

            <div class="col-sm-6 col-lg-4">
                <!-- Start Single Service Item -->
                <div class="service-item service-item--three white-bg">
                    <div class="service-item__icon">
                        <i class="fa fa-clipboard"></i>
                    </div>

                    <div class="service-item__info">
                        <h2><a href="service-details.html">Project Management</a></h2>
                        <p>Duis quis dolor fermentum, consequat magna sit amet, dignissim odio. Pellentesque gravida
                            libero id lacus vestibulum commodo.</p>
                    </div>
                </div>
                <!-- End Single Service Item -->
            </div>

            <div class="col-sm-6 col-lg-4">
                <!-- Start Single Service Item -->
                <div class="service-item service-item--three white-bg">
                    <div class="service-item__icon">
                        <i class="fa fa-paint-brush"></i>
                    </div>

                    <div class="service-item__info">
                        <h2><a href="service-details.html">Consulting</a></h2>
                        <p>Duis quis dolor fermentum, consequat magna sit amet, dignissim odio. Pellentesque gravida
                            libero id lacus vestibulum commodo.</p>
                    </div>
                </div>
                <!-- End Single Service Item -->
            </div>

            <div class="col-sm-6 col-lg-4">
                <!-- Start Single Service Item -->
                <div class="service-item service-item--three white-bg">
                    <div class="service-item__icon">
                        <i class="fa fa-binoculars"></i>
                    </div>

                    <div class="service-item__info">
                        <h2><a href="service-details.html">Preconstruction Services</a></h2>
                        <p>Duis quis dolor fermentum, consequat magna sit amet, dignissim odio. Pellentesque gravida
                            libero id lacus vestibulum commodo.</p>
                    </div>
                </div>
                <!-- End Single Service Item -->
            </div>

            <div class="col-sm-6 col-lg-4">
                <!-- Start Single Service Item -->
                <div class="service-item service-item--three white-bg">
                    <div class="service-item__icon">
                        <i class="fa fa-building-o"></i>
                    </div>

                    <div class="service-item__info">
                        <h2><a href="service-details.html">Design & Build Package</a></h2>
                        <p>Duis quis dolor fermentum, consequat magna sit amet, dignissim odio. Pellentesque gravida
                            libero id lacus vestibulum commodo.</p>
                    </div>
                </div>
                <!-- End Single Service Item -->
            </div>
        </div>
    </div>
</section>
<!-- End Service Area Wrapper -->

<!-- Start Banner Area Wrapper -->
<div class="banner-area-wrapper mt-84 mt-sm-54">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-6">
                <div class="banner-thumbnail">
                    <img src="assets/img/extra/banner-1.png" alt="Banner"/>
                </div>
            </div>

            <div class="col-md-5 ms-auto">
                <div class="banner-text">
                    <h2 class="h3">Looking for A Quality Constructor your next project?</h2>
                    <a href="#" class="btn btn-brand">Gat a Quote</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner Area Wrapper -->

<!-- Start Latest Project Wrapper -->
<section class="latest-project-wrapper mt-80 mt-sm-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 m-auto">
                <!-- Start Section Title -->
                <div class="section-title-wrap layout--2 mb-36">
                    <h2>Our Projects</h2>
                </div>
                <!-- End Section Title -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Latest Project Filter Menu -->
                <div class="project-filter-menu">
                    <ul class="nav justify-content-center">
                        <li data-filter="*" class="active">All</li>
                        <li data-filter=".3d">3D Design</li>
                        <li data-filter=".art">Art</li>
                        <li data-filter=".exterior">Exterior</li>
                        <li data-filter=".interior">Interior</li>
                    </ul>
                </div>
                <!-- Latest Project Filter Menu -->

                <!-- Start Project Content -->
                <div class="project-content-wrap mt-40 mt-sm-30">
                    <div class="row row-10 filter-content project-masonry">
                        <div class="col-sm-6 col-lg-3 interior exterior">
                            <!-- Start Single Project Wrap -->
                            <div class="project-item hvr-dir-item">
                                <figure class="project-item__thumb">
                                    <img src="assets/img/project/project-h1-01.jpg" alt="Project"/>
                                    <figcaption class="project-item__info hvr-dir">
                                        <div class="info-wrap">
                                            <a href="#" class="cate-name">Art</a>
                                            <h3><a href="project-details.html">The Shard In London</a></h3>
                                            <a href="project-details.html" class="btn btn-read-more">Read More</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- End Single Project Wrap -->
                        </div>

                        <div class="col-sm-6 col-lg-6 exterior 3d">
                            <!-- Start Single Project Wrap -->
                            <div class="project-item hvr-dir-item">
                                <figure class="project-item__thumb">
                                    <img src="assets/img/project/project-ft-11.jpg" alt="Project"/>
                                    <figcaption class="project-item__info hvr-dir">
                                        <div class="info-wrap">
                                            <a href="#" class="cate-name">Art</a>
                                            <h3><a href="project-details.html">The Shard In London</a></h3>
                                            <a href="project-details.html" class="btn btn-read-more">Read More</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- End Single Project Wrap -->
                        </div>

                        <div class="col-sm-6 col-lg-3 3d interior art">
                            <!-- Start Single Project Wrap -->
                            <div class="project-item hvr-dir-item">
                                <figure class="project-item__thumb">
                                    <img src="assets/img/project/project-h1-03.jpg" alt="Project"/>
                                    <figcaption class="project-item__info hvr-dir">
                                        <div class="info-wrap">
                                            <a href="#" class="cate-name">Art</a>
                                            <h3><a href="project-details.html">The Shard In London</a></h3>
                                            <a href="project-details.html" class="btn btn-read-more">Read More</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- End Single Project Wrap -->
                        </div>

                        <div class="col-sm-6 col-lg-3 art 3d">
                            <!-- Start Single Project Wrap -->
                            <div class="project-item hvr-dir-item">
                                <figure class="project-item__thumb">
                                    <img src="assets/img/project/project-h1-04.jpg" alt="Project"/>
                                    <figcaption class="project-item__info hvr-dir">
                                        <div class="info-wrap">
                                            <a href="#" class="cate-name">Art</a>
                                            <h3><a href="project-details.html">The Shard In London</a></h3>
                                            <a href="project-details.html" class="btn btn-read-more">Read More</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- End Single Project Wrap -->
                        </div>

                        <div class="col-sm-6 col-lg-3 interior art">
                            <!-- Start Single Project Wrap -->
                            <div class="project-item hvr-dir-item">
                                <figure class="project-item__thumb">
                                    <img src="assets/img/project/project-h1-05.jpg" alt="Project"/>
                                    <figcaption class="project-item__info hvr-dir">
                                        <div class="info-wrap">
                                            <a href="#" class="cate-name">Art</a>
                                            <h3><a href="project-details.html">The Shard In London</a></h3>
                                            <a href="project-details.html" class="btn btn-read-more">Read More</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- End Single Project Wrap -->
                        </div>
                    </div>
                </div>
                <!-- End Project Content -->
            </div>
        </div>
    </div>
</section>
<!-- End Latest Project Wrapper -->

<!-- Start News & Testimonial Area -->
<section class="news-testimonial-area mt-90 mt-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-xl-6">
                <div class="news-content-wrapper mb-md-80 mb-sm-50">
                    <div class="section-header-wrap">
                        <!-- Start Section Title -->
                        <div class="section-title-wrap">
                            <h2>Recent News</h2>
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
                                <div class="news-item hvr-dir-item">
                                    <figure class="news-item__thumb">
                                        <a href="#"><img src="assets/img/news/post-01.jpg" alt="Post"/></a>
                                        <figcaption class="news-item__thumb-hvr hvr-dir">
                                            <a href="assets/img/news/post-big-01.jpg" class="btn-zoom btn-popup-img"><i
                                                    class="fa fa-search-plus"></i></a>
                                        </figcaption>
                                    </figure>

                                    <div class="news-item__info">
                                        <h2><a href="blog-details.html">Rethinking “Bankability” Africa’s</a></h2>
                                        <div class="post-meta">
                                            <a href="#" class="post-date"><i class="fa fa-clock-o"></i> July 6, 2016</a>
                                        </div>
                                        <p>Africa’s economic growth during the last decade has remained relatively
                                            robust</p>
                                        <a href="#" class="btn btn-brand">Read More</a>
                                    </div>
                                </div>
                                <!-- End Single News Item -->

                                <!-- Start Single News Item -->
                                <div class="news-item hvr-dir-item">
                                    <figure class="news-item__thumb">
                                        <a href="#"><img src="assets/img/news/post-02.jpg" alt="Post"/></a>
                                        <figcaption class="news-item__thumb-hvr hvr-dir">
                                            <a href="assets/img/news/post-big-02.jpg" class="btn-zoom btn-popup-img"><i
                                                    class="fa fa-search-plus"></i></a>
                                        </figcaption>
                                    </figure>

                                    <div class="news-item__info">
                                        <h2><a href="blog-details.html">Smart City Sensor Networks.</a></h2>
                                        <div class="post-meta">
                                            <a href="#" class="post-date"><i class="fa fa-clock-o"></i> July 6, 2016</a>
                                        </div>
                                        <p>Africa’s economic growth during the last decade has remained relatively
                                            robust</p>
                                        <a href="#" class="btn btn-brand">Read More</a>
                                    </div>
                                </div>
                                <!-- End Single News Item -->

                                <!-- Start Single News Item -->
                                <div class="news-item hvr-dir-item">
                                    <figure class="news-item__thumb">
                                        <a href="#"><img src="assets/img/news/post-03.jpg" alt="Post"/></a>
                                        <figcaption class="news-item__thumb-hvr hvr-dir">
                                            <a href="assets/img/news/post-big-03.jpg" class="btn-zoom btn-popup-img"><i
                                                    class="fa fa-search-plus"></i></a>
                                        </figcaption>
                                    </figure>

                                    <div class="news-item__info">
                                        <h2><a href="blog-details.html">What Is a remained Resilient?</a></h2>
                                        <div class="post-meta">
                                            <a href="#" class="post-date"><i class="fa fa-clock-o"></i> July 6, 2016</a>
                                        </div>
                                        <p>Africa’s economic growth during the last decade has remained relatively
                                            robust</p>
                                        <a href="#" class="btn btn-brand">Read More</a>
                                    </div>
                                </div>
                                <!-- End Single News Item -->
                            </div>
                        </div>
                    </div>
                    <!-- End Recent News Content -->
                </div>
            </div>

            <div class="col-lg-5 col-xl-6">
                <div class="section-title-wrap mb-38">
                    <h2>Testimonial</h2>
                </div>

                <div class="testimonial-content-wrap">
                    <div class="ht-slick-slider" data-slick='{"slidesToShow": 1, "autoplay": true, "arrows": false}'>
                        <!-- Start Single Testimonial Item -->
                        <div class="testimonial-item testimonial-item--3">
                            <div class="testimonial-item__quote">
                                <p>“I’m completely amazed. I got this theme set up and running in no time. The
                                    design quality is amazing.”</p>
                            </div>
                            <div class="testimonial-item__client">
                                <figure class="testimonial-item__client__thumb">
                                    <img src="assets/img/testimonial/testi-01.jpg" alt="Testimonial"/>
                                </figure>
                                <div class="testimonial-item__client__info">
                                    <h4>Mr. Frank <span class="client-title">Worker of HasTech</span></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial Item -->

                        <!-- Start Single Testimonial Item -->
                        <div class="testimonial-item testimonial-item--3">
                            <div class="testimonial-item__quote">
                                <p>“I’m completely amazed. I got this theme set up and running in no time. The
                                    design quality is amazing.”</p>
                            </div>
                            <div class="testimonial-item__client">
                                <figure class="testimonial-item__client__thumb">
                                    <img src="assets/img/testimonial/testi-02.jpg" alt="Testimonial"/>
                                </figure>
                                <div class="testimonial-item__client__info">
                                    <h4>Mr. David <span class="client-title">Worker of BootXperts</span></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial Item -->

                        <!-- Start Single Testimonial Item -->
                        <div class="testimonial-item testimonial-item--3">
                            <div class="testimonial-item__quote">
                                <p>“I’m completely amazed. I got this theme set up and running in no time. The
                                    design quality is amazing.”</p>
                            </div>
                            <div class="testimonial-item__client">
                                <figure class="testimonial-item__client__thumb">
                                    <img src="assets/img/testimonial/testi-03.jpg" alt="Testimonial"/>
                                </figure>
                                <div class="testimonial-item__client__info">
                                    <h4>Mr. John <span class="client-title">Worker of HasTheme</span></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial Item -->
                    </div>
                </div>

                <div class="counter-up-area mt-60">
                    <div class="counter-up-inner">
                        <div class="counter-item">
                            <div class="counter-item__icon">
                                <i class="fa fa-bank"></i>
                            </div>
                            <div class="counter-item__info">
                                <span class="counter-no">1000</span>
                                <h2 class="counter-title">Project Done</h2>
                            </div>
                        </div>

                        <div class="counter-item">
                            <div class="counter-item__icon">
                                <i class="fa fa-user-circle-o"></i>
                            </div>
                            <div class="counter-item__info">
                                <span class="counter-no">99</span>
                                <h2 class="counter-title">Workers Employed</h2>
                            </div>
                        </div>

                        <div class="counter-item">
                            <div class="counter-item__icon">
                                <i class="fa fa-trophy"></i>
                            </div>
                            <div class="counter-item__info">
                                <span class="counter-no">111</span>
                                <h2 class="counter-title">Awards Won</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End View & Testimonial Area -->

<!-- Start Our Client Area -->
<section class="our-client-wrapper mt-90 mt-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-wrap mb-44 mb-sm-30">
                    <!-- Start Section Title -->
                    <div class="section-title-wrap">
                        <h2>Our Clients</h2>
                    </div>
                    <!-- End Section Title -->

                    <!-- Start News Slider Arrows -->
                    <div class="ht-slick-arrows ht-slick-arrows--two">
                        <button id="client-prev"><i class="fa fa-angle-left"></i></button>
                        <button id="client-next"><i class="fa fa-angle-right"></i></button>
                    </div>
                    <!-- End News Slider Arrows -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Start Our Clients Content -->
                <div class="our-client-content">
                    <div class="ht-slick-slider slick-row-20"
                         data-slick='{"slidesToShow": 6, "autoplay": true, "prevArrow":"#client-prev", "nextArrow":"#client-next", "responsive":[{"breakpoint": 481,"settings":{"slidesToShow": 2}}, {"breakpoint": 801,"settings":{"slidesToShow": 3}}, {"breakpoint": 992,"settings":{"slidesToShow": 4}}]}'>
                        <!-- Start Single Client Logo Item -->
                        <div class="client-item">
                            <a href="#"><img src="assets/img/brand-logo/01.png" alt="Brand Logo"/></a>
                        </div>
                        <!-- End Single Client Logo Item -->

                        <!-- Start Single Client Logo Item -->
                        <div class="client-item">
                            <a href="#"><img src="assets/img/brand-logo/02.png" alt="Brand Logo"/></a>
                        </div>
                        <!-- End Single Client Logo Item -->

                        <!-- Start Single Client Logo Item -->
                        <div class="client-item">
                            <a href="#"><img src="assets/img/brand-logo/03.png" alt="Brand Logo"/></a>
                        </div>
                        <!-- End Single Client Logo Item -->

                        <!-- Start Single Client Logo Item -->
                        <div class="client-item">
                            <a href="#"><img src="assets/img/brand-logo/04.png" alt="Brand Logo"/></a>
                        </div>
                        <!-- End Single Client Logo Item -->

                        <!-- Start Single Client Logo Item -->
                        <div class="client-item">
                            <a href="#"><img src="assets/img/brand-logo/05.png" alt="Brand Logo"/></a>
                        </div>
                        <!-- End Single Client Logo Item -->

                        <!-- Start Single Client Logo Item -->
                        <div class="client-item">
                            <a href="#"><img src="assets/img/brand-logo/06.png" alt="Brand Logo"/></a>
                        </div>
                        <!-- End Single Client Logo Item -->

                        <!-- Start Single Client Logo Item -->
                        <div class="client-item">
                            <a href="#"><img src="assets/img/brand-logo/01.png" alt="Brand Logo"/></a>
                        </div>
                        <!-- End Single Client Logo Item -->

                        <!-- Start Single Client Logo Item -->
                        <div class="client-item">
                            <a href="#"><img src="assets/img/brand-logo/02.png" alt="Brand Logo"/></a>
                        </div>
                        <!-- End Single Client Logo Item -->
                    </div>
                </div>
                <!-- End Our Clients Content -->
            </div>
        </div>
    </div>
</section>
<!-- End Our Client Area -->

@endsection
