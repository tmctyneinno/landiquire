@extends('layouts.app')
@section('contents')
    <div class="page-title-area title-bg-seven">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>Blog Details</h2>
                        <ul>
                            <li>
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li>
                                <span>Blog Details</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="details-item">
                        <div class="details-img">
                            <img src="{{ asset('images/' . $blog->image) }}" alt="{{ asset('images/' . $blog->image) }}">
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    <span>{{ $blog->created_at->format('d-m-Y') }}</span>
                                </li>
                                <li>
                                    <i class="icofont-user-alt-3"></i>
                                    By - <a href="#">Admin</a>
                                </li>
                            </ul>
                            <h2>{{ $blog->title }}</h2>
                            <p> {!! $blog->contents !!}</p>

                        </div>
                        <div class="details-share">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="left">
                                        <ul>
                                            <li>
                                                <span>Share:</span>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class="icofont-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class="icofont-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class="icofont-youtube-play"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class="icofont-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="right">
                                        <ul>
                                            <li>
                                                <span>Tags:</span>
                                            </li>
                                            <li>
                                                <a href="#">#Donation</a>
                                            </li>
                                            <li>
                                                <a href="#">#Food</a>
                                            </li>
                                            <li>
                                                <a href="#">#Help</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="search widget-item">
                            <form>
                                <input type="text" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn">
                                    <i class="icofont-search-1"></i>
                                </button>
                            </form>
                        </div>
                       
                        <div class="post widget-item">
                            <h3>Popular Post</h3>

                            @forelse ($popular as $item)
                            <div class="post-inner">

                                <ul class="align-items-center">
                                    <li>
                                        <img src="{{asset('images/'.$item->image)}}" alt="Details">
                                    </li>
                                    <li>
                                        <h4>
                                            <a href="#">{{$item->title}}</a>
                                        </h4>
                                        <p>By - <a href="{{route('blog.details', encrypt($item->id))}}">Admin</a></p>
                                        <p> <a href="{{route('blog.details', encrypt($item->id))}}" style="color:blue">View Details</a></p>
                                    </li>
                                </ul>
                            </div>

                                
                            @empty
                                
                            @endforelse
                        </div>
                        {{-- <div class="instagram widget-item">
                            <h3>Instagram post</h3>
                            <div class="row m-0">
                                <div class="col-4 col-sm-3 col-lg-4 p-0">
                                    <div class="instagram-item">
                                        <img src="assets/img/blog/instagram1.jpg" alt="Instagram">
                                        <a href="#">
                                            <i class="icofont-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-3 col-lg-4 p-0">
                                    <div class="instagram-item">
                                        <img src="assets/img/blog/instagram2.jpg" alt="Instagram">
                                        <a href="#">
                                            <i class="icofont-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-3 col-lg-4 p-0">
                                    <div class="instagram-item">
                                        <img src="assets/img/blog/instagram3.jpg" alt="Instagram">
                                        <a href="#">
                                            <i class="icofont-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-3 col-lg-4 p-0">
                                    <div class="instagram-item">
                                        <img src="assets/img/blog/instagram4.jpg" alt="Instagram">
                                        <a href="#">
                                            <i class="icofont-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-3 col-lg-4 p-0">
                                    <div class="instagram-item">
                                        <img src="assets/img/blog/instagram5.jpg" alt="Instagram">
                                        <a href="#">
                                            <i class="icofont-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-3 col-lg-4 p-0">
                                    <div class="instagram-item">
                                        <img src="assets/img/blog/instagram6.jpg" alt="Instagram">
                                        <a href="#">
                                            <i class="icofont-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
