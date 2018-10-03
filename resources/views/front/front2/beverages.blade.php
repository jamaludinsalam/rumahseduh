@extends('layouts.layout2')

@section('title', 'Beverages')

@section('active_beverages', 'active-menu')   

@section('content')


<div class="header-lunch parallax0 parallax100" style="background-image: url(&quot;front/front2/images/parallax1.jpg&quot;); background-position: center -20.3333px;">
    <div class="bg1-overlay t-center p-t-170 p-b-165">
            <h2 class="tit4 t-center">Beverages</h2>
    </div>
</div>
{{-- <div class="sec-banner bg0 p-t-80 p-b-50" style="background-color: #e4dede">
        <div class="container">
            <h2 class="tit4 t-center">Beverages</h2>
        </div>
</div> --}}
    <section class="section-mainmenu p-t-110 p-b-70 bg1-pattern">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-6 p-r-35 p-r-15-lg m-l-r-auto">
                    <div class="wrap-item-mainmenu p-b-22">
                        
                        <h3 class="tit-mainmenu tit10 p-b-25">
                            Coffee
                        </h3>
                        @foreach($coffees as $coffee)
                        <!-- Item mainmenu -->
                        <div class="item-mainmenu m-b-36">
                            <div class="flex-w flex-b m-b-3">
                                <a href="#" class="name-item-mainmenu txt21">
                                    {{$coffee->name}}
                                </a>

                                <div class="line-item-mainmenu bg3-pattern"></div>

                                <div class="price-item-mainmenu txt22 ">
                                    {{-- @money($coffee->price) --}}
                                    {{number_format($coffee->price,2,',', '.')}}
                                </div>
                            </div>

                            <span class="info-item-mainmenu txt23">
                                    {{$coffee->description}}
                            </span>
                        </div>
                        @endforeach
                    </div>

                    <div class="wrap-item-mainmenu p-b-22">
                        <h3 class="tit-mainmenu tit10 p-b-25">
                            Tea
                        </h3>
                        @foreach($teas as $tea)
                        <!-- Item mainmenu -->
                        <div class="item-mainmenu m-b-36">
                            <div class="flex-w flex-b m-b-3">
                                <a href="#" class="name-item-mainmenu txt21">
                                   {{$tea->name}}
                                </a>

                                <div class="line-item-mainmenu bg3-pattern"></div>

                                <div  class="price-item-mainmenu txt22 ">
                                   @money($tea->price)
                                </div>
                            </div>

                            <span class="info-item-mainmenu txt23">
                                    {{$tea->description}}
                            </span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-10 col-lg-6 p-l-35 p-l-15-lg m-l-r-auto">
                    <div class="wrap-item-mainmenu p-b-22">
                        <h3 class="tit-mainmenu tit10 p-b-25">
                            Other
                        </h3>

                        <!-- Item mainmenu -->
                        @foreach($others as $other)
                        <div class="item-mainmenu m-b-36">
                            <div class="flex-w flex-b m-b-3">
                                <a href="#" class="name-item-mainmenu txt21">
                                    {{$other->name}}
                                </a>

                                <div class="line-item-mainmenu bg3-pattern"></div>

                                <div class="price-item-mainmenu txt22 ">
                                    @money($other->price)
                                </div>
                            </div>

                            <span class="info-item-mainmenu txt23">
                                    {{$other->description}}
                            </span>
                        </div>
                        @endforeach

                      
                        
                    </div>

                    
                </div>
            </div>
        </div>
    </section>


     
@endsection