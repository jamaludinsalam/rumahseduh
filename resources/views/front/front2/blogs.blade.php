@extends('layouts.layout2')

@section('content')

<!-- Content page -->
<section class="bg0 p-t-52 p-b-20">
    <div class="container">
        @foreach($posts as $post)
        <div class="row">
            <div class="col-md-8 col-lg-9 p-b-80">
                <div class="p-r-45 p-r-0-lg">
                    <!--  -->
                    <div class="wrap-pic-w how-pos5-parent">
                        <img src="{{asset('images/post')}}/{{$post->image}}" alt="IMG-BLOG">

                        <div class="flex-col-c-m size-123 bg9 how-pos5">
                            <span class="ltext-107 cl5 txt-center">
                                {{\Carbon\Carbon::parse($post->created_at)->format('d')}}
                            </span>

                            <span class="stext-109 cl3 txt-center">
                                {{\Carbon\Carbon::parse($post->created_at)->format('M Y')}}
                            </span>
                        </div>
                    </div>

                    <div class="p-t-32">
                        <span class="flex-w flex-m stext-111 cl5 p-b-19">
                            <span>
                                <span class="cl4">By</span> Coffee House Cafe 
                                <span class="cl12 m-l-4 m-r-6">|</span>
                            </span>

                            <span>
                                {{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}
                                <span class="cl12 m-l-4 m-r-6">|</span>
                            </span>

                            
                        </span>

                        <h4 class="ltext-109 cl5 p-b-28">
                            {{$post->title}}
                        </h4>

                        <p class="stext-117 cl6 p-b-26">
                            {{$post->content}}
                        </p>

                        
                    </div>

                    
                    <!--  -->
                    
                </div>
            </div>

            <div class="col-md-4 col-lg-3 p-b-80">
                <div class="side-menu">
                    

                    

                    <div class="p-t-65">
                        <h4 class="mtext-112 cl5 p-b-33">
                            Other Articles
                        </h4>
                        @foreach($posts as $post)
                            <ul>
                                <li class="flex-w flex-t p-b-30">
                                    <a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
                                        <img style="width:100px; height:90px" src="{{asset('images/post')}}/{{$post->image}}" alt="PRODUCT">
                                    </a>

                                    <div class="size-215 flex-col-t p-t-8">
                                        <a href="#" class="stext-116 cl8 hov-cl1 trans-04">
                                            {{$post->title}}
                                        </a>

                                        <span class="stext-116 cl6 p-t-20">
                                            {{ str_limit($post->content, 50, '.....')}}
                                        </span>
                                    </div>
                                </li>

                            </ul>
                        @endforeach
                    </div>

                    

                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>	
	


@endsection