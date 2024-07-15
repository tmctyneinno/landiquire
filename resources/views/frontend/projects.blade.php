@extends('layouts.app')
@section('contents')
<div class="page-header parallaxie" style="background-image:url({{asset('images/'.$developer->first()?->image)}})">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header-box">
                    <h2 class="text-anime" style="color:#fff">For Developers</h2>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">/Developer Registration</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>	

<!-- Property Listing Page Start -->
<div class="page-property-listing">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Property Listings Start -->
                <div class="property-listings">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Property Item Start -->
                            <div class="property-item wow fadeInUp" data-wow-delay="0.25s">
                                <!-- Property Item Header Start -->
                                <div class="property-header">
                                    <figure class="image-anime">
                                        <img src="images/property-1.jpg" alt="">
                                    </figure>

                                    <span class="property-label">Rent</span>
                                </div>
                                <!-- Property Item Header End -->

                                <!-- Property Item Body Start -->
                                <div class="property-body">
                                    <h3>Cedar Ridge Estates</h3>
                                    <p>New York City, CA, USA</p>

                                    <div class="property-meta">
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-badroom.svg" alt="">
                                            </div>

                                            <span>6 Bedsroom</span>
                                        </div>

                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-bathroom.svg" alt="">
                                            </div>

                                            <span>3 Bathrooms</span>
                                        </div>

                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-area.svg" alt="">
                                            </div>

                                            <span>720 sq ft</span>
                                        </div>

                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-garage.svg" alt="">
                                            </div>

                                            <span>1 Garages</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Property Item Body End -->

                                <!-- Property Item Footer Start -->
                                <div class="property-footer">
                                    <p class="property-price">$150,000</p>
                                    <a href="#" class="btn-default">View Property</a>
                                </div>
                                <!-- Property Item Footer Start -->
                            </div>
                            <!-- Property Item End -->
                        </div>

                        <div class="col-md-6">
                            <!-- Property Item Start -->
                            <div class="property-item wow fadeInUp" data-wow-delay="0.5s">
                                <!-- Property Item Header Start -->
                                <div class="property-header">
                                    <figure class="image-anime">
                                        <img src="images/property-2.jpg" alt="">
                                    </figure>

                                    <span class="property-label">Rent</span>
                                </div>
                                <!-- Property Item Header End -->

                                <!-- Property Item Body Start -->
                                <div class="property-body">
                                    <h3>Willow Creek Manor</h3>
                                    <p>New York City, CA, USA</p>

                                    <div class="property-meta">
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-badroom.svg" alt="">
                                            </div>

                                            <span>6 Bedsroom</span>
                                        </div>

                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-bathroom.svg" alt="">
                                            </div>

                                            <span>3 Bathrooms</span>
                                        </div>

                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-area.svg" alt="">
                                            </div>

                                            <span>720 sq ft</span>
                                        </div>

                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-garage.svg" alt="">
                                            </div>

                                            <span>1 Garages</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Property Item Body End -->

                                <!-- Property Item Footer Start -->
                                <div class="property-footer">
                                    <p class="property-price">$150,000</p>
                                    <a href="#" class="btn-default">View Property</a>
                                </div>
                                <!-- Property Item Footer Start -->
                            </div>
                            <!-- Property Item End -->
                        </div>

                        <div class="col-md-6">
                            <!-- Property Item Start -->
                            <div class="property-item wow fadeInUp" data-wow-delay="0.75s">
                                <!-- Property Item Header Start -->
                                <div class="property-header">
                                    <figure class="image-anime">
                                        <img src="images/property-3.jpg" alt="">
                                    </figure>

                                    <span class="property-label">Rent</span>
                                </div>
                                <!-- Property Item Header End -->

                                <!-- Property Item Body Start -->
                                <div class="property-body">
                                    <h3>Sunset View Apartments</h3>
                                    <p>New York City, CA, USA</p>

                                    <div class="property-meta">
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-badroom.svg" alt="">
                                            </div>

                                            <span>6 Bedsroom</span>
                                        </div>

                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-bathroom.svg" alt="">
                                            </div>

                                            <span>3 Bathrooms</span>
                                        </div>

                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-area.svg" alt="">
                                            </div>

                                            <span>720 sq ft</span>
                                        </div>

                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-garage.svg" alt="">
                                            </div>

                                            <span>1 Garages</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Property Item Body End -->

                                <!-- Property Item Footer Start -->
                                <div class="property-footer">
                                    <p class="property-price">$150,000</p>
                                    <a href="#" class="btn-default">View Property</a>
                                </div>
                                <!-- Property Item Footer Start -->
                            </div>
                            <!-- Property Item End -->
                        </div>

                        <div class="col-md-6">
                            <!-- Property Item Start -->
                            <div class="property-item wow fadeInUp" data-wow-delay="1s">
                                <!-- Property Item Header Start -->
                                <div class="property-header">
                                    <figure class="image-anime">
                                        <img src="images/property-4.jpg" alt="">
                                    </figure>

                                    <span class="property-label">Rent</span>
                                </div>
                                <!-- Property Item Header End -->

                                <!-- Property Item Body Start -->
                                <div class="property-body">
                                    <h3>Riverwalk Residences</h3>
                                    <p>New York City, CA, USA</p>

                                    <div class="property-meta">
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-badroom.svg" alt="">
                                            </div>

                                            <span>6 Bedsroom</span>
                                        </div>

                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-bathroom.svg" alt="">
                                            </div>

                                            <span>3 Bathrooms</span>
                                        </div>

                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-area.svg" alt="">
                                            </div>

                                            <span>720 sq ft</span>
                                        </div>

                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-garage.svg" alt="">
                                            </div>

                                            <span>1 Garages</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Property Item Body End -->

                                <!-- Property Item Footer Start -->
                                <div class="property-footer">
                                    <p class="property-price">$150,000</p>
                                    <a href="#" class="btn-default">View Property</a>
                                </div>
                                <!-- Property Item Footer Start -->
                            </div>
                            <!-- Property Item End -->
                        </div>

                        <div class="col-md-6">
                            <!-- Property Item Start -->
                            <div class="property-item wow fadeInUp" data-wow-delay="1.25s">
                                <!-- Property Item Header Start -->
                                <div class="property-header">
                                    <figure class="image-anime">
                                        <img src="images/property-5.jpg" alt="">
                                    </figure>

                                    <span class="property-label">Rent</span>
                                </div>
                                <!-- Property Item Header End -->

                                <!-- Property Item Body Start -->
                                <div class="property-body">
                                    <h3>Mountain View Condos</h3>
                                    <p>New York City, CA, USA</p>

                                    <div class="property-meta">
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-badroom.svg" alt="">
                                            </div>

                                            <span>6 Bedsroom</span>
                                        </div>

                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-bathroom.svg" alt="">
                                            </div>

                                            <span>3 Bathrooms</span>
                                        </div>

                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-area.svg" alt="">
                                            </div>

                                            <span>720 sq ft</span>
                                        </div>

                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-garage.svg" alt="">
                                            </div>

                                            <span>1 Garages</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Property Item Body End -->

                                <!-- Property Item Footer Start -->
                                <div class="property-footer">
                                    <p class="property-price">$150,000</p>
                                    <a href="#" class="btn-default">View Property</a>
                                </div>
                                <!-- Property Item Footer Start -->
                            </div>
                            <!-- Property Item End -->
                        </div>

                        <div class="col-md-6">
                            <!-- Property Item Start -->
                            <div class="property-item wow fadeInUp" data-wow-delay="1.5s">
                                <!-- Property Item Header Start -->
                                <div class="property-header">
                                    <figure class="image-anime">
                                        <img src="images/property-6.jpg" alt="">
                                    </figure>

                                    <span class="property-label">Rent</span>
                                </div>
                                <!-- Property Item Header End -->

                                <!-- Property Item Body Start -->
                                <div class="property-body">
                                    <h3>Beachfront Bungalows</h3>
                                    <p>New York City, CA, USA</p>

                                    <div class="property-meta">
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-badroom.svg" alt="">
                                            </div>

                                            <span>6 Bedsroom</span>
                                        </div>

                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-bathroom.svg" alt="">
                                            </div>

                                            <span>3 Bathrooms</span>
                                        </div>

                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-area.svg" alt="">
                                            </div>

                                            <span>720 sq ft</span>
                                        </div>

                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="images/icon-garage.svg" alt="">
                                            </div>

                                            <span>1 Garages</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Property Item Body End -->

                                <!-- Property Item Footer Start -->
                                <div class="property-footer">
                                    <p class="property-price">$150,000</p>
                                    <a href="#" class="btn-default">View Property</a>
                                </div>
                                <!-- Property Item Footer Start -->
                            </div>
                            <!-- Property Item End -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <!-- Post Pagination Start -->
                            <div class="post-pagination wow fadeInUp" data-wow-delay="1.5s">
                                <ul class="pagination">
                                    <li><a href="#"><i class="fa-solid fa-arrow-left-long"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa-solid fa-arrow-right-long"></i></a></li>
                                </ul>
                            </div>
                            <!-- Post Pagination End -->
                        </div>
                    </div>

                </div>
                <!-- Property Listings End -->
            </div>

            <div class="col-lg-4">
                <!-- Property Sidebar Start -->
                <div class="property-sidebar">
                    <!-- Property Category Box Start -->
                    <div class="property-category-box wow fadeInUp" data-wow-delay="0.25s">
                        <h3>Categories</h3>

                        <ul>
                            <li><a href="#">Houses</a></li>
                            <li><a href="#">Apartments</a></li>
                            <li><a href="#">Office</a></li>
                            <li><a href="#">Townhome</a></li>
                            <li><a href="#">Bungalow</a></li>
                        </ul>
                    </div>
                    <!-- Property Category Box End -->

                    <!-- Need Help Box Start -->
                    <div class="need-help-box wow fadeInUp" data-wow-delay="0.5s">
                        <div class="need-help-img">
                            <figure>
                                <img src="images/need-help-bg.jpg" alt="">
                            </figure>

                            <div class="need-help-content">
                                <h3>Need Help?<br> Talk to Our Expert.</h3>
                                <a href="#" class="btn-default"><i class="fa-solid fa-phone-volume"></i> +123 456 789</a>
                            </div>
                        </div>
                    </div>
                    <!-- Need Help Box End -->
                </div>
                <!-- Property Sidebar End -->
            </div>
        </div>
    </div>
</div>
@endsection