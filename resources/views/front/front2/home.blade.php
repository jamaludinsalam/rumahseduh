@extends('layouts.layout2')
@include('sweetalert::alert')

@section('title', 'Home')
@section('active_home', 'active-menu')

@section('content')

	<!-- Slider -->
	<section class="section-slide">
            <div class="wrap-slick1 rs1-slick1">
                <div class="slick1">
                    <div class="item-slick1" style="background-image: url(front/front2/images/slider4.jpg);">
                        <div class="container h-full">
                            <div class="flex-col-l-m h-full p-t-100 p-b-30">
                                <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                                    <span class="ltext-202 cl2 respon2">
                                        Men Collection 2018
                                    </span>
                                </div>
                                    
                                <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                    <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
                                        New arrivals
                                    </h2>
                                </div>
                                    
                                <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                    <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="item-slick1" style="background-image: url(front/front2/images/slider2.jpg);">
                        <div class="container h-full">
                            <div class="flex-col-l-m h-full p-t-100 p-b-30">
                                <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                                    <span class="ltext-202 cl2 respon2">
                                        Men New-Season
                                    </span>
                                </div>
                                    
                                <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                                    <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
                                        Jackets & Coats
                                    </h2>
                                </div>
                                    
                                <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                                    <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="item-slick1" style="background-image: url(front/front2/images/slider3.jpg);">
                        <div class="container h-full">
                            <div class="flex-col-l-m h-full p-t-100 p-b-30">
                                <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
                                    <span class="ltext-202 cl2 respon2">
                                        Women Collection 2018
                                    </span>
                                </div>
                                    
                                <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                                    <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
                                        NEW SEASON
                                    </h2>
                                </div>
                                    
                                <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                                    <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <div class="sec-banner bg0 p-t-80 p-b-50" style="background-color: #fffefe">
                <div class="container">
                        <h2 class="tit4 t-center">No Coffee No Work</h2>
                </div>
            </div> --}}
            
    
        <!-- Banner -->
        <div class="sec-banner bg0">
            <div class="flex-w flex-c-m">
                <div class="size-202 m-lr-auto respon4">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="{{asset('front/front2/images/art-latte2.jpg')}}" alt="IMG-BANNER">
    
                        <a href="{{route('beverages')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    Beverages
                                </span>
    
                                <span class="block1-info stext-102 trans-04">
                                    All Authentic Coffee
                                </span>
                            </div>
    
                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Check Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
    
                <div class="size-202 m-lr-auto respon4">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="{{asset('front/front2/images/food2.jpg')}}" alt="IMG-BANNER">
    
                        <a href="{{route('foods')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    Food
                                </span>
    
                                <span class="block1-info stext-102 trans-04">
                                    Good Food Good Mood
                                </span>
                            </div>
    
                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Check Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
    
                <div class="size-202 m-lr-auto respon4">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="{{asset('front/front2/images/other2.jpg')}}" alt="IMG-BANNER">
    
                        <a href="{{route('shop')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    Our Products
                                </span>
    
                                <span class="block1-info stext-102 trans-04">
                                    New Trend
                                </span>
                            </div>
    
                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Shop Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    
    
        <!-- Product -->
        {{-- <section class="sec-product bg0 p-t-100 p-b-50">
            <div class="container">
                <div class="p-b-32">
                    <h3 class="ltext-105 cl5 txt-center respon1">
                        Store Overview
                    </h3>
                </div>
    
                <!-- Tab01 -->
                <div class="tab01">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item p-b-10">
                            <a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">Best Seller</a>
                        </li>
    
                        <li class="nav-item p-b-10">
                            <a class="nav-link" data-toggle="tab" href="#featured" role="tab">Featured</a>
                        </li>
    
                        <li class="nav-item p-b-10">
                            <a class="nav-link" data-toggle="tab" href="#sale" role="tab">Sale</a>
                        </li>
    
                        <li class="nav-item p-b-10">
                            <a class="nav-link" data-toggle="tab" href="#top-rate" role="tab">Top Rate</a>
                        </li>
                    </ul>
    
                    <!-- Tab panes -->
                    <div class="tab-content p-t-50">
                        <!-- - -->
                        <div class="tab-pane fade show active" id="best-seller" role="tabpanel">
                            <!-- Slide2 -->
                            <div class="wrap-slick2">
                                <div class="slick2">
                                    <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                                        <!-- Block2 -->
                                        <div class="block2">
                                            <div class="block2-pic hov-img0">
                                                <img src="{{asset('front/front2/images/product-01.jpg')}}" alt="IMG-PRODUCT">
    
                                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                    Quick View
                                                </a>
                                            </div>
    
                                            <div class="block2-txt flex-w flex-t p-t-14">
                                                <div class="block2-txt-child1 flex-col-l ">
                                                    <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                        Esprit Ruffle Shirt
                                                    </a>
    
                                                    <span class="stext-105 cl3">
                                                        $16.64
                                                    </span>
                                                </div>
    
                                                <div class="block2-txt-child2 flex-r p-t-3">
                                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                        <img class="icon-heart1 dis-block trans-04" src="{{asset('front/front2/images/icons/icon-heart-01.png')}}" alt="ICON">
                                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('front/front2/images/icons/icon-heart-02.png')}}" alt="ICON">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                                        <!-- Block2 -->
                                        <div class="block2">
                                            <div class="block2-pic hov-img0">
                                                <img src="{{asset('front/front2/images/product-02.jpg')}}" alt="IMG-PRODUCT">
    
                                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                    Quick View
                                                </a>
                                            </div>
    
                                            <div class="block2-txt flex-w flex-t p-t-14">
                                                <div class="block2-txt-child1 flex-col-l ">
                                                    <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                        Herschel supply
                                                    </a>
    
                                                    <span class="stext-105 cl3">
                                                        $35.31
                                                    </span>
                                                </div>
    
                                                <div class="block2-txt-child2 flex-r p-t-3">
                                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                        <img class="icon-heart1 dis-block trans-04" src="{{asset('front/front2/images/icons/icon-heart-01.png')}}" alt="ICON">
                                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('front/front2/images/icons/icon-heart-02.png')}}" alt="ICON">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    
                                </div>
                            </div>
                        </div>
    
                        <!-- - -->
                        <div class="tab-pane fade" id="featured" role="tabpanel">
                            <!-- Slide2 -->
                            <div class="wrap-slick2">
                                <div class="slick2">
                                    <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                                        <!-- Block2 -->
                                        <div class="block2">
                                            <div class="block2-pic hov-img0">
                                                <img src="{{asset('front/front2/images/product-09.jpg')}}" alt="IMG-PRODUCT">
    
                                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                    Quick View
                                                </a>
                                            </div>
    
                                            <div class="block2-txt flex-w flex-t p-t-14">
                                                <div class="block2-txt-child1 flex-col-l ">
                                                    <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                        Converse All Star Hi Plimsolls
                                                    </a>
    
                                                    <span class="stext-105 cl3">
                                                        $75.00
                                                    </span>
                                                </div>
    
                                                <div class="block2-txt-child2 flex-r p-t-3">
                                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                        <img class="icon-heart1 dis-block trans-04" src="{{asset('front/front2/images/icons/icon-heart-01.png')}}" alt="ICON">
                                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('front/front2/images/icons/icon-heart-02.png')}}" alt="ICON">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    
                                </div>
                            </div>
                        </div>
    
                        <!-- - -->
                        <div class="tab-pane fade" id="sale" role="tabpanel">
                            <!-- Slide2 -->
                            <div class="wrap-slick2">
                                <div class="slick2">
                                    <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                                        <!-- Block2 -->
                                        <div class="block2">
                                            <div class="block2-pic hov-img0">
                                                <img src="{{asset('front/front2/images/product-02.jpg')}}" alt="IMG-PRODUCT">
    
                                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                    Quick View
                                                </a>
                                            </div>
    
                                            <div class="block2-txt flex-w flex-t p-t-14">
                                                <div class="block2-txt-child1 flex-col-l ">
                                                    <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                        Herschel supply
                                                    </a>
    
                                                    <span class="stext-105 cl3">
                                                        $35.31
                                                    </span>
                                                </div>
    
                                                <div class="block2-txt-child2 flex-r p-t-3">
                                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                        <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                   
                                </div>
                            </div>
                        </div>
    
                        <!-- - -->
                        <div class="tab-pane fade" id="top-rate" role="tabpanel">
                            <!-- Slide2 -->
                            <div class="wrap-slick2">
                                <div class="slick2">
                                    <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                                        <!-- Block2 -->
                                        <div class="block2">
                                            <div class="block2-pic hov-img0">
                                                <img src="{{asset('front/front2/images/product-03.jpg')}}" alt="IMG-PRODUCT">
    
                                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                    Quick View
                                                </a>
                                            </div>
    
                                            <div class="block2-txt flex-w flex-t p-t-14">
                                                <div class="block2-txt-child1 flex-col-l ">
                                                    <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                        Only Check Trouser
                                                    </a>
    
                                                    <span class="stext-105 cl3">
                                                        $25.50
                                                    </span>
                                                </div>
    
                                                <div class="block2-txt-child2 flex-r p-t-3">
                                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                        <img class="icon-heart1 dis-block trans-04" src="{{asset('front/front2/images/icons/icon-heart-01.png')}}" alt="ICON">
                                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('front/front2/images/icons/icon-heart-02.png')}}" alt="ICON">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    
        {{-- <div class="header-lunch parallax0 parallax100" style="background-image: url(&quot;front/front2/images/parallax1.jpg&quot;); background-position: center -20.3333px;">
            <div class="bg1-overlay t-center p-t-170 p-b-165">
                
            </div>
        </div> --}}
        <!-- Blog -->
        <section class="sec-blog bg0 p-t-60 p-b-90">
            <div class="container">
                <div class="p-b-66">
                    <h3 class="ltext-105 cl5 txt-center respon1">
                        Our Blogs
                    </h3>
                </div>
    
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-sm-6 col-md-4 p-b-40">
                            <div class="blog-item">
                                <div class="hov-img0">
                                    <a href="{{route('blogs', $post->id)}}">
                                        <img style="object-fit: cover;    height: 250px;
                                        width: 100%;" src="{{asset('images/post')}}/{{$post->image}}" alt="IMG-BLOG">
                                    </a>
                                </div>
        
                                <div class="p-t-15">
                                    <div class="stext-107 flex-w p-b-14">
                                        
                                        <span>
                                            <span class="cl4">
                                                on
                                            </span>
        
                                            <span class="cl5">
                                                    {{\Carbon\Carbon::parse($post->created_at)->format('d M Y')}}
                                            </span>
                                        </span>
                                    </div>
        
                                    <h4 class="p-b-12">
                                        <a href="{{route('blogs', $post->id)}}" class="mtext-101 cl5 hov-cl1 trans-04">
                                            {{$post->title}}
                                        </a>
                                    </h4>
        
                                    <p class="stext-108 cl6">
                                        {!!str_limit($post->content, '300', '.....')!!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


@endsection