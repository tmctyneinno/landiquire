@extends('layouts.app')
@section('contents')
  
  @include('frontend.minimal.slider')

    <div class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="assets/img/about/about-main1.jpg" alt="About">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="sub-title">About us</span>
                            <h2>{{$about->title}}</h2>
                        </div>
                        <span class="about-span">{!!substr($about->contents,0,200)!!}</span>
                        
                        <div class="about-btn-area">
                            <a class="common-btn" href="#">Read More about us </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="benefit-area three pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Core features</span>
                <h2>Our goals and missions</h2>
            </div>
            <div class="row">
                @forelse($goals as $goal)
                <div class="col-sm-6 col-lg-3">
                    <div class="benefit-item">
                        <i class="{{$goal->icon}}"></i>
                        <h3>{{$goal->title}}</h3>
                        <p>{{$goal->content}}</p>
                    </div>
                </div>
                @empty
                @endforelse
                
            </div>
        </div>
    </div>


    <section class="donations-area three pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Causes to care</span>
                <h2>Be the reason of someone smiles</h2>
                <p>Your support will touch a life today, donation to the growth and development of our foundation</p>
            </div>
            <div class="row">
                @forelse($donations as $donation)
                <div class="col-sm-6 col-lg-4">
                    <div class="donation-item">
                        <div class="top">
                            <h3>
                                <a href="{{route('user.donation.details', encrypt($donation->id))}}">{{$donation->title}}</a>
                            </h3>
                            <p>{!!substr($donation->content,0,150)!!}.</p>
                        </div>
                        <div class="img">
                            <img src="{{asset('images/'.$donation->image)}}" alt="Donation">
                            <a class="common-btn" href="{{route('user.donation.details', encrypt($donation->id))}}">Donate Now</a>
                        </div>
                        <div class="inner">
                            <div class="bottom">
                                <div class="skill">
                                    <div class="skill-bar skill1 wow fadeInLeftBig" style="width: {{($donation->amount_raised * 100)/$donation->goal_amount}}%">
                                        <span class="skill-count1" >@if($donation->amount_raised > 0) {{($donation->amount_raised * 100)/$donation->goal_amount}}% @else 0% @endif</span>
                                    </div>
                                </div>
                                <ul>
                                    <li> Amount Raised {{moneyFormat($donation->amount_raised)}}</li>
                                    <li> Donation Goal {{moneyFormat($donation->goal_amount)}}</li>
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
        </div>
    </section>


    <section class="event-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Our events</span>
                <h2>Upcoming events near you</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="event-item">
                        <img src="assets/img/event/event3.jpg" alt="Event">
                        <div class="inner">
                            <h4>10 <span>Jan</span></h4>
                            <h3>
                                <a href="event-details.html">Relief giving - Providing relief</a>
                            </h3>
                            <ul>
                                <li>
                                    <i class="icofont-stopwatch"></i>
                                    <span>3.00pm - 4.00pm</span>
                                </li>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <span>USA</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="event-item-right">
                        <h4>06 <span>Jan</span></h4>
                        <h3>
                            <a href="event-details.html">Challenge is right for you</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-stopwatch"></i>
                                <span>10.00am - 11.00am</span>
                            </li>
                            <li>
                                <i class="icofont-location-pin"></i>
                                <span>UK</span>
                            </li>
                        </ul>
                    </div>
                    <div class="event-item-right">
                        <h4>07 <span>Jan</span></h4>
                        <h3>
                            <a href="event-details.html">Fundraising is going</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-stopwatch"></i>
                                <span>11.00am - 12.00pm</span>
                            </li>
                            <li>
                                <i class="icofont-location-pin"></i>
                                <span>France</span>
                            </li>
                        </ul>
                    </div>
                    <div class="event-item-right">
                        <h4>08 <span>Jan</span></h4>
                        <h3>
                            <a href="event-details.html">Bowling for a cause</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-stopwatch"></i>
                                <span>1.00pm - 1.30pm</span>
                            </li>
                            <li>
                                <i class="icofont-location-pin"></i>
                                <span>Spain</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="counter-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="counter-item">
                        <i class="flaticon-index"></i>
                        <h3>
                            <span class="odometer" data-count="30">00</span>
                            <span class="target">M</span>
                        </h3>
                        <p>Total fund raised</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="counter-item">
                        <i class="flaticon-event"></i>
                        <h3>
                            <span class="odometer" data-count="250">00</span>
                            <span class="target">+</span>
                        </h3>
                        <p>Successful events</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="counter-item">
                        <i class="flaticon-charity"></i>
                        <h3>
                            <span class="odometer" data-count="550">00</span>
                            <span class="target">+</span>
                        </h3>
                        <p>Worldwide volunteers</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="counter-item">
                        <i class="flaticon-helping-hand"></i>
                        <h3>
                            <span class="odometer" data-count="500">00</span>
                            <span class="target">+</span>
                        </h3>
                        <p>Our donner</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="work-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="work-content">
                        <div class="section-title">
                            <span class="sub-title">How we work</span>
                            <h2>We exist for non-profits, social enterprises, community groups</h2>
                        </div>
                        <ul>
                            <li>
                                <h3><span>01</span>Raise money from different sources</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, pariatur esse animi
                                    temporibus iusto at dolorum</p>
                            </li>
                            <li>
                                <h3><span>02</span>Giving relief in rural area all over the world</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, pariatur esse animi
                                    temporibus iusto at dolorum</p>
                            </li>
                            <li>
                                <h3><span>03</span>Gather all the money and giving relief in need</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, pariatur esse animi
                                    temporibus iusto at dolorum</p>
                            </li>
                            <li>
                                <h3><span>04</span>Go to the country that really needs help</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, pariatur esse animi
                                    temporibus iusto at dolorum</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="work-img">
                        <img src="assets/img/work/work1.jpg" alt="Work">
                        <img src="assets/img/work/work2.jpg" alt="Work">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="gallery-area two pt-100 pb-70">
        <div class="container-fluid">
            <div class="section-title">
                <span class="sub-title">Our gallery</span>
                <h2>Discover the best things we do</h2>
                <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and
                    individual citizens that are making.</p>
            </div>
            <div class="gallery-slider owl-theme owl-carousel">
                <div class="gallery-item">
                    <a href="assets/img/gallery/gallery1.jpg" data-lightbox="roadtrip">
                        <img src="assets/img/gallery/gallery1.jpg" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
                <div class="gallery-item">
                    <a href="assets/img/gallery/gallery2.jpg" data-lightbox="roadtrip">
                        <img src="assets/img/gallery/gallery2.jpg" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
                <div class="gallery-item">
                    <a href="assets/img/gallery/gallery3.jpg" data-lightbox="roadtrip">
                        <img src="assets/img/gallery/gallery3.jpg" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
                <div class="gallery-item">
                    <a href="assets/img/gallery/gallery4.jpg" data-lightbox="roadtrip">
                        <img src="assets/img/gallery/gallery4.jpg" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
                <div class="gallery-item">
                    <a href="assets/img/gallery/gallery5.jpg" data-lightbox="roadtrip">
                        <img src="assets/img/gallery/gallery5.jpg" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
                <div class="gallery-item">
                    <a href="assets/img/gallery/gallery6.jpg" data-lightbox="roadtrip">
                        <img src="assets/img/gallery/gallery6.jpg" alt="Gallery">
                        <i class="icofont-eye"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="team-area pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Volunteer</span>
                <h2>Meet our excellent volunteers</h2>
                <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and
                    individual citizens that are making.</p>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="team-item">
                        <div class="top">
                            <img src="assets/img/team/team1.jpg" alt="Team">
                            <ul>
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
                        <div class="bottom">
                            <h3>Jenas handar</h3>
                            <span>CEO & Founder</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="team-item">
                        <div class="top">
                            <img src="assets/img/team/team2.jpg" alt="Team">
                            <ul>
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
                        <div class="bottom">
                            <h3>Smithy alisha</h3>
                            <span>Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="team-item">
                        <div class="top">
                            <img src="assets/img/team/team3.jpg" alt="Team">
                            <ul>
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
                        <div class="bottom">
                            <h3>Johan mendal</h3>
                            <span>Volunteer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonial-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Testimonials</span>
                <h2>Review from our clients</h2>
            </div>
            <div class="testimonial-slider owl-theme owl-carousel">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="testimonial-img">
                            <img src="assets/img/testimonial/testimonial1.jpg" alt="Testimonial">
                            <h3>Jac Jacson</h3>
                            <span>CEO & Abanda</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial-content">
                            <ul>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                            </ul>
                            <p>The legal definition of a charitable organization (and of charity) varies between countries
                                and in some instances regions of the country. The regulation, the tax treatment.</p>
                            <i class="icofont-quote-left quote"></i>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="testimonial-img">
                            <img src="assets/img/testimonial/testimonial2.jpg" alt="Testimonial">
                            <h3>Tom Henry</h3>
                            <span>Manager</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial-content">
                            <ul>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                            </ul>
                            <p>The legal definition of a charitable organization (and of charity) varies between countries
                                and in some instances regions of the country. The regulation, the tax treatment.</p>
                            <i class="icofont-quote-left quote"></i>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="testimonial-img">
                            <img src="assets/img/testimonial/testimonial3.jpg" alt="Testimonial">
                            <h3>Micheal Shon</h3>
                            <span>Director</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial-content">
                            <ul>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                                <li>
                                    <i class="icofont-star checked"></i>
                                </li>
                            </ul>
                            <p>The legal definition of a charitable organization (and of charity) varies between countries
                                and in some instances regions of the country. The regulation, the tax treatment.</p>
                            <i class="icofont-quote-left quote"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-area three pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Latest news & blog</span>
                <h2>Latest charity blog</h2>
                <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and
                    individual citizens that are making.</p>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="top">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/blog1.jpg" alt="Blog">
                            </a>
                        </div>
                        <div class="bottom">
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    <span>21 Jan, 2020</span>
                                </li>
                                <li>
                                    <i class="icofont-user-alt-3"></i>
                                    <span>By:</span>
                                    <a href="#">Admin</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">Donate for nutration less poor people</a>
                            </h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet cupiditate sit ducimus dolor
                                laudantium distinction</p>
                            <a class="blog-btn" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="top">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/blog2.jpg" alt="Blog">
                            </a>
                        </div>
                        <div class="bottom">
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    <span>22 Jan, 2020</span>
                                </li>
                                <li>
                                    <i class="icofont-user-alt-3"></i>
                                    <span>By:</span>
                                    <a href="#">Admin</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">Charity meetup in Berline next year</a>
                            </h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet cupiditate sit ducimus dolor
                                laudantium distinction</p>
                            <a class="blog-btn" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="blog-item">
                        <div class="top">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/blog3.jpg" alt="Blog">
                            </a>
                        </div>
                        <div class="bottom">
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    <span>23 Jan, 2020</span>
                                </li>
                                <li>
                                    <i class="icofont-user-alt-3"></i>
                                    <span>By:</span>
                                    <a href="#">Admin</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">Donate for the poor people to help them</a>
                            </h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet cupiditate sit ducimus dolor
                                laudantium distinction</p>
                            <a class="blog-btn" href="blog-details.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


   


    <div class="go-top">
        <i class="icofont-arrow-up"></i>
        <i class="icofont-arrow-up"></i>
    </div>
@endsection
