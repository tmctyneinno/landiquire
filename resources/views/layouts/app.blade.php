
<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="{{asset('images/'.$settings->site_logo)}}">
    <meta name="twitter:description" content="At Landiquire Limited, we are on a mission to revolutionize the real estate market in Nigeria, Are you ready to take your investment game to the next level? With ProjectPlus, you can participate in our large-scale land acquisitions and enjoy a 25% annual return on your investment for 2 years! Plus">
    <meta name="twitter:image" content="{{asset('images/'.$settings->site_logo)}}">
    <link href="{{ asset('images/'.$settings->fav)}}" rel="shortcut icon" type="image/png">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<!-- Favicon Icon -->
    <meta name="application-name" content="https://landiquire.com/ Web-App">
    <meta property="og:site_name" content="landiquire: No1 Estate website in Nigeria">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	<!-- Google Fonts css-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Sora:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
	<!-- Bootstrap css -->
    <meta name="keywords" content="At Landiquire Limited, we are on a mission to revolutionize the real estate market in Nigeria, Are you ready to take your investment game to the next level? With ProjectPlus, you can participate in our large-scale land acquisitions and enjoy a 25% annual return on your investment for 2 years! Plus">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <meta property="og:url" content="{{route('index')}}">
    <meta property="og:title" content="landiquire: NO1 estate management website in Nigeria">
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
	<!-- SlickNav css -->
	<link href="{{asset('/assets/css/slicknav.min.css')}}" rel="stylesheet">
	<!-- Swiper css -->
	<link rel="stylesheet" href="{{asset('/assets/css/swiper-bundle.min.css')}}">
	<!-- Font Awesome icon css-->
	<link href="{{asset('/assets/css/all.min.css')}}" rel="stylesheet" media="screen">
	<!-- Animated css -->
	<link href="{{asset('/assets/css/animate.css')}}" rel="stylesheet">
	<!-- Magnific css -->
	<link href="{{asset('/assets/css/magnific-popup.css')}}" rel="stylesheet">
	<!-- Main custom css -->
	<link href="{{asset('/assets/css/custom.css')}}" rel="stylesheet" media="screen">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
    @yield('styles')
</head>
</head>
<body class="tt-magic-cursor">

<!-- Preloader Start -->
 {{-- <div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="images/loader.svg" alt=""></div>
		</div>
	</div>  --}}

@include('layouts.header')
@yield('contents')
@include('layouts.footer')

	<script src="{{asset('/assets/js/jquery-3.7.1.min.js')}}"></script>
	<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/assets/js/validator.min.js')}}"></script>
	<script src="{{asset('/assets/js/jquery.slicknav.js')}}"></script>
	<script src="{{asset('/assets/js/swiper-bundle.min.js')}}"></script>
	<script src="{{asset('/assets/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('/assets/js/jquery.counterup.min.js')}}"></script>
	<script src="{{asset('/assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('/assets/js/SmoothScroll.js')}}"></script>
	<script src="{{asset('/assets/js/parallaxie.js')}}"></script>
	<script src="{{asset('/assets/js/gsap.min.js')}}"></script>
	<script src="{{asset('/assets/js/magiccursor.js')}}"></script>
	<script src="{{asset('/assets/js/splitType.js')}}"></script>
	<script src="{{asset('/assets/js/ScrollTrigger.min.js')}}"></script>
	<script src="{{asset('/assets/js/wow.js')}}"></script>
	<script src="{{asset('/assets/js/function.js')}}"></script>
</body>
</html>
