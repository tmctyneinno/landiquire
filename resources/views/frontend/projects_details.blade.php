@extends('layouts.app')

@section('contents')


<div class="page-header parallaxie" style="background-image:url({{asset('images/'.$project?->image)}})">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header-box">
                    <h2 class="text-anime" style="color:#fff">{{$project->title}}</h2>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">/ Project details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

	
	<!-- Property Sinlge Page Start -->
	<div class="page-property-single">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<!-- Property Single Content Start -->
					<div class="property-single-content">
						<!-- Property Photos Slider Start -->
						<div class="property-photos-slider wow fadeInUp" data-wow-delay="0.25s">
							<div class="swiper">
								<div class="swiper-wrapper">
									@php 
									$images = json_decode($project->gallery)
									@endphp
									@if($images)
									@foreach($images as $image)
									<div class="swiper-slide">
										<div class="property-photo-item">
											<figure class="image-anime">
												<img src="{{asset('images/'.$image)}}" alt="">
											</figure>
										</div>
									</div>
									@endforeach
									@endif
									
								</div>
								
								<!-- If we need navigation buttons -->
								{{-- <div class="swiper-arrow-prev"><i class="fa-solid fa-arrow-left"></i></div>
								<div class="swiper-arrow-next"><i class="fa-solid fa-arrow-right"></i></div> --}}
							  </div>
						</div>
						<div class="about-property wow fadeInUp" data-wow-delay="0.75s">

							<div class="about-property-content">
								<p>{!! $project->content !!}</p>

							
							</div>
						</div>
						<div class="about-property wow fadeInUp" data-wow-delay="0.75s">

							<div class="about-property-content">
								<p>{!! $project->features !!}</p>

							
							</div>
						</div>
					</div>
					<!-- Property Single Content End -->
				</div>

				<div class="col-lg-4">
					<!-- Property Single Sidebar Start -->
					<div class="porperty-single-sidebar">
						<!-- Property Information Box Start -->
						<div class="property-info-box wow fadeInUp" data-wow-delay="0.25s">
							<h3>Be Part of this project by investing as low as N20,000</h3>

							<div class="property-info-lists">
								<!-- Property Info item Start-->
								<div class="property-info-item">
									<div class="icon-box">
										<img src="images/icon-property-location.svg" alt="">
									</div>
								</div>
							
							</div>
						</div>
						<div class="property-inquiry-box wow fadeInUp" data-wow-delay="0.5s">
							<h3>Contact Us to learn More</h3>
							
							<div class="property-inquiry-form">
								<form id="contactForm" action="#" method="POST" data-toggle="validator">
									<div class="row">
										<div class="form-group col-md-12 mb-3">
											<input type="text" name="name" class="form-control" id="name" placeholder="Name" required >
											<div class="help-block with-errors"></div>
										</div>
		
										<div class="form-group col-md-12 mb-3">
											<input type="email" name ="email" class="form-control" id="email" placeholder="Email" required >
											<div class="help-block with-errors"></div>
										</div>
		
										<div class="form-group col-md-12 mb-3">
											<input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" required >
											<div class="help-block with-errors"></div>
										</div>
		
										<div class="form-group col-md-12 mb-3">
											<textarea name="msg" class="form-control" id="msg" rows="4" placeholder="Write a Message" required></textarea>
											<div class="help-block with-errors"></div>
										</div>
		
										<div class="col-md-12 text-center">
											<button type="submit" class="btn-default">Send Message</button>
											<div id="msgSubmit" class="h3 text-left hidden"></div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- Property Inquiry Form End -->
					</div>
					<!-- Property Single Sidebar End -->
				</div>
			</div>
		</div>
	</div>
@endsection