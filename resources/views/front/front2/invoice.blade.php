@extends('layouts.layout2')

@section('content')

{{-- <div class="row" style="margin-top:50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    
                    <h2 class="cl5">Invoice for purchase #33221</h2>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-12 col-md-3 col-lg-3 pull-left">
                        <div class="panel panel-default height">
                            <div class="panel-heading">Billing Details</div>
                            <div class="panel-body">
                                <strong>David Peere:</strong><br>
                                1111 Army Navy Drive<br>
                                Arlington<br>
                                VA<br>
                                <strong>22 203</strong><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-lg-3">
                        <div class="panel panel-default height">
                            <div class="panel-heading">Payment Information</div>
                            <div class="panel-body">
                                <strong>Card Name:</strong> Visa<br>
                                <strong>Card Number:</strong> ***** 332<br>
                                <strong>Exp Date:</strong> 09/2020<br>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>Order summary</strong></h3>
                </div>
                
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>Item Name</strong></td>
                                    <td class="text-center"><strong>Item Price</strong></td>
                                    <td class="text-center"><strong>Item Quantity</strong></td>
                                    <td class="text-right"><strong>Total</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Samsung Galaxy S5</td>
                                    <td class="text-center">$900</td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">$900</td>
                                </tr>
                                <tr>
                                    <td>Samsung Galaxy S5 Extra Battery</td>
                                    <td class="text-center">$30.00</td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">$30.00</td>
                                </tr>
                                <tr>
                                    <td>Screen protector</td>
                                    <td class="text-center">$7</td>
                                    <td class="text-center">4</td>
                                    <td class="text-right">$28</td>
                                </tr>
                                <tr>
                                    <td class="highrow"></td>
                                    <td class="highrow"></td>
                                    <td class="highrow text-center"><strong>Subtotal</strong></td>
                                    <td class="highrow text-right">$958.00</td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"><strong>Shipping</strong></td>
                                    <td class="emptyrow text-right">$20</td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"><i class="fa fa-barcode iconbig"></i></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"><strong>Total</strong></td>
                                    <td class="emptyrow text-right">$978.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>


<style>
    .height {
        min-height: 200px;
    }
    
    .icon {
        font-size: 47px;
        color: #5CB85C;
    }
    
    .iconbig {
        font-size: 77px;
        color: #5CB85C;
    }
    
    .table > tbody > tr > .emptyrow {
        border-top: none;
    }
    
    .table > thead > tr > .emptyrow {
        border-bottom: none;
    }
    
    .table > tbody > tr > .highrow {
        border-top: 3px solid;
    }
    </style>
    
</div> --}}
<div class="sec-banner bg0 p-t-80 p-b-50" >
   
    <div class="container col-md-5">
        @foreach($orders as $order)
        <div class="card">
            <div class="card-header">
                Invoice ID :
                <strong>INV{{$order->id}}</strong> 
                <span class="float-right"> <strong>Status:  </strong>
                    <label class=" <?php if($order->status == 0){
                            echo "badge badge-danger";
                        } elseif($order->status == 1){
                            echo "badge badge-warning";
                        } else {
                            "";
                        } ?>
                        <?php if($order->status == 2){
                            echo "badge badge-success";
                        } ?>
                        ">
                        <?php if($order->status == 0){
                            echo "Unpaid";
                        } elseif($order->status == 1){
                            echo "Processing";
                        } else {
                            echo "";
                        } ?>
                        
                        <?php if($order->status == 2){
                            echo "Delivered";
                        } ?>
                    </label>
                </span>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        
                        <h6 class="mb-3">From:</h6>
                        <div>
                        <strong>Webz Poland</strong>
                        </div>
                        <div></div>
                        <div>71-101 Szczecin, Poland</div>
                        <div>Email: info@webz.com.pl</div>
                        <div>Phone: +48 444 666 3333</div>
                        
                    </div>
        
                    <div class="col-sm-6">
                        <h6 class="mb-3">To:</h6>
                        <div>
                            <strong>Bob Mart</strong>
                        </div>
                        <div>Attn: Daniel Marek</div>
                        <div>43-190 Mikolow, Poland</div>
                        <div>Email: marek@daniel.com</div>
                        <div>Phone: +48 123 456 789</div>
                    </div>
                </div>
        
                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Item</th>
                                <th>Description</th>
                                <th class="center">Qty</th>
                                <th class="right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->orderItems as $orderItem)
                            <tr>
                                <td class="center">1</td>
                                <td class="left strong">{{$orderItem->name}}</td>
                                <td class="left">{{$orderItem->description}}</td>
                                <td class="center">{{$orderItem->pivot->qty}}</td>
                                <td class="right">{{$orderItem->pivot->total}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5"></div>
                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                           
                            <tr>
                                <td class="left">
                                    <strong>Total</strong>
                                </td>
                                <td class="right">
                                    <strong>{{$order->total}}</strong>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection