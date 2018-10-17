@extends('admin.layouts.main')
@section('title', 'Invoice')
@include('sweetalert::alert')

@section('content')

<div class="sec-banner bg0 p-t-80 p-b-50" >
   
        <div class="container col-md-12">
            @foreach($orders as $order)
            <div class="card">
                <div class="card-header">
                    Invoice ID :
                    <strong>INV{{$order->id}}</strong> 
                    <br>
                    Order Time :  
                    <strong>{{\Carbon\Carbon::parse($order->created_at)->format('d M Y')}}</strong>
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
                            
                            <h6 class="mb-3">To:</h6>
                            <div>
                            <strong>{{$order->receipt}}</strong>
                            </div>
                            <div></div>
                            <div>{{$order->address}}</div>
                            <div>{{$order->phone}}</div>
                               
                        </div>
            
                        
                    </div>
            
                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="center">No</th>
                                    <th>Item</th>
                                    <th>Description</th>
                                    <th class="center">Qty</th>
                                    <th class="right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order->orderItems as $key=>$orderItem)
                                <tr>
                                    <td class="center">{{++$key}}</td>
                                    <td class="left strong">{{$orderItem->name}}</td>
                                    <td style="white-space: -o-pre-wrap; 
                                    word-wrap: break-word;
                                    white-space: pre-wrap; 
                                    white-space: -moz-pre-wrap; 
                                    white-space: -pre-wrap;width:300px " class="left">{!!$orderItem->description!!}</td>
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