<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="left">
                    <ul>
                        <li>
                            <i class="icofont-location-pin"></i>
                            <a href="#">{{$settings->address}}</a>
                        </li>
                        <li>
                            <i class="icofont-ui-call"></i>
                            <a href="tel:{{$settings->site_phone}}">{{$settings->site_phone}}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="right">
                    <ul>
                        <li>
                            <span>Follow Us:</span>
                        </li>
                        <li>
                            <a href="{{$settings->facebook}}" target="_blank">
                                <i class="icofont-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{$settings->twitter}}" target="_blank">
                                <i class="icofont-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="icofont-youtube-play"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{$settings->instagram}}" target="_blank">
                                <i class="icofont-instagram"></i>
                            </a>
                        </li>
                    </ul>
                  
                </div>
            </div>
        </div>
    </div>
</div>

<div class="navbar-area sticky-top">

    <div class="mobile-nav">
        <a href="{{route('index')}}" class="logo">
            <img src="{{asset('assets/'.$settings->logo)}}"  width="100px" height="20px" alt="Logo">
        </a>
    </div>

    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{route('index')}}">
                    <img src="{{asset('assets/'.$settings->logo)}}" width="120px" class="logo-one" alt="Logo">
                    <img src="{{asset('assets/'.$settings->logo)}}" class="logo-two" alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        @foreach ($menus as $menu )
                        <li class="nav-item">
                            @if($menu->has_child)
                            <li class="nav-link dropdown-toggle">
                             @if(count($menu->subMenu) > 0)
                            <ul class="dropdown-menu">
                                @forelse ($menu->subMenu as $sub) 
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route($menu->slug)}}">{{$menu->name}}</a> 
                                </li>
                                @empty
                                @endforelse
                            </ul>
                            @endif
                        </li>
                        @else
                       <a class="nav-link" href="{{route($menu->slug)}}">{{$menu->name}}</a> 
                        @endif
                        @endforeach
                        
                    </ul>
                    <div class="side-nav">
                        <a class="donate-btn" href="{{route('users.donation.index')}}">
                            Donate
                            <i class="icofont-heart-alt"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>