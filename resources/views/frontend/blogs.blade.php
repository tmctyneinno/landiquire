@extends('layouts.app')
@section('contents')
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Subpage Header Box Start -->
                <div class="page-header-box">
                    <h2 class="text-anime" style="color:#fff">Our Blogs</h2>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
                <!-- Subpage Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->	

<!-- Blog Archive Page Start -->
<div class="blog-archive-page">
    <div class="container">
        <div class="row">
            @forelse($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="post-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="post-featured-image">
                        <figure>
                            <a href="{{route('blog.details', encrypt($blog->id))}}"><img src="{{asset('images/'.$blog->image)}}" alt=""></a>
                        </figure>

                        <div class="post-read-more">
                            <a href="{{route('blog.details', encrypt($blog->id))}}" class="btn-default">Read More</a>
                        </div>
                    </div>
                    <div class="post-body">
                        <h3><a href="{{route('blog.details', encrypt($blog->id))}}">{{$blog->title}}</a></h3>
                    </div>
                   <span style="text-align:justify">{!! substr($blog->contents, 0,200) !!} ... </span> 
                </div>
            </div>
            @empty 
            @endforelse

 
        </div>

        
    </div>
</div>
@endsection
