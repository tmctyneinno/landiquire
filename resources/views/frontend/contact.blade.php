@extends('layouts.app')
@section('contents')
   
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header-box">
                    <h2 class="text-anime" style="color:#fff">Reach Out to Us</h2>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                            <li class="breadcrumb-item active" aria-current="page">
                                Get in touch with us toda</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Contact Us</h3>
                    {{-- <h2 class="text-anime">Contact Details</h2> --}}
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <!-- Contact Detail Item Start -->
                <div class="contact-detail-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <img src="{{asset('/assets/images/icon-address.svg')}}" alt="">
                    </div>

                    <h3>Address</h3>
                    <p>{{$settings->address}}</p>
                </div>
                <!-- Contact Detail Item End -->
            </div>

            <div class="col-md-4">
                <!-- Contact Detail Item Start -->
                <div class="contact-detail-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="icon-box">
                        <img src="{{asset('/assets/images/icon-contactno.svg')}}" alt="">
                    </div>

                    <h3>Phone</h3>
                    <p>{{$settings->site_phone}}</p>
                </div>
                <!-- Contact Detail Item End -->
            </div>

            <div class="col-md-4">
                <!-- Contact Detail Item Start -->
                <div class="contact-detail-item wow fadeInUp" data-wow-delay="0.75s">
                    <div class="icon-box">
                        <img src="images/icon-email-address.svg" alt="">
                    </div>

                    <h3>Email</h3>
                    <p>{{$settings->site_email}}</p>
                </div>
                <!-- Contact Detail Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Contact Details Section End -->

<!-- Contact Form Section Start -->
<div class="contact-inquiry-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Get in Touch</h3>
                    <h5 class="text-anime">Please fill out the form and you will be contacted soon</h5>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            
            <div class="col-lg-8 offset-lg-2">
                @if(Session::has('message'))
            <span class="alert alert-{{Session::get('alert')}}"> {{Session::get('message')}}</span>
            @endif
                <!-- Contact Form start -->
                <div class="contact-form wow fadeInUp" data-wow-delay="0.75s">
                    <form id="" action="{{route('contact-email')}}"method="POST" data-toggle="validator">
                        @csrf 
                        <div class="row">
                            <div class="form-group col-md-6 mb-4">
                                <input type="text" value="{{old('name')}}" name="name" class="form-control" placeholder="Your Name*" required/>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input type="text" value="{{old('phone')}}" name="phone"class="form-control" placeholder="Your Phone*" required/>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-12 mb-4">
                                <input type="email" value="{{old('email')}}" name="email" class="form-control" placeholder="Your Email*"
                                                       required/>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-12 mb-4">
                                <textarea name="message" id="con_message" cols="30" rows="8"
                                placeholder="Write your Message*" class="form-control" required>{{old('message')}}</textarea>
                                <div class="help-block with-errors"></div>
                            </div>


                            <div class="form-group col-md-12 mb-4">
                                <p> @php echo captcha_img() @endphp </p>
                                <input type="text" placeholder="Enter captcha" class="form-control"  name="captcha" required>
                                
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn-default">Submit Now</button>
                                <div id="msgSubmit" class="h3 text-left hidden"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Contact Form end -->
            </div>
        </div>
    </div>
</div>

{{-- <div class="google-location-map">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="wow fadeInUp">Google Map</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="google-map-box wow fadeInUp" data-wow-delay="0.5s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1116357.3481785401!2d-95.54669749945178!3d39.389498766353576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1707738120250!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Google Map Section End -->
@endsection
