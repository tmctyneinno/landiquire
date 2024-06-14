<footer class="footer-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a class="logo" href="index-2.html">
                            <img src="{{asset('assets/'.$settings->logo)}}"  width="100px" alt="{{asset('assets/'.$settings->logo)}}">
                        </a>
                        <p>{{$settings->about}}</p>
                        <ul>
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
                                <a href="{{$settings->linkedIn}}" target="_blank">
                                    <i class="icofont-linkedin"></i>
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
            {{-- <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-causes">
                        <h3>Urgent causes</h3>
                        <div class="cause-inner">
                            <ul class="align-items-center">
                                <li>
                                    <img src="assets/img/footer-thumb1.jpg" alt="Cause">
                                </li>
                                <li>
                                    <h3>
                                        <a href="donation-details.html">Donate for melina the little child</a>
                                    </h3>
                                </li>
                            </ul>
                        </div>
                        <div class="cause-inner">
                            <ul class="align-items-center">
                                <li>
                                    <img src="assets/img/footer-thumb2.jpg" alt="Cause">
                                </li>
                                <li>
                                    <h3>
                                        <a href="donation-details.html">Relief for Australia cyclone effected</a>
                                    </h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>Quick links</h3>
                        <ul>
                            @foreach ($menus->take(4) as $menu )
                        <li class="nav-item">
                            @if($menu->has_child)
                            <li class="nav-link dropdown-toggle">
                             @if(count($menu->subMenu) > 0)
                            <ul class="dropdown-menu">
                                @forelse ($menu->subMenu as $sub ) 
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
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-contact">
                        <h3>Contact info</h3>
                        <div class="contact-inner">
                            <ul>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <a href="#">Address: {{$settings->address}}</a>
                                </li>
                                <li>
                                    <i class="icofont-ui-call"></i>
                                    <a href="tel:+123456789"> Phone: {{$settings->site_phone}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="contact-inner">
                            <ul>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <a href="#">Email: {{$settings->site_email}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <p>Copyright @
                <script>
                    document.write(new Date().getFullYear()) 
                </script>
                {{$settings->site_copyright}}
            </p>
        </div>
    </div>
</footer>