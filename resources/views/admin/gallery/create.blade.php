@extends('admin.layouts.main')
@section('title', 'Create New Gallery')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Image</h4>
                <p class="card-description"></p>
                <form action="{{route('gallery.store')}}" method="POST" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    
                    <div class="form-group">
                        <label for="image">Image </label> 
                        <input type="file" name="image" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-success mr-2" value="Submit">
                   
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection