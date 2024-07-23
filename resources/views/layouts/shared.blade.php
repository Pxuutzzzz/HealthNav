<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>HealthNav</title>

  


  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href=" {{asset('assets/plugins/icofont/icofont.min.css')}}">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/slick-carousel/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/slick-carousel/slick/slick-theme.css') }}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body id="top">

<!--##########################################################################################################################-->

<!-- Header Start -->
<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:support@care.com"><i class="icofont-support-faq mr-2"></i>HealthNav@care.com</a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Yogyakarta, Indonesia </li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+23-345-67890" >
							<span>Call Now : </span>
							<span class="">+62 877-3903-5397</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation nav-glass" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="{{ route('main') }}">
			  	<img class="main-logo" src="  {{ asset('assets/images/logo.png') }}" alt="" class="img-fluid">
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link text-light" href="{{ route('main') }}">Home</a>
			  </li>
			   <li class="nav-item"><a class="nav-link text-light" href="{{ route('about') }}">About</a></li>

			   <li class="nav-item"><a class="nav-link text-light" href="{{ route('contact') }}">Contact</a></li>
         <li class="nav-item"><a class="nav-link text-light" href="{{ route('login') }}">Login</a></li>

			</ul>
		  </div>
		</div>
	</nav>
</header>
<!-- Header End -->	

<!--##########################################################################################################################-->

@yield('content')

<!--##########################################################################################################################-->

<!-- footer Start -->
<footer class="footer section gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="widget mb-3 mb-lg-0">
                <h6 class="mb-3">About HealthNav</h6>
                <p>We are your trusted partner in your healthcare journey, providing safe, comfortable, and high-quality international medical services.</p>
                <p class="text-muted">Your health is our top priority. With HealthNav, you can undergo medical care with complete confidence and peace of mind, as we are here to ensure your medical journey is smooth and comfortable.</p>
                <p>Jl. Laksda Adisucipto No.32-34, Demangan, Kec. Gondokusuman, Yogyakarta City, Yogyakarta Special Region 55221</p>
                </div>
            </div>
            <div class="col-lg-4 ml-auto col-sm-6 text-right">
                <div class="widget mb-3 mb-lg-0">
                    <div class="logo mb-2">
                        <img src="{{ asset('assets/images/logoo.png') }}" alt="" class="img-fluid small-logo">
                    </div>

                    <ul class="list-inline footer-socials mt-2">
                        <li class="list-inline-item"><a href="#"><i class="icofont-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="icofont-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="icofont-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <p>&copy; 2024 HealthNav. All Rights Reserved.</p>
    </div>
</footer>

<!-- footer End -->


   <!--##########################################################################################################################-->

    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.js') }}
    "></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/counterup/jquery.easing.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('assets/plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <!-- Counterup -->
    <script src="{{ asset('assets/plugins/counterup/jquery.waypoints.min.js') }}"></script>
    
    <script src="{{ asset('assets/plugins/shuffle/shuffle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/counterup/jquery.counterup.min.js') }}"></script>
    <!-- Google Map -->
    <script src="{{ asset('assets/plugins/google-map/map.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/contact.js') }}"></script>

  </body>
  </html>
   