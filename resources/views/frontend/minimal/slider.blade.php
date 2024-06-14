<div class="banner-area-two three">
    <div class="banner-slider owl-theme owl-carousel">
        @forelse ($sliders as  $slider)
        <div class="banner-slider-item" style="background-image:url({{asset('images/'.$slider->image)}}); height:600px">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-content">
                            <h1>{{$slider->title}}</h1>
                            <p>{{$slider->content}}</p>
                            <div class="banner-btn-area">
                                {{-- <a class="common-btn banner-btn" href="#">Become a volunteer</a>
                                <a class="common-btn" href="#">Donate Now</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@empty
        @endforelse

        {{-- <div class="banner-slider-item banner-img-five">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-content">
                            <h1>Become a volunteer in our community to help people</h1>
                            <p>It is a long established fact that a reader will be page distracted by the readable
                                content of a pain</p>
                            <div class="banner-btn-area">
                                <a class="common-btn banner-btn" href="#">Get Start A Fundraising</a>
                                <a class="common-btn" href="#">Donate Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-slider-item banner-img-six">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-content">
                            <h1>We are donating all over the world by our volunteer</h1>
                            <p>It is a long established fact that a reader will be page distracted by the readable
                                content of a pain</p>
                            <div class="banner-btn-area">
                                <a class="common-btn banner-btn" href="#">Get Start A Fundraising</a>
                                <a class="common-btn" href="#">Donate Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
