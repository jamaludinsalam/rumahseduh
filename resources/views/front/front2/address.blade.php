@extends('layouts.layout2')

@section('content')

<div class="row">
    <div class="container">
        <div class="small-6 small-centered columns">
            <h3>Shipping Info</h3>
            {{-- {!! Form::open(['route' => 'address.store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{ Form::label('addressline', 'Address line') }}
                    {{ Form::text('addressline', null, array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('city', 'City') }}
                    {{ Form::text('city', null, array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('province', 'Province') }}
                    {{ Form::text('province', null, array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('postcode', 'Zip') }}
                    {{ Form::text('postcode', null, array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('phone', 'Phone') }}
                    {{ Form::text('phone', null, array('class' => 'form-control')) }}
                </div>
                
                {{ Form::submit('Proceed to Invoice', array('class' => 'btn btn-success')) }}
                {{ Form::close() }}   --}}
                
            <form action="{{route('address.store')}}" method="POST" >
                {{csrf_field()}}
                <div class="form-group">
                    <label for="addressline">Address Line</label>
                    <input type="text" name="addressline" class="form-control">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" name="city" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="province">Province</label>
                    <input type="text" name="province" class="form-control">
                </div>
                <div class="form-group">
                    <label for="postcode">Zip</label>
                    <input type="text" name="postcode" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control">
                </div>
                
                <button type="submit">Submit</button>
                
            </form>
        </div>
    </div>
</div>

@endsection