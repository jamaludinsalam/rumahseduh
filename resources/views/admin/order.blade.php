@extends('admin.layouts.main')
@section('title', 'Order')
@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Order ID</th>
                                <th>Total</th>
                                <th>Invoice</th>
                                <th>Transfer Pict</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{$order->user->name}}</td>
                                <td>INV{{$order->id}}</td>
                                <td>{{$order->total}}</td>
                                <td><a href="{{route('order.update',$order->id)}}"><img style="width:100px; height:100px" src="{{asset('images/transfer/invoice.png')}}" alt=""></a></td>
                                <td>
                                    <div class="item-slick3" data-thumb="{{asset('images/transfer')}}/{{$order->image}}">
                                    <div class="wrap-pic-w pos-relative">
                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset('images/transfer')}}/{{$order->image}}">
                                                <img style="width:100px; height:100px" src="{{asset('images/transfer')}}/{{$order->image}}" alt="IMG-PRODUCT">
                                            
                                                
                                            </a>
                                    </div>
                                    </div>
                                </td>
                                <td>
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
                                <td style="width:200px">
                                    {!! Form::open(['route' => ['order.update', $order->id], 'method' => 'PUT' ]) !!} 
                                    
                                    <div class="form-group">
                                        <select name="status" class="form-control" aria-placeholder="Select Action" >
                                                <option  disabled selected hidden>Please Select Action</option>
                                                <option name="status" value="0">Unpaid</option>
                                                <option name="status"  value="1">Processing</option>
                                                <option name="status"  value="2">Delivered</option>
                                        </select>
                                        <input type="submit" value="OK" class="btn btn-info btn-block">
                                    </div>
                                    <div class="form-group">
                                        
                                    </div>
                                    {{-- <div><a href="" class="btn btn-success">Ok</a></div> --}}
                                    {!! Form::close() !!}
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