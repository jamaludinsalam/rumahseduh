@extends('layouts.layout2')

@section('title', 'About Us')

@section('active_about', 'active-menu') 

@section('js')
    @include('front/front2/include/custom_map')
@endsection

@section('content')

<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('front/front2/images/bg-latte.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        About
    </h2>
</section>	


<!-- Content page -->
<section class="bg0 p-t-75 p-b-120">
    <div class="container">
        <div class="row p-b-148">
            <div class="col-md-7 col-lg-8">
                <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                    <h3 class="mtext-111 cl5 p-b-16">
                        Our Story
                    </h3>

                    <p class="stext-113 cl6 p-b-26">
                            Coffee House Cafe is build by two long time Friends that saw an opportunity to build a specialty coffee shop based on their love for coffee, they started to learn more about coffee and also get to know the farmers. After nearly a year of research they finally have the guts to open their shop in a small place in Cipete. They met a lot of coffee lovers, coffee owners, coffee experts, and all the coffee community has helped us to accomplish our dreams.
                    </p>

                  
                </div>
            </div>

            <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                <div class="how-bor1 ">
                    <div class="hov-img0">
                        <img src="front/front2/images/slider3.jpg" alt="IMG">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
                <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                    <h3 class="mtext-111 cl5 p-b-16">
                        Our Mission
                    </h3>

                    <p class="stext-113 cl6 p-b-26">
                           Coffee House Cafe is hoping to become a daily needs for local coffee addicts, a place to dream of as you try to escape the daily routine of life and just a comfortable place to meet your friends or to work with your laptop, all in one. With the growing demand for high-quality gourmet coffee and great service, Dua will capitalise on its proximity to the area that we are in to build a core group of repeat customers. Dua will offer its customers the best prepared coffee in the area that will be complimented with pastries, as well as free books that its patrons can read to enjoy their visit.

                            
                    </p>

                    <!-- <p class="stext-113 cl6 p-b-26">
                            Coffee House Cafe will make its best effort to create a warm place where customers can talk with each other in a comfortable and relaxing environment while enjoying the best brewed coffee and foods in town. We will be in the business of helping our customers to relieve their daily stresses by providing piece of mind through great ambience, convenient location, friendly customer service, and quality products.
                    </p> -->






                    <!-- <div class="bor16 p-l-29 p-b-9 m-t-22">
                        <p class="stext-114 cl6 p-r-40 p-b-11">
                                Good communication is as stimulating as black coffee, and just as hard.
                        </p>

                        <span class="stext-111 cl8">
                            - Anne Spencer
                        </span>
                    </div> -->
                </div>
            </div>

            <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
                <div class="how-bor2">
                    <div class="hov-img0">
                        <img src="front/front2/images/other.jpg" alt="IMG">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>	

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


    




@endsection
@include('front/front2/include/custom_map')