@extends('layouts.layout2')

@section('content')
<div class="header-lunch parallax0 parallax100" style="background-image: url(&quot;front/front2/images/parallax1.jpg&quot;); background-position: center -20.3333px;">
    <div class="bg1-overlay t-center p-t-170 p-b-165">
            <h2 class="tit4 t-center">Your Order</h2>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"></h4>
                <p class="card-description">
                    
                <code></code>
                </p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Profile</th>
                                <th>Order ID</th>
                                <th>Time</th>
                                <th>Invoice</th>
                                <th>Transfer Pict</th>
                                <th>Status</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td style="vertical-align: middle">{{$order->user->name}}</td>
                                <td style="vertical-align: middle">INV{{$order->id}}</td>
                                <td style="vertical-align: middle">{{$order->created_at}}</td>
                                <td style="vertical-align: middle"><a href="{{url('invoice',$order->id)}}"><img style="width:100px; height:100px" src="{{asset('images/transfer/invoice.png')}}" alt=""></a></td>
                                <td style="vertical-align: middle; width:200px">
                                    <form action="{{route('update.image', $order->id)}}" method="POST" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        {{ method_field('PATCH') }}
                                        <div class="row form-group">
                                            <div class="item-slick3" data-thumb="{{asset('images/transfer')}}/{{$order->image}}">
                                            <div class="wrap-pic-w pos-relative">
                                                <img style="width:100px; height:100px" src="{{asset('images/transfer')}}/{{$order->image}}" alt="IMG-PRODUCT">
                                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset('images/transfer')}}/{{$order->image}}">
                                                        <i class="fa fa-expand"></i>
                                                    </a>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <input  type="file" name="image">
                                        </div>
                                        <div class="row">
                                            <input type="submit" class="btn btn-info btn-fw" value="Upload">
                                            {{-- <button type="button" class="btn btn-info btn-fw">
                                                <i class="mdi mdi-upload"></i>Upload
                                            </button> --}}
                                        </div>
                                    
                                    {!! Form::close() !!}
                                    
                                </td>
                                
                                <td style="vertical-align: middle">
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
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection