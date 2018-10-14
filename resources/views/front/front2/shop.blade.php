@extends('layouts.layout2')

@section('title', 'Shop')
@section('active_shop', 'active-menu')

@section('content')

<!-- Product -->
<div class="bg0 m-t-23 p-b-140">
		<div class="container">
				
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".7">
						Beans
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".8">
						Dripper
					</button>
				</div>

				
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
					</div>	
				</div>

				
			</div>
            
			<div class="row isotope-grid">
					@foreach($products as $product)
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$product->category->id}}">
					<!-- Block2 -->
					<div class="block2">
						<div  class="block2-pic hov-img0">
                            @foreach($product->images->take(1) as $image)
							<img src="{{url($image->image_path)}}" style="object-fit:cover; height:250px; width:100%" alt="IMG-PRODUCT">
                            @endforeach
							{{-- <a href="{{url('shops',$product->id)}}" data-item-id="{{$product->id}}" class="block2-btn flex-c-m stext-103 cl5 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Quick View
							</a> --}}
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="{{url('shops',$product->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        {{$product->name}}
								</a>

								<span class="stext-105 cl3">
                                        {{$product->price}}
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="{{route('cart.edit',$product->id )}}" class=" dis-block pos-relative cl5 ">
									<i class="zmdi zmdi-shopping-cart c15"></i>
									{{-- <img class="icon-heart1 dis-block trans-04" src="{{asset('front/front2/images/icons/icon-heart-01.png')}}" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('front/front2/images/icons/icon-heart-02.png')}}" alt="ICON"> --}}
								</a>
							</div>
						</div>
					</div>
				</div>

				@endforeach
            </div>
           

			{{-- <!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div> --}}
		</div>
	</div>
		<!-- Modal1 -->
		<div class="wrap-modal1 js-modal1 p-t-60 p-b-20" >
				<div class="overlay-modal1 js-hide-modal1"></div>
		
				<div class="container">
					<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
						<button class="how-pos3 hov3 trans-04 js-hide-modal1" >
							<img src="{{asset('front/front2/images/icons/icon-close.png')}}" alt="CLOSE">
						</button>
						@foreach($products as $product)
						<div class="row">
							
							<div class="col-md-6 col-lg-7 p-b-30">
								<div class="p-l-25 p-r-30 p-lr-0-lg">
									<div class="wrap-slick3 flex-sb flex-w">
										<div class="wrap-slick3-dots"></div>
										<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
		
										<div class="slick3 gallery-lb">
											@foreach($product->images as $image)
												<div class="item-slick3" data-thumb="{{url($image->image_path)}}">
													<div class="wrap-pic-w pos-relative">
														<img src="{{url($image->image_path)}}" alt="IMG-PRODUCT">
				
														<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{url($image->image_path)}}">
															<i class="fa fa-expand"></i>
														</a>
													</div>
												</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-6 col-lg-5 p-b-30">
								<div class="p-r-50 p-t-5 p-lr-0-lg">
									<h4 class="mtext-105 cl5 js-name-detail p-b-14">
										{{$product->name}}
									</h4>
		
									<span class="mtext-106 cl5">
										@money($product->price)
									</span>
		
									<p class="stext-102 cl3 p-t-23">
										{{$product->description}}
									</p>
									
									<!--  -->
									<div class="p-t-33">
										<div class="flex-w flex-r-m p-b-10">
											<div class="size-204 flex-w flex-m respon6-next">
												<div class="wrap-num-product flex-w m-r-20 m-tb-10">
													<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
														<i class="fs-16 zmdi zmdi-minus"></i>
													</div>
		
													<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">
		
													<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
														<i class="fs-16 zmdi zmdi-plus"></i>
													</div>
												</div>
		
												<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
													Add to cart
												</button>
											</div>
										</div>	
									</div>
		
									<!--  -->
									<div class="flex-w flex-m p-l-100 p-t-40 respon7">
										<div class="flex-m bor9 p-r-10 m-r-11">
											<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
												<i class="zmdi zmdi-favorite"></i>
											</a>
										</div>
		
										<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
											<i class="fa fa-facebook"></i>
										</a>
		
										<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
											<i class="fa fa-twitter"></i>
										</a>
		
										<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
											<i class="fa fa-google-plus"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
	



@endsection