<header class="ps-header ps-header--2 ps-header--8">
    <div class="ps-noti" style="background: #125925">
        <div class="container">
            <p class="m-0">  <marquee> {!! $announcment->content??null !!}</marquee> </p>
        </div><a class="ps-noti__close"><i class="icon-cross"></i></a>
    </div>
    <div class="ps-header__top">

    </div>
    <div class="ps-header__middle">
        <div class="container">
            <div class="ps-logo"><a href="{{route('users.index')}}"> <img src="{{asset('images/'.$settings->site_logo)}}" alt>
                <img class="sticky-logo" src="{{asset('images/'.$settings->site_logo)}}" alt></a></div><a class="ps-menu--sticky" href="{{route('users.index')}}"><i class="fa fa-bars"></i></a>
        </div>
    </div>
</header>