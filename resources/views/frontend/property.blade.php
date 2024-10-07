@extends('layouts.app')
@section('contents')
<div class="page-header parallaxie" style="background-image:url({{asset('images/'.$properties->first()?->image)}})">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header-box">
                    <h2 class="text-anime" style="color:#fff">Property for sale</h2>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">/ Property For Sale</li>
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
            <div class="col-lg-12">
                <!-- Property Listings Start -->
                <div class="property-listings">
                    <div class="row">

                        @forelse($properties as $property)
                        <div class="col-md-4">
                            <!-- Property Item Start -->
                            <div class="property-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="property-header">
                                    <figure class="image-anime">
                                        <img src="{{asset('images/'.$property->image)}}" alt="">
                                    </figure>
                                </div>
                                <div class="property-body">
                                    <h3>{{$property->title}}</h3>
                                          <div class="property-meta">
											<div class="property-amenity-item">
												<div class="icon-box">
													@if(isset($property?->size)) <img src="{{asset('assets/images/icon-area.svg')}}" alt=""> @endif
												</div>

												<span>{{$property?->size}}</span>
											</div>
										</div>
                                    </div>
                                    <div class="property-footer">
                                    	@if(isset($property?->amount))     <p class="property-price">₦{{$property->amount}}</p>  @endif
                                        <a href="{{route('users.property.details', encrypt($property->id))}}" class="btn-default">View Property</a>
                                    </div>
                                </div>
                              

                            </div>
                            <!-- Property Item End -->
                        </div>
                        @empty 
                        @endforelse
                    </div>
                </div>
            </div>

       
        </div>
    </div>
</div>
@endsection