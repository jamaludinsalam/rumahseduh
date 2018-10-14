@extends('layouts.layout2')

@section('content')

<div class="row">
    <div class="container">
        <div class="small-6 small-centered columns">
            <h3>Shipping Info</h3>
            
                
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
               
                
                <button type="submit">Submit</button>
                
            </form>
        </div>
    </div>
</div>

@endsection