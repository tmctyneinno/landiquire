@extends('layouts.app')
@section('contents')
<div class="page-header parallaxie" style="background-image:url({{asset('images/'.$projects->first()?->image)}})">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header-box">
                    <h2 class="text-anime" style="color:#fff">Project Plus</h2>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">/ Project Plus</li>
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

                        @forelse($projects as $project)
                        <div class="col-md-4">
                            <!-- Property Item Start -->
                            <div class="property-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="property-header">
                                    <figure class="image-anime">
                                        <img src="{{asset('images/'.$project->image)}}" alt="">
                                    </figure>
                                </div>
                                <div class="property-body">
                                    <h3>{{$project->title}}</h3>
                                    <div class="property-meta">
                                        {{-- {!! substr($project->content,0,100) !!} ..   --}}
                                          <a href="{{route('users.projectplus.details', encrypt($project->id))}}" class=" btn-sm">Read More</a>
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