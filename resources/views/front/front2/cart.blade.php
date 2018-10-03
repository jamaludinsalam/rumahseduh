@extends('layouts.layout2')

@section('content')

<!-- Shoping Cart -->
<form class="bg0 p-t-75 p-b-85" action="" method="post">
    {{csrf_field()}}
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                <div class="m-l-25 m-r--38 m-lr-0-xl">
                    <div class="wrap-table-shopping-cart">
                        <table class="table-shopping-cart">
                            <tr class="table_head">
                                <th class="column-1" style="width:100px">Product</th>
                                <th class="column-2"></th>
                                <th class="column-3">Price</th>
                                <th class="column-4">Quantity</th>
                                <th class="column-5">Total</th>
                                <th class="column-5">Action</th>
                            </tr>
                            @foreach($cartItems as $cartItem)
                            <tr class="table_row">
                                <td class="column-1">
                                    
                                    <div class="how-itemcart1">
                                       
                                        <img src="{{$cartItem->options->image}}" alt="IMG">
                                        
                                    </div>
                                   
                                </td>
                                <td class="column-2">{{$cartItem->name}}</td>
                                <td class="column-3">{{$cartItem->price}}</td>
                                <td class="column-4">
                                    <form action="{{route('cart.update', $cartItem->rowId)}}" method="PUT">
                                        <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                <a class="cart_quantity_up" href=""><i class="fs-16 zmdi zmdi-minus"></i></a>
                                            </div>

                                            <input class="mtext-104 cl3 txt-center num-product" type="number" name="qty" value="{{$cartItem->qty}}">

                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                               <a class="cart_quantity_dow" href=""><i class="fs-16 zmdi zmdi-plus"></i></a>
                                            </div>  
                                        </div>
                                        <button type="submit">Ok</button>
                                        {{-- <input type="submit" class="btn btn-primary btn-sm" value="Ok"> --}}
                                    </form>
                                </td>
                                <td class="column-5">{{$cartItem->subtotal}}</td>
                                <td>
                                    <form action="{{route('cart.destroy',$cartItem->rowId)}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button type="submit"><i class="zmdi zmdi-delete c15 zmdi-lg flex-c-m"></i></button>
                                    
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            
                        </table>
                    </div>

                    <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                        <div class="flex-w flex-m m-r-20 m-tb-5">
                            <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">
                                
                            <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                Apply coupon
                            </div>
                        </div>

                        <div class="flex-c-m stext-101 cl5 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                            Update Cart
                        </div>
                    </div>
                </div>
            </div>
            @foreach($cartItems->take(1) as $cartItem)
            <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                    <h4 class="mtext-109 cl5 p-b-30">
                        Cart Totals
                    </h4>

                    <div class="flex-w flex-t bor12 p-b-13">
                        <div class="size-208">
                            <span class="stext-110 cl5">
                                Subtotal:
                            </span>
                        </div>

                        <div class="size-209">
                            <span class="mtext-110 cl5">
                               {{Cart::subtotal()}}
                            </span>
                        </div>
                    </div>

                    <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                        <div class="size-208 w-full-ssm">
                            <span class="stext-110 cl5">
                                Shipping:
                            </span>
                        </div>

                        <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                            <p class="stext-111 cl6 p-t-2">
                                
                            </p>
                            
                            <div class="p-t-15">
                                <span class="stext-112 cl8">
                                    Enter Full Your Address
                                </span>

                                {{-- <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                    <select class="js-select2" name="time">
                                        <option>Select a country...</option>
                                        <option>USA</option>
                                        <option>UK</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div> --}}
                                <div class="bor8 bg0 m-b-12">
                                    <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="address" placeholder="Address">
                                </div>
                                <div class="bor8 bg0 m-b-12">
                                    <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="province" placeholder="Province">
                                </div>
                                <div class="bor8 bg0 m-b-12">
                                    <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="city" placeholder="City">
                                </div>

                                <div class="bor8 bg0 m-b-22">
                                    <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="postcode" placeholder="Postcode / Zip">
                                </div>
                                
                                
                                    
                            </div>
                        </div>
                    </div>

                    <div class="flex-w flex-t p-t-27 p-b-33">
                        <div class="size-208">
                            <span class="mtext-101 cl5">
                                Total:
                            </span>
                        </div>

                        <div class="size-209 p-t-1">
                            <span class="mtext-110 cl5">
                                    {{Cart::total()}}
                            </span>
                        </div>
                    </div>

                    <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                        Proceed to Checkout
                    </button>
                    
                </div>
            </div>
            @endforeach
        </div>
    </div>
</form>


@endsection