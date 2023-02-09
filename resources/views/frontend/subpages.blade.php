@extends('layouts.app')
@section('contents')
<div class="page-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="page-header-title text-center text-md-start">
                    <h1> {{$breadcrums }}</h1>
                </div>
            </div>

            <div class="col-md-6 col-lg-8">
                <nav class="page-header-breadcrumb text-center text-md-end">
                    <ul class="breadcrumb">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li class="active"><a href="#">{{$breadcrums }}</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="page-content-wrap pt-90 pt-sm-60 pb-90 pb-sm-60 mb-xl-30">
    <div class="service-details-page-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-1 order-lg-0">
                    <!-- Start Service Details Sidebar -->
                    <div class="service-details-sidebar mtm-40 mtm-sm-2 mtm-md-2">
                        <!-- Start Sidebar Item -->
                        <div class="sidebar-single">
                            <h3 class="sidebar-heading">Other links</h3>
                            <div class="sidebar-body">
                                <ul class="service-list">
                                    @foreach ($sidebar as $menu )
                                    <li><a href="{{route('subpages', $menu->id)}}">{{$menu->name}}</a></li>
                                    @endforeach
                                 
                                   
                                </ul>
                            </div>
                        </div>
                        <!-- End Sidebar Item -->

                        <!-- Start Sidebar Item -->
                        <div class="sidebar-single">
                            <h3 class="sidebar-heading">Download Brochure</h3>
                            <div class="sidebar-body">
                                <ul class="service-list">
                                    <li><a href="#"><i class="fa fa-file-pdf-o"></i>Brochures.PDF</a></li>
                                    <li><a href="#"><i class="fa fa-file-word-o"></i>Brochures.DOC</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Sidebar Item -->
                    </div>
                </div>

                <div class="col-lg-8 order-0">
                    <div class="service-details-content">
                        
                            <div class="project-details-thumb ht-slick-slider" data-slick='{"arrows": false, "dots": true}'>
                              
                                <figure class="project-thumb-item">
                                    <img src="{{asset('assets/img/project-details/project-details-2.jpg')}}" alt="Project"/>
                                </figure>
                            </div>
                            <div class="service-details-info">
                            <h2>{{$pages->title}}</h2>
                            <p>{!! $pages->contents !!}</p>

                            
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection