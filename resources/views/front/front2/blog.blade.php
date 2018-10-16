@extends('layouts.layout2')
@section('title', 'News And Article')
@section('active_blog', 'active-menu')
@section('content')

<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('front/front2/images/bg-02.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        Blog
    </h2>
</section>	

<section class="sec-blog bg0 p-t-60 p-b-90">
    <div class="container">
        <div class="p-b-66">
            <h3 class="ltext-105 cl5 txt-center respon1">
                
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
                                {!!str_limit($post->content, '400', ' ...')!!}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Content page -->
<!-- {{-- <section class="bg0 p-t-62 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9 p-b-80">
                <div class="p-r-45 p-r-0-lg">
                    <!-- item blog -->
                    @foreach($posts as $post)
                        <div class="p-b-63">
                            <a href="{{route('blogs',$post->id)}}" class="hov-img0 how-pos5-parent">
                                <img src="{{asset('images/post')}}/{{$post->image}}" alt="IMG-BLOG">

                                <div class="flex-col-c-m size-123 bg9 how-pos5">
                                    <span class="ltext-107 cl5 txt-center">
                                        {{\Carbon\Carbon::parse($post->created_at)->format('d')}}
                                    </span>

                                    <span class="stext-109 cl3 txt-center">
                                        {{\Carbon\Carbon::parse($post->created_at)->format('M Y')}}
                                    </span>
                                </div>
                            </a>

                            <div class="p-t-32">
                                <h4 class="p-b-15">
                                    <a href="{{route('blogs',$post->id)}}" class="ltext-108 cl5 hov-cl1 trans-04">
                                        {{$post->title}}
                                    </a>
                                </h4>

                                <p class="stext-117 cl6">
                                        {!! str_limit($post->content, 500, '.....') !!}
                                </p>

                                <div class="flex-w flex-sb-m p-t-18">
                                    <span class="flex-w flex-m stext-111 cl5 p-r-30 m-tb-10">
                                        <span>
                                            <span class="cl4">By</span> Coffee House Cafe  
                                            <span class="cl12 m-l-4 m-r-6">|</span>
                                            <span class="cl4">Published On</span> {{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}
                                        </span>

                                        
                                    </span>

                                    <a href="{{route('blogs',$post->id)}}" class="stext-101 cl5 hov-cl1 trans-04 m-tb-10">
                                        Continue Reading

                                        <i class="fa fa-long-arrow-right m-l-9"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {!! $posts->render() !!}
                    
                    <!-- Pagination -->
                    <div class="flex-l-m flex-w w-full p-t-10 m-lr--7">
                        <a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7 active-pagination1">
                                
                        </a>

                        <a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7">
                            2
                        </a>
                    </div>
                </div>
            </div>
            

            <div class="col-md-4 col-lg-3 p-b-80">
                <div class="side-menu">
                    <div class="p-t-65">
                        <h4 class="mtext-112 cl5 p-b-33">
                            Other Articles
                        </h4>
                        @foreach($postside as $post)
                            <ul>
                                <li class="flex-w flex-t p-b-30">
                                    <a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
                                        <img style="width:100px; height:90px;     object-fit: cover;" src="{{asset('images/post')}}/{{$post->image}}" alt="PRODUCT">
                                    </a>

                                    <div class="size-215 flex-col-t p-t-8">
                                        <a href="#" class="stext-116 cl8 hov-cl1 trans-04">
                                            {{$post->title}}
                                        </a>

                                        
                                    </div>
                                </li>

                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
</section>	 --}} -->


@endsection