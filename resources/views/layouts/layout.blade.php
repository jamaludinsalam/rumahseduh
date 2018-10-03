<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('front/images/icons/favicon.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front/fonts/themify/themify-icons.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front/vendor/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front/vendor/lightbox2/css/lightbox.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('front/css/main.css')}}">
<!--===============================================================================================-->
	{{-- <link rel="stylesheet" type="text/css" href="{{asset('bs/css/bootstrap.css')}}"> --}}
	<link rel="stylesheet" type="text/css" href="{{asset('front/css/main.css')}}">
	<link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
	<link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
	
</head>
<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="index.html">
							<img src="{{asset('front/images/icons/logo.png')}}" alt="IMG-LOGO" data-logofixed="images/icons/logo2.png">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="{{route('home')}}">Home</a>
								</li>

								<li>
									<a href="{{route('menu')}}">Menu</a>
								</li>

								<li>
									<a href="{{route('gallery')}}">Shop</a>
								</li>

								<li>
									<a href="{{route('gallery')}}">Gallery</a>
								</li>

								<li>
									<a href="{{route('about')}}">About</a>
								</li>
							
								<li>
									<a href="{{route('contact')}}">Contact</a>
								</li>
							</ul>
						</nav>
					</div>
					{{-- glyphicon glyphicon-shopping-cart --}}
					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<div class="wrap_menu p-l-45 p-l-0-xl">
							<nav class="menu">
								<ul class="main_menu">
									<a href="#">
										<i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
										Cart <span class="badge"> 4</span>
									</a>
								</ul>
							</nav>
						</div>
						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="{{route('home')}}" class="txt19">Home</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{route('menu')}}" class="txt19">Menu</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{route('home')}}" class="txt19">Shop</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{route('gallery')}}" class="txt19">Gallery</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{route('about')}}" class="txt19">About</a>
			</li>

			<li class="t-center m-b-33">
				<a href="{{route('contact')}}" class="txt19">Contact</a>
			</li>

			<li class="t-center">
				<!-- Button3 -->
				<a href="">
					<ul>
						<!-- Authentication Links -->
						@guest
							<a href="{{ route('login') }}" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">Login</a>
								<br>
								
							<a href="{{ route('register') }}" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">Register</a>

						@else
						<li class="dropdown">
							<a href="#" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
									{{ Auth::user()->name }}
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="{{ route('logout') }}"
										onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
										Logout
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</li>
							</ul>
						</li>		
						@endguest
					</ul>
				</a>
			</li>
		</ul>

		<!-- - -->
		<div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
			<!-- - -->
			<h4 class="txt20 m-b-33">
				Gallery
			</h4>

			<!-- Gallery -->
			<div class="wrap-gallery-sidebar flex-w">
				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('front/images/photo-gallery-01.jpg')}}" data-lightbox="gallery-footer">
					<img src="{{asset('front/images/photo-gallery-thumb-01.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('front/images/photo-gallery-02.jpg')}}" data-lightbox="gallery-footer">
					<img src="{{asset('front/images/photo-gallery-thumb-02.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('front/images/photo-gallery-03.jpg')}}" data-lightbox="gallery-footer">
					<img src="{{asset('front/images/photo-gallery-thumb-03.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('front/images/photo-gallery-05.jpg')}}" data-lightbox="gallery-footer">
					<img src="{{asset('front/images/photo-gallery-thumb-05.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('front/images/photo-gallery-06.jpg')}}" data-lightbox="gallery-footer">
					<img src="{{asset('front/images/photo-gallery-thumb-06.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('front/images/photo-gallery-07.jpg')}}" data-lightbox="gallery-footer">
					<img src="{{asset('front/images/photo-gallery-thumb-07.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('front/images/photo-gallery-09.jpg')}}" data-lightbox="gallery-footer">
					<img src="{{asset('front/images/photo-gallery-thumb-09.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('front/images/photo-gallery-10.jpg')}}" data-lightbox="gallery-footer">
					<img src="{{asset('front/images/photo-gallery-thumb-10.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('front/images/photo-gallery-11.jpg')}}" data-lightbox="gallery-footer">
					<img src="{{asset('front/images/photo-gallery-thumb-11.jpg')}}" alt="GALLERY">
				</a>
			</div>
		</div>
	</aside>

<!--==================================================================================================-->

@yield('content')

<!--==================================================================================================-->


	<!-- Sign up -->
	<div class="section-signup bg1-pattern p-t-85 p-b-85">
		
	</div>


	<!-- Footer -->
	<footer class="bg1">
		<div class="container p-t-40 p-b-70">
			<div class="row">
				<div class="col-sm-6 col-md-7 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Contact Us
					</h4>

					<ul class="m-b-70">
						<li class="txt14 m-b-14">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							Coffee Shop, Jl. Kemang Raya, Jakarta Selatan
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							(+62) 877 8554 0655
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							coffee@site.com
						</li>
					</ul>    

					<!-- - -->
					<h4 class="txt13 m-b-32">
						Opening Times
					</h4>

					<ul>
						<li class="txt14">
							09:30 AM – 11:00 PM
						</li>

						<li class="txt14">
							Every Day
						</li>
					</ul>
				</div>

				

				<div class="col-sm-6 col-md-5 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-38">
						Gallery
					</h4>

					<!-- Gallery footer -->
					<div class="wrap-gallery-footer flex-w">
						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front/images/photo-gallery-01.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{asset('front/images/photo-gallery-thumb-01.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front/images/photo-gallery-02.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{asset('front/images/photo-gallery-thumb-02.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front/images/photo-gallery-03.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{asset('front/images/photo-gallery-thumb-03.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front/images/photo-gallery-04.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{asset('front/images/photo-gallery-thumb-04.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front/images/photo-gallery-05.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{asset('front/images/photo-gallery-thumb-05.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front/images/photo-gallery-06.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{asset('front/images/photo-gallery-thumb-06.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front/images/photo-gallery-07.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{asset('front/images/photo-gallery-thumb-07.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front/images/photo-gallery-08.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{asset('front/images/photo-gallery-thumb-08.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front/images/photo-gallery-09.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{asset('front/images/photo-gallery-thumb-09.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front/images/photo-gallery-10.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{asset('front/images/photo-gallery-thumb-10.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front/images/photo-gallery-11.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{asset('front/images/photo-gallery-thumb-11.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('front/images/photo-gallery-12.jpg')}}" data-lightbox="gallery-footer">
							<img src="{{asset('front/images/photo-gallery-thumb-12.jpg')}}" alt="GALLERY">
						</a>
					</div>

				</div>
			</div>
		</div>

		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
						<a href="#" class="fs-15 c-white"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
					</div>

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; 2018 All rights reserved  |  This template is made with <i class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>


<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('front/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('front/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('front/vendor/bootstrap/js/popper.js')}}"></script>
	<script type="text/javascript" src="{{asset('front/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('front/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('front/vendor/daterangepicker/moment.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('front/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('front/vendor/slick/slick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('front/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('front/vendor/parallax100/parallax100.js')}}"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('front/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('front/vendor/lightbox2/js/lightbox.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('front/js/main.js')}}"></script>

</body>
</html>
