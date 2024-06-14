@extends('layouts.app')
@section('contents')
    <div class="page-title-area title-bg-three" style="height:300px">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>Blog</h2>
                        <ul>
                            <li>
                                <a href="{{route('index')}}">Home</a>
                            </li>
                            <li>
                                <span>Blog</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="blog-area three ptb-100">
        <div class="container">
            <div class="row">
                @forelse($blogs as $blog)
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="top">
                            <a href="{{route('blog.details', encrypt($blog->id))}}">
                                <img src="{{asset('images/'.$blog->image)}}" alt="Blog">
                            </a>
                        </div>
                        <div class="bottom">
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    <span>{{$blog->created_at->format('d m Y')}}</span>
                                </li>
                                <li>
                                    <i class="icofont-user-alt-3"></i>
                                    <span>By:</span>
                                    <a href="{{route('blog.details', encrypt($blog->id))}}">Admin</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="{{route('blog.details', encrypt($blog->id))}}">{{$blog->title}}</a>
                            </h3>
                            <p>{!! substr($blog->contents,0,200)!!}</p>
                            <a class="blog-btn" href="{{route('blog.details', encrypt($blog->id))}}">Read More</a>
                        </div>
                    </div>
                </div>
                @empty 

                @endforelse
             
            </div>
            {{-- <div class="pagination-area">
                <ul>
                    <li>
                        <a href="#">Prev</a>
                    </li>
                    <li>
                        <a class="active" href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">Next</a>
                    </li>
                </ul>
            </div> --}}
        </div>
    </section>
@endsection
