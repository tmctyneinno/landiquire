@extends('layouts.app')
@section('contents')
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Subpage Header Box Start -->
                <div class="page-header-box">
                    <h2 class="text-anime" style="color:#fff">{{$blog->title}}</h2>
                    <div class="post-meta wow fadeInUp" data-wow-delay="0.25s">
                        <ul>
                            <li><a href="#">{{$blog->created_at->format('D d M, Y')}}</a></li>
                            <li>by</li>
                            <li>Admin</li>
                        </ul>
                    </div>
                </div>
                <!-- Subpage Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->	

<!-- Blog Single Page Start -->
<div class="blog-single-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post Content Start -->
                <div class="post-content">
                    <!-- Post Featured Image Start -->
                    <div class="post-featured-image wow fadeInUp" data-wow-delay="0.25s">
                        <figure class="image-anime">
                            <img src="{{asset('images/'.$blog->image)}}" alt="">
                        </figure>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- Post Entry Start -->
                    <div class="post-entry wow fadeInUp" data-wow-delay="0.5s">
                        <h4> {{$blog->title}}</h4>
                        <p>
                            {!!  $blog->contents !!}
                        </p>
                         </div>
                    <!-- Post Entry End -->

                   
                </div>
                <!-- Post Content End -->
            </div>

            <div class="col-lg-4">
                <!-- Post Sidebar Start -->
                <div class="post-sidebar">
                    <!-- Search Widget Start -->
                    <div class="search-box-widget wow fadeInUp" data-wow-delay="0.25s">
                        <div class="search-form">
                            <form action="#" method="get">
                                <div class="input-group">									
                                    <input class="form-control" type="search" placeholder="search" >
                                    <span class="input-group-append">
                                        <button class="btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                 
                    <!-- Category Box End -->

                    <!-- Recent Posts Widget Start -->
                    <div class="recent-posts-widget wow fadeInUp" data-wow-delay="0.75s">
                        <h3>Recent Blogs</h3>

                        <div class="recent-posts-lists">
                            <!-- Recent Post Item Start -->
                        @forelse($blogs as $blg)
                            <div class="recent-post-item">
                                <div class="post-image">
                                    <img src="{{asset('images/'.$blg->image)}}" alt="">
                                </div>

                                <div class="post-info">
                                    <h4><a href="{{route('blog.details', encrypt($blog->id))}}">{{$blog->title}}</a></h4>
                                    <a href="{{route('blog.details', encrypt($blog->id))}}"> Read More</a>
                                </div>
                              
                            </div>
                            @empty
                            @endforelse
                       
                            <!-- Recent Post Item End -->
                        </div>
                    </div>
                
                    <!-- Popular Tags Widget End -->
                </div>
                <!-- Post Sidebar End -->
            </div>
        </div>
    </div>
</div>

@endsection
