@extends('admin.layouts.main')
@section('title', 'Create Menu')
@section('tinymce')
    @include('admin.layouts.partials.tinymce')
@endsection

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Menu</h4>
                <p class="card-description"></p>
                <form action="{{route('menu.store')}}" method="POST" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category_id" name="category_id">
                        <option >Please Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <input type="submit" id="btnmodal" class="btn btn-success mr-2"> 
                </form>
            </div>
        </div>
    </div>
</div>

@endsection