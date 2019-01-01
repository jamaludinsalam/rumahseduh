<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{secure_asset('front/front2/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front/front2/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front/front2/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front/front2/fonts/linearicons-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{secure_asset('front/front2/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{secure_asset('front/front2/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{secure_asset('front/front2/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{secure_asset('front/front2/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{secure_asset('front/front2/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{secure_asset('front/front2/vendor/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{secure_asset('front/front2/vendor/MagnificPopup/magnific-popup.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{secure_asset('front/front2/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{secure_asset('front/front2/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{secure_asset('front/front2/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v2">
		<!-- Header desktop -->
		<div class="container-menu-desktop trans-03">
			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop p-l-45">
					
					<!-- Logo desktop -->		
					<a href="/" class="logo">
						<img src="{{secure_asset('front/front2/images/icons/coffee-logo.png')}}" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="@yield('active_home')"><a href="/">Home</a></li>
							<li class="@yield('active_beverages') @yield('active_foods') ">
								<a>Menu</a>
								<ul class="sub-menu">
									<li class="@yield('active_beverages')"><a href="{{route('beverages')}}">Beverages</a></li>
									<li class="@yield('active_foods')"><a href="{{route('foods')}}">Foods</a></li>
								</ul>
							</li>

							<li class="@yield('active_shop')" >
								<a href="{{route('shop')}}">Shop</a>
							</li>

                            <li class="@yield('active_gallery')">
                                <a href="{{route('gallery')}}">Gallery</a>
                            </li>

							<li class="@yield('active_blog')">
								<a href="{{route('blog')}}">Blog</a>
							</li>

							<li class="@yield('active_about')">
								<a href="{{route('about')}}">About</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m h-full">
						{{-- <div class="flex-c-m h-full p-r-24">
							<div class="icon-header-item cl5 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
								<i class="zmdi zmdi-search"></i>
							</div>
						</div> --}}
							
						<div class="flex-c-m h-full p-l-18 p-r-25 bor5">
							<div class="icon-header-item cl5 hov-cl1 trans-04 p-lr-11 icon-header-noti " data-notify="{{Cart::count()}}">
									<a href="{{route('cart.index')}}"><i  class="zmdi zmdi-shopping-cart"></i></a>
								{{-- <button type="submit" class="zmdi zmdi-shopping-cart"></button> --}}
							</div>
						</div>
							
						<div class="flex-c-m h-full p-lr-19">
							<div class="icon-header-item cl5 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
								<i class="zmdi zmdi-menu"></i>
							</div>
						</div>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="{{route('home')}}"><img src="{{secure_asset('front/front2/images/icons/coffee-logo.png')}}" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
				{{-- <div class="flex-c-m h-full p-r-10">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
						<i class="zmdi zmdi-search"></i>
					</div>
				</div> --}}

				<div class="flex-c-m h-full p-lr-10 bor5">
					<div class="icon-header-item cl5 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="{{Cart::count()}}">
						<i  class="zmdi zmdi-shopping-cart"></i>
					</div>
				</div>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="main-menu-m">
				<li class="@yield('active_home')"><a href="/">Home</a></li>

				<li class="@yield('active_beverages') @yield('active_foods') ">
					<a>Menu</a>
					<ul class="sub-menu">
						<li class="@yield('active_beverages')"><a href="{{route('beverages')}}">Beverages</a></li>
						<li class="@yield('active_foods')"><a href="{{route('foods')}}">Foods</a></li>
					</ul>
				</li>

				<li class="label1 @yield('active_shop')" data-label1="hot">
					<a href="{{route('shop')}}">Shop</a>
				</li>

				<li class="@yield('active_gallery')">
					<a href="{{route('gallery')}}">Gallery</a>
				</li>

				<li class="@yield('active_blog')">
					<a href="#">Blog</a>
				</li>

				<li class="@yield('active_about')">
					<a href="{{route('about')}}">About</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="{{secure_asset('front/front2/images/icons/icon-close2.png')}}" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<aside class="wrap-sidebar js-sidebar">
		<div class="s-full js-hide-sidebar"></div>

		<div class="sidebar flex-col-l p-t-22 p-b-25">
			<div class="flex-r w-full p-b-30 p-r-27">
				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-sidebar">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>

			<div style="" class="sidebar-content flex-w w-full p-lr-65 js-pscroll">
				<li class="t-center">
					<ul>
						@if (Auth::check() && Auth::user()->admin == 1)
						<li class="dropdown">
							<a href="#" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
								{{ Auth::user()->name }}
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="{{ route('logout') }}" class="flex-c-m stext-101 cl0 size-101 bg2 bor1 hov-btn1 p-lr-15 trans-04 "
										onclick="event.preventDefault();
										document.getElementById('logout-form').submit();"><button type="submit">
										Logout</button>
									</a>
	
									<form id="logout-form" action="{{ route('logout') }}" method="POST" >
										{{ csrf_field() }}
									</form>
								</li>
							</ul>
						</li>
						<br>
						<br>
						<ul class="sidebar-link w-full">
							<li class="p-b-13">
								<a href="{{route('dashboard')}}" class="stext-102 cl5 hov-cl1 trans-04">
									Dashboard
								</a>
							</li>
				
							<li class="p-b-13">
								<a href="{{route('product.index')}}" class="stext-102 cl5 hov-cl1 trans-04">
									Product
								</a>
							</li>
				
							<li class="p-b-13">
								<a href="{{route('orders.index')}}" class="stext-102 cl5 hov-cl1 trans-04">
									Orders
								</a>
							</li>
							<li class="p-b-13">
								<a href="{{route('menus.index')}}" class="stext-102 cl5 hov-cl1 trans-04">
									Menu
								</a>
							</li>
						</ul>
						
						@elseif(Auth::check() && Auth::user()->admin == 0)
						<li class="dropdown">
							<a href="#" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
								{{ Auth::user()->name }}
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="{{ route('logout') }}" class="flex-c-m stext-101 cl0 size-101 bg2 bor1 hov-btn1 p-lr-15 trans-04 "
										onclick="event.preventDefault();
										document.getElementById('logout-form').submit();"><button type="submit">
										Logout</button>
									</a>
	
									<form id="logout-form" action="{{ route('logout') }}" method="POST" >
										{{ csrf_field() }}
									</form>
								</li>
							</ul>
						</li>
							<br>
							<br>
						<ul class="sidebar-link w-full">
							<li class="p-b-13">
								<a href="index.html" class="stext-102 cl5 hov-cl1 trans-04">
									Home
								</a>
							</li>
				
							<li class="p-b-13">
								<a href="{{route('myorder')}}" class="stext-102 cl5 hov-cl1 trans-04">
									My Order
								</a>
							</li>
				
							<li class="p-b-13">
								<a href="#" class="stext-102 cl5 hov-cl1 trans-04">
									My Account
								</a>
							</li>
						</ul>

						@else
						<a href="{{ route('login') }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">Login</a>
                            <br>
                        <a href="{{ route('register') }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">Register</a>
						
						@endif

					</ul>
				</li>
                
                

				
				<div class="sidebar-gallery w-full">
					<span class="mtext-101 cl5">
						About Us
					</span>

					<p class="stext-108 cl6 p-t-27">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur maximus vulputate hendrerit. Praesent faucibus erat vitae rutrum gravida. Vestibulum tempus mi enim, in molestie sem fermentum quis. 
					</p>
				</div>
			</div>
		</div>
	</aside>


	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl5">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					@foreach($cartItems as $cartItem)
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="{{url($cartItem->options->image)}}" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								{{$cartItem->name}}
							</a>

							<span class="header-cart-item-info">
							{{$cartItem->qty}} x @money($cartItem->price)
							</span>
						</div>
					</li>
					@endforeach
					
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total:<hr>Rp. {{Cart::subtotal()}}
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="{{route('cart.index')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>



@yield('content')


	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-lg-4 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						CONTACT US
					</h4>

					<p class="stext-107 cl7 size-201">
                            Rumah Seduh
                    </p>
					<p class="stext-107 cl7 size-201">
							Jl. Bogor Baru No.5B, Tegallega, Central Bogor, Bogor City, West Java 16127
                    </p>
                    <p class="stext-107 cl7 size-201">
                            (+62) 813-8049-8006
                    </p>
                    <p class="stext-107 cl7 size-201">
                            rumahseduhh@gmail.com
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="https://www.instagram.com/rumah_seduh_/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
                </div>

                <div class="col-sm-6 col-lg-4 p-b-50">
                        <h4 class="stext-301 cl0 p-b-30">
                            OPENING TIME
                        </h4>
    
                        <p class="stext-107 cl7 size-201">
                                Monday - Thursday
                        </p>
                        <p class="stext-107 cl7 size-201">
                                10.00 AM - 09.30 PM
                        </p>
						<p class="stext-107 cl7 size-201">
                                Friday - Saturday
                        </p>
                        <p class="stext-107 cl7 size-201">
                                10.00 AM - 10.30 PM
                        </p>
                      
                </div>
                    

                {{-- <div class="col-sm-6 col-lg-4 p-b-50">
                    
                            <h4 class="stext-301 cl0 p-b-30">
                                    GALLERY
                                </h4>
    
                        <div class="flex-w flex-sb p-t-36 gallery-lb">
                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="{{asset('front/front2/images/gallery-01.jpg')}}" data-lightbox="gallery" 
                                style="background-image: url('{{asset('front/front2/images/gallery-01.jpg')}}');"></a>
                            </div>
    
                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="{{asset('front/front2/images/gallery-02.jpg')}}" data-lightbox="gallery" 
                                style="background-image: url('{{asset('front/front2/images/gallery-02.jpg')}}');"></a>
                            </div>
    
                            <!-- item gallery sidebar -->
                            <div class="wrap-item-gallery m-b-10">
                                <a class="item-gallery bg-img1" href="{{asset('front/front2/images/gallery-03.jpg')}}" data-lightbox="gallery" 
                                style="background-image: url('{{asset('front/front2/images/gallery-03.jpg')}}');"></a>
                            </div>
    
                            
    
                            
                        </div>
                    
                </div> --}}

			</div>

			<div class="p-t-40">
				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Rumah Seduh Speciality Coffee
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>



<!--===============================================================================================-->	
	<script src="{{secure_asset('front/front2/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{secure_asset('front/front2/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{secure_asset('front/front2/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{secure_asset('front/front2/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{secure_asset('front/front2/vendor/select2/select2.min.js')}}"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->

<!--===============================================================================================-->
	<script src="{{secure_asset('front/front2/vendor/slick/slick.min.js')}}"></script>
	<script src="{{secure_asset('front/front2/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{secure_asset('front/front2/vendor/parallax100/parallax100.js')}}"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="{{secure_asset('front/front2/vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="{{secure_asset('front/front2/vendor/isotope/isotope.pkgd.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{secure_asset('front/front2/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="{{secure_asset('front/front2/js/main.js')}}"></script>
	@yield('js')
	
	<script src="{{secure_asset('admin/sweetalert/sweetalert.min.js')}}"></script>
	@include('sweet::alert')	


</body>
</html>