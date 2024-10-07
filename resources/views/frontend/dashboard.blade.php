@extends('layouts.app')

@section('contents')
@include('frontend.minimal.slider')
	<div class="about-us">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<!-- About Left Image Start -->
					<div class="about-images">
						<div class="about-video">
							<figure class="reveal image-anime">
								<img src="{{asset('assets/'.$settings?->logo)}}" alt="" style=" width:100px">
							</figure>

							<div class="video-play-">
							
							</div>
						</div>

						<div class="about-image">
							<figure class="reveal image-anime">
								<img src="{{asset('images/'.$about?->image)}} " alt="">
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
							<h3 class="wow fadeInUp">{{$about?->title}}</h3>
							{{-- <h2 class="text-anime">The Leading Real Estate About Marketplace.</h2> --}}
						</div>
						<!-- Section Title End -->

						<!-- About Content Body Start -->
						<div class="about-content-body">
							<p class="wow fadeInUp" data-wow-delay="0.5s">{!! $settings?->about !!}</p>
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
							<a href="#" class="btn-default wow fadeInUp" data-wow-delay="1.75s">Read More</a>
						</div>
						<!-- About Content Body End -->

					</div>
					<!-- About Content End -->
				</div>
			</div>
		</div>
	</div>
	<!-- About Section End -->



		<!-- Featured Property Section Start -->
		<div class="featured-property" style="padding-top:20px">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- Section Title Start -->
						<div class="section-title " style="text-align: center">
							<h3 class="wow fadeInUp">See Land Locations</h3>
							<h4 class="text-anime">Our Projects</h4>
						</div>
						<!-- Section Title End -->
					</div>
				</div>
	
				<div class="row">
					<div class="col-md-12">
						<!-- Property Slider Start -->
						<div class="property-slider">
							<div class="swiper">
								<div class="swiper-wrapper">
									@forelse($properties as $property)
									<div class="swiper-slide">
										<div class="property-item">
											<div class="property-header">
												<figure class="image-anime">
													<img src="{{asset('images/'.$property->image)}}" alt="">
												</figure>
	
												<span class="property-label">Rent</span>
											</div>
											<div class="property-body">
												<h3>{{$property->title}}</h3>
												
												<div class="property-meta">
													<div class="property-amenity-item">
														@php 
														if($property->sizes){
															$sizes = explode(',',$property->sizes);
														}
														@endphp
														@if(isset($sizes)) 
														@foreach ($sizes as $size)
														<span>{{$size}}  <br></span>
														@endforeach
														@endif
													</div>
	
													<div class="property-amenity-item">
														@php 
														if($property->prices){
															$prices = explode(',',$property->prices);
														}
														@endphp
														@if(isset($prices)) 
														@foreach ($prices as $price)
														<span>{{$price}}</span> <br>
														@endforeach
														@endif
													</div>
												</div>
											</div>
											<div class="property-footer">
												<a href="#" class="btn-default">See More</a>
											</div>
										</div>
									</div>
									@empty 
									@endforelse
								</div>
								
								<div class="swiper-pagination"></div>
							</div>
						</div>
						<!-- Property Slider End -->
					</div>
				</div>
			</div>
		</div>

	<!-- How It Work Section Start -->
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
	<!-- How It Work Section End -->

	<!-- Why Choose us Section Start -->
	<div class="why-choose-us">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 order-lg-2">
					<!-- Why Choose us Images Start -->
					<div class="why-choose-us-images">
						<div class="why-choose-us-image1">
							<figure class="reveal image-anime">
								<img src="{{asset('assets/images/why-us-img-1.jpg')}}" alt="">
							</figure>
						</div>

						<div class="why-choose-us-image2">
							<figure class="reveal image-anime">
								<img src="{{asset('assets/images/why-us-img-2.jpg')}}" alt="">
							</figure>
						</div>

					
					</div>
					<!-- Why Choose us Images End -->
				</div>

				<div class="col-lg-6 order-lg-1">
					<!-- Why Choose us Content Start -->
					<div class="why-choose-us-content">
						<!-- Section Title Start -->
						<div class="section-title">
							<h3 class="wow fadeInUp">Why CHoose Us</h3>
							<h2 class="text-anime">  </h2>
						</div>
						<!-- Section Title End -->

						<div class="why-choose-us-body wow fadeInUp" data-wow-delay="0.25s">
							<p></p>

							<ul>
								<li>Unique business model combining
									multilevel marketing with affiliate
									partnerships.</li>
								<li>Opportunities for partners to earn
									commissions and profits through
									land purchase and sales.</li>
								<li>Trust and transparency with a
									focus on community and individual
									empowerment.</li>
							</ul>

							<a href="#" class="btn-default">Read More</a>
						</div>
					</div>
					<!-- Why Choose us Content End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Why Choose us Section End -->

	<!-- Infobar Section Start -->
	<div class="infobar-cta">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Infobar Box Start -->
					<div class="infobar-box">
						<div class="row align-items-center">
							<div class="col-lg-6">
								<!-- Infobar Content Start -->
								<div class="cta-content">
									<h2 class="text-anime">Partner with Landiquire </h2>
									<p class="wow fadeInUp"></p>
								</div>
								<!-- Infobar Content End -->
							</div>
			
							<div class="col-lg-6">
								<!-- CTA Button Start -->
								<div class="cta-button">
									<a href="{{route('users.partners.index')}}" class="btn-default">Register as Partner</a>
									<a href="{{route('users.developers.index')}}" class="btn-default btn-border"><i class="fa-solid fa-phone-volume"></i> Register as Developer</a>
								</div>
								<!-- CTA Button End -->
							</div>
						</div>
					</div>
					<!-- Infobar Box End -->
				</div>
			</div>			
		</div>
	</div>


	<!-- Latest Posts Section Start -->
	@if(count($blogs) > 0)
	<div class="latest-posts">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section Title Start -->
					<div class="section-title">
						<h3 class="wow fadeInUp">News & Blog</h3>
					</div>
					<!-- Section Title End -->
				</div>
			</div>

			<div class="row">
				@forelse($blogs as $blog)
				<div class="col-lg-4">
					<div class="post-item wow fadeInUp" data-wow-delay="0.25s">
						<div class="post-featured-image">
							<figure>
								<a href="#"><img src="{{asset('images/'.$blog->image)}}" alt=""></a>
							</figure>

							<div class="post-read-more">
								<a href="#" class="btn-default">Read More</a>
							</div>
						</div>
						<div class="post-body">
							<div class="post-category">
								<ul>
									<li><a href="#">{{$blog->title}}</a></li>
								</ul>
							</div>
							<h3><a href="#">{!! substr($blog->content,0,100) !!}</a></h3>
						</div>
					</div>
				</div>
				@empty 
				@endforelse
			</div>
		</div>
	</div>
	@endif
@endsection
