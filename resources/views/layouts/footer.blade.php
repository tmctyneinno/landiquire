<footer class="footer">
 

    <!-- Mega Footer Start -->
    <div class="mega-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Footer About Start -->
                    <div class="footer-about">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="{{asset('assets/'.$settings->image)}}" alt="">
                        </div>
                        <!-- Footer Logo End -->
                        
                        <!-- Footer About Content Start -->
                        <div class="footer-about-content">
                            <p>{{$settings->about}}</p>
                        </div>
                        <!-- Footer About Content End -->

                        <!-- Footer Social Link Start -->
                        <div class="footer-social-links">
                            <ul>
                                <li><a href="{{$settings->facebook}}"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="{{$settings->instagram}}"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="{{$settings->twitter}}"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="{{$settings->linkedIn}}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>							
                        <!-- Footer Social Link End -->
                    </div>
                    <!-- Footer About End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Footer Contact Info Start -->
                    <div class="footer-contact-info">
                        <h3>Contact Info</h3>

                        <!-- Footer Contact Info Box Start -->
                        <div class="footer-contact-box">
                            <div class="footer-info-box">
                                <div class="icon-box">
                                    <img src="{{asset('assets/images/icon-location.svg')}}" alt="">
                                </div>

                                <p>{{$settings->address}}</p>
                            </div>

                            <div class="footer-info-box">
                                <div class="icon-box">
                                    <img src="{{asset('assets/images/icon-phone.svg')}}"alt="">
                                </div>

                                <p>{{$settings->site_phone}}</p>
                            </div>

                            <div class="footer-info-box">
                                <div class="icon-box">
                                    <img src="{{asset('assets/images/icon-email.svg')}}" alt="">
                                </div>

                                <p>{{$settings->site_email}}</p>
                            </div>
                        </div>
                        <!-- Footer Contact Info Box End -->
                    </div>
                    <!-- Footer Contact Info End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Footer Quick Link Starts -->
                    <div class="footer-quick-links">
                        <h3>Quick Links</h3>
                        <ul>
                        @forelse ($menus->take(6) as $menu )
                        <li class="nav-item"><a class="nav-link" href="{{route($menu->slug)}}">{{$menu->name}}</a></li>
                        
                        @empty
                        @endforelse
                    </div>
                    <!-- Footer Quick Link End -->
                </div>

             
            </div>
        </div>
    </div>
    <!-- Mega Footer End -->
</footer>

<div class="footer-copyright-links">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <!-- Footer Copyright Content Start -->
                <div class="footer-copyright">
                    <p >{{$settings->copyright}}</p>
                </div>
                <!-- Footer Copyright Content End -->
            </div>

            <div class="col-md-6">
                <!-- Footer Policy Links Start -->
                <div class="footer-policy-links">
                    <ul>
                        <li><a href="#">Privacy & Policy</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                    </ul>
                </div>
                <!-- Footer Policy Links End -->
            </div>
        </div>
    </div>
</div>