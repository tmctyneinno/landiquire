@extends('layouts.app')

@section('contents')
    <div class="page-title-area title-bg-three">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>Donations</h2>
                        <ul>
                            <li>
                                <a href="{{route('index')}}">Home</a>
                            </li>
                            <li>
                                <span>Donations</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="donations-area ptb-100">
        <div class="container">
            <div class="row">
                @forelse($donations as $donation)
                <div class="col-sm-6 col-lg-4">
                    <div class="donation-item">
                        <div class="img">
                            <img src="{{asset('images/'.$donation->image)}}" alt="{{asset('images/'.$donation->image)}}">
                            <a class="common-btn" href="donation-details.html">Donate Now</a>
                        </div>
                        <div class="inner">
                            <div class="top">
                                <h3>
                                    <a href="{{route('user.donation.details', encrypt($donation->id))}}">{{$donation->title}}</a>
                                </h3>
                                <p>   <p>{!!substr($donation->content,0,150)!!}.</p></p>
                            </div>
                            <div class="bottom">
                                <div class="skill">
                                    <div class="skill-bar skill1 wow fadeInLeftBig" style="width: {{($donation->amount_raised * 100)/$donation->goal_amount}}%">
                                        <span class="skill-count1" >@if($donation->amount_raised > 0) {{($donation->amount_raised * 100)/$donation->goal_amount}}% @else 0% @endif</span>
                                    </div>
                                </div>
                                <ul>
                                    <li>  Raised: {{moneyFormat($donation->amount_raised)}}</li>
                                    <li> Goal: {{moneyFormat($donation->goal_amount)}}</li>
                                </ul>
                                @if($donation->amount_raised > 0)
                                <h4>Donated by <span>{{$donation->total_donors}}people</span></h4>
                                @else 
                                <h4>No Donations</h4>
                                @endif
                            </div>
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
