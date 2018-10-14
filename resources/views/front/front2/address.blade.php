@extends('layouts.layout2')

@section('content')
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('../front/front2/images/bg-02.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
       Shipping Info
    </h2>
</section>	
<section class="sec-blog bg0 p-t-60 p-b-90">
        <div class="container">

        <div class="col-md-12 col-md-offset-6">
            <h3></h3>
            
                
            <form action="{{route('address.store')}}" method="POST" >
                {{csrf_field()}}
                <div class="form-group">
                    <label for="addressline">Receipt's Name</label>
                    <input type="text" name="receipt" class="form-control">
                </div>
                <div class="form-group">
                    <label for="city">Full Address</label>
                    <input type="text" name="address" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="province">Phone Number</label>
                    <input type="text" name="phone" class="form-control">
                </div>
               
                
                <button type="submit" class="btn btn-info btn-fw">Submit</button>
                
            </form>
        </div>
    </div>
</section>

@endsection