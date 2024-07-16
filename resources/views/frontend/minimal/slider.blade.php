

<div class="hero hero-slider">
    <div class="hero-section">
        <!-- Hero Carousel Start -->
        <div class="hero-carousel">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <!-- Hero Slide Start -->
                    @forelse ($sliders as  $slider)
                    {{-- @if(!isset($slider->content))
                    <style>
                        .hero-slider .hero-section .hero-slide .hero-slide-image:after{
                        content: '';
                        display: block;
                        position: absolute;
                        top: 0;
                        left: 0;
                        right: 0;
                        bottom: 0;
                        background: none;
                        z-index: 1;
                    }
                    </style>
                    @endif --}}
                      <div class="swiper-slide">
                        <div class=" hero-slide " >
                            <div class="hero-slide-image " style="background: none">
                                <img src="{{asset('images/'.$slider->image)}}" alt=""   @if(!$slider->title) style="" @endif>
                            </div>

                            
                            <div class="hero-content">
                                <div class="section-title " >
                                    @if($slider->title)
                                    <h3>{!! $slider->tag !!}</h3>
                                    <h1>{!!$slider->title !!}</h1>
                                    @endif
                                </div>
                                <div class="hero-content-body">
                                    @if($slider->title)
                                    <p>{{$slider->content}}</p>
                                    @endif
                                </div>
    
                                <div class="hero-content-footer p-4">
                                    {{-- @if($slider->title) --}}
                                    {{-- <a href="#" class="btn-default">{{_('Learn More')}}</a> --}}
                                    {{-- <a href="#" class="btn-default btn-border">{{_('Conact Us')}}</a> --}}
                                    {{-- @endif --}}
                                </div>
                            </div>
                          
                        </div>
                      </div>
                      @empty
                      @endforelse
                    <!-- Hero Slide End -->

                </div>
                
                <div class="hero-button-prev"></div>
                <div class="hero-button-next"></div>
            </div>
        </div>
        <!-- Hero Carousel End -->
    </div>

    <!-- Hero Search Form Start -->
 
    <!-- Hero Search Form End -->
</div>