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
                                        Welcome..
                                    </span>
                                </div>
                                    
                                <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                    <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
                                        Place For Sharing
                                    </h2>
                                </div>
                                    
                                <!-- <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                    <a href="{{route('shop')}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                        Shop Now
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
    
                    <div class="item-slick1" style="background-image: url(front/front2/images/slider2.jpg);">
                        <div class="container h-full">
                            <div class="flex-col-l-m h-full p-t-100 p-b-30">
                                <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                                    <span class="ltext-202 cl2 respon2">
                                        Our Special Beans
                                    </span>
                                </div>
                                    
                                <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                                    <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
                                        Freshly Roasted
                                    </h2>
                                </div>
                                    
                                <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                                    <a href="{{route('shop')}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
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
                                        Our Special Story
                                    </span>
                                </div>
                                    
                                <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                                    <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
                                        Only For You
                                    </h2>
                                </div>
                                    
                                <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                                    <a href="{{route('blog')}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                        Read Now
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
        <section class="sec-product bg0 p-t-100 p-b-50">
             <div class="container">
                <div class="p-b-32">
                    <h3 class="ltext-105 cl5 txt-center respon1">
                        New Products
                    </h3>
                </div>
    
                <div class="flex-w flex-sb-m p-b-52">
                    
    
                    
                  
                    
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
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    @endforeach
                </div>

                
               
            </div>
        </section> 
    
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
                                        {!!str_limit($post->content, '400', '.....')!!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


@endsection