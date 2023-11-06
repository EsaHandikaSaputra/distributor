<!DOCTYPE html>
<html lang="en">

<head>

	<title>AL AMIR GRUP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/magnific-popup.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/aos.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/ionicons.min.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/jquery.timepicker.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/flaticon.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/icomoon.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/custom.css">

    @yield('css')

</head>

<body class="goto-here">

	<div class="py-1 bg-pink">
		<div class="container">
			<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
				<div class="col-lg-12 d-block">
					<div class="row d-flex">
						<div class="col-md-4 pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center">
								<span class="icon-phone2"></span>
							</div>
							<span class="text">+62 812-2013-1900</span>
						</div>
						<div class="col-md-4 pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center">
								<span class="icon-paper-plane"></span>
							</div>
							<span class="text">alamirgroup.jkt@gmail.com</span>
						</div>
						<div class="col-md-4 pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center">
								<span class="icon-instagram"></span>
							</div>
							<span class="text">distributor-kain-ihram</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}">Distributor Kain Ihram</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="{{ url('product') }}" class="nav-link">Product</a></li>
					<li class="nav-item"><a href="{{ url('about') }}" class="nav-link">About Us</a></li>
					<li class="nav-item"><a href="{{ url('contact') }}" class="nav-link">Contact Us</a></li>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item"><a href="{{ url('login') }}" class="nav-link">Login</a></li>
                        @endif

                        {{-- @if (Route::has('register'))
                            <li class="nav-item"><a href="{{ url('register') }}" class="nav-link">Register</a></li>
                        @endif --}}
                    @else    
                        <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	
    @yield('content')

	<footer class="ftco-footer bg-light ftco-section">
		<div class="container">
			<div class="row">
				<div class="mouse">
					<a href="#" class="mouse-icon">
						<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
					</a>
				</div>
			</div>
			<div class="row mb-6">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Distributor Kain Ihram</h2>
						<p>We use the power of nature to produce the most maximum results.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="https://web.facebook.com/profile.php?id=100081667195060&locale=id_ID"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="https://www.instagram.com/supplieranekakurma/"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Menu</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Shop</a></li>
							<li><a href="#" class="py-2 d-block">About</a></li>
							<li><a href="#" class="py-2 d-block">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Help</h2>
						<div class="d-flex">
							<ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
								<li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
								<li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li>
									<span class="icon icon-map-marker"></span>
									<span class="text">Jalan Serdang No. 48 RT. 04 RW. 01 Kel. Duren Sawit, Kec. Duren Sawit Jakarta Timur, Jakarta, 13440</span>
								</li>
								<li>
									<a href="#">
										<span class="icon icon-phone"></span>
										<span class="text">+62 812-2013-1900</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="icon icon-envelope"></span>
										<span class="text">alamirgroup.jkt@gmail.com</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;
						<script>document.write(new Date().getFullYear());</script>
							<a href="https://gify.tech/" target="_blank" class="text-dark"><u>GIFY TECH</u></a>.
							All rights reserved.
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen">
		<svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg>
	</div>

	<script src="{{ asset('frontend') }}/js/jquery.min.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="{{ asset('frontend') }}/js/popper.min.js"></script>
	<script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.easing.1.3.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.waypoints.min.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.stellar.min.js"></script>
	<script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
	<script src="{{ asset('frontend') }}/js/aos.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.animateNumber.min.js"></script>
	<script src="{{ asset('frontend') }}/js/bootstrap-datepicker.js"></script>
	<script src="{{ asset('frontend') }}/js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="{{ asset('frontend') }}/js/google-map.js"></script>
	<script src="{{ asset('frontend') }}/js/main.js"></script>
	
	<script>
		$(document).ready(function () {
			var quantitiy = 0;
			$('.quantity-right-plus').click(function (e) {
				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());
				// If is not undefined
				$('#quantity').val(quantity + 1);
				// Increment
			});
			$('.quantity-left-minus').click(function (e) {
				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());
				// If is not undefined
				// Increment
				if (quantity > 0) {
					$('#quantity').val(quantity - 1);
				}
			});
		});
	</script>

    @yield('js')

</body>

</html>