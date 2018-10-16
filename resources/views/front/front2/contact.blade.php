@extends('layouts.layout2')

@section('content')

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('front/front2/images/bg-latte.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Contact
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                        <div class="how-bor1 ">
                                <div class="hov-img0">
                                    <img src="front/front2/images/coffeeshop.jpg" alt="IMG">
                                </div>
                            </div>
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl5">
								Address
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
							Jl. Bogor Baru No.5B, Tegallega, Central Bogor, Bogor City, West Java 16127
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl5">
								Lets Talk
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								+62 813-8049-8006
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl5">
								Sale Support
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
                                rumahseduhh@gmail.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
	
	<!-- Map -->
	<div class="map">
		<div class="size-303" id="google_map"  data-pin="front/front2/images/icons/pinmap2.png" ></div>
	</div>



    
    <script src="{{asset('front/front2/js/map-custom.js')}}"></script>

@endsection