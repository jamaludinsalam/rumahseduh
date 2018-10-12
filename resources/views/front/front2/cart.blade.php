@extends('layouts.layout2')

@section('content')

<!-- Shoping Cart -->
{{-- <form class="bg0 p-t-75 p-b-85" action="" method="post">
    {{csrf_field()}} --}}
<div class="sec-banner bg0 p-t-80 p-b-50" >
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
                                <th class="column-6">Action</th>
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
                                    {!! Form::open(['route' => ['cart.update', $cartItem->rowId], 'method' => 'PUT' ]) !!} 
                                    <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                        </div>

                                        <input type="text" name="qty" value="{{$cartItem->qty}}" class="mtext-104 cl3 txt-center num-product" >

                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                        </div>  
                                    </div>
                                </td>
                                <td class="column-5">{{$cartItem->subtotal}}</td>
                                <td class="column-6">
                                    
                                            
                                        {{-- <button type="submit" class="flex-c-m stext-1000 cl5 size-1000 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                                                Update
                                            </button> --}}
                                        <input type="submit" value="Update" class="flex-c-m stext-1000 cl5 size-1000 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10" >
                                    
                                            {!! Form::close() !!}
                                    <div class="form-group">
                                        <form action="{{route('cart.destroy',$cartItem->rowId)}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="flex-c-m stext-1000 cl5 size-1000 bg8 bor13 hov-btn1000 p-lr-15 trans-04 pointer m-tb-10">Delete</button>
                                        </form>
                                        
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                            
                        </table>
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
                    <div class="flex-w flex-t bor12 p-b-13">
                        <div class="size-208">
                            <span class="stext-110 cl5">
                               Total Items:
                            </span>
                        </div>
    
                        <div class="size-209">
                            <span class="mtext-110 cl5">
                                {{Cart::count()}}
                            </span>
                        </div>
                    </div>

                    <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                        <div class="size-208 w-full-ssm">
                            
                        </div>

                        <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                            <p class="stext-111 cl6 p-t-2">
                                
                            </p>
                            
                            
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

                    <a href="{{url('/checkout/address')}}"><button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                        Proceed to Checkout
                    </button></a>
                    
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
{{-- </form> --}}


@endsection