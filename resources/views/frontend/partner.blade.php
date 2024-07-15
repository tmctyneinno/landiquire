@extends('layouts.app')
@section('contents')
   
<div class="page-header parallaxie" style="background-image:url({{asset('images/'.$parners->first()?->image)}})">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header-box">
                    <h2 class="text-anime" style="color:#fff">For Partners</h2>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">/ Partner Registration</li>
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
        
            @forelse($parners as $partner)
            @if($partner->floats == "right")
            <div class="col-lg-6"  >
                <!-- About Left Image Start -->
                <div class="about-images ">
                    <div class="about-video">
                        <figure class="reveal image-anime">
                            <img src="{{asset('images/'.$partner->image)}}" alt="">
                        </figure>

                   
                    </div>

                    <div class="about-image">
                        <figure class="reveal image-anime">
                            <img src="{{asset('images/'.$partner->image)}}" alt="">
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
                        <h3 class="wow fadeInUp"> {{$partner->title}}</h3>
                        <h2 class="text-anime">{{$partner->title}}</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Content Body Start -->
                    <div class="about-content-body">
                        <p class="wow fadeInUp" data-wow-delay="0.5s">{!! $partner->content !!}</p>
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
                        <h3 class="wow fadeInUp"> {{$partner->title}}</h3>
                        <h2 class="text-anime">{{$partner->title}}</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Content Body Start -->
                    <div class="about-content-body">
                        <p class="wow fadeInUp" data-wow-delay="0.5s">{!! $partner->content !!}</p>
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
                            <img src="{{asset('images/'.$partner->image)}}" alt="">
                        </figure>

                   
                    </div>

                    <div class="about-image">
                        <figure class="reveal image-anime">
                            <img src="{{asset('images/'.$partner->image)}}" alt="">
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

<div class="contact-inquiry-box">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="section-title">
                    <h3 class="wow fadeInUp">Register with us as a Partner</h3>
                    <h5 class="text-anime">Please fill out the form and you will be contacted soon</h5>
                </div>
            </div>
            <div class="col-lg-8 " data-wow-delay="0.75s">
                @if(Session::has('message'))
            <span class="btn btn-{{Session::get('alert')}}"> {{Session::get('message')}}</span>
            @endif
                <!-- Contact Form start -->
                <div class="contact-form wow fadeInUp" data-wow-delay="0.75s">
                    <form id="" action="{{route('users.partners.store')}}"method="POST" data-toggle="validator" enctype="multipart/form-data">
                        @csrf 
                        <div class="row">
                            <div class="form-group col-md-6 mb-4">
                                <input type="text" value="{{old('name')}}" name="name" class="form-control @error('name') is-invalid @enderror " placeholder="Your Name*" required/>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input type="text" value="{{old('phone')}}" name="phone"class="form-control @error('phone') is-invalid @enderror" placeholder="Your Phone*" required/>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-12 mb-4">
                                <input type="email" value="{{old('email')}}" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Your Email*"
                                                       required/>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-12 mb-4">
                                Attach company profile
                                <input type="file" value="{{old('company_profile')}}" name="company_profile" class="form-control @error('company_profile') is-invalid @enderror" placeholder="*"
                                                       required/>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-md-12 mb-4">
                                Attach letter of intent
                                <input type="file" value="{{old('intent_document')}}" name="intent_document" class="form-control @error('intent_document') is-invalid @enderror" placeholder="*"
                                                       required/>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-md-12 mb-4">
                                Attach property details
                                <input type="file" value="{{old('property_document')}}" name="property_document" class="form-control @error('property_document') is-invalid @enderror" placeholder="*"
                                                       required/>
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



@endsection
