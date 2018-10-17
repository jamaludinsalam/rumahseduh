@extends('admin.layouts.main')
@section('title', 'Edit Menu')
@section('tinymce')
    @include('admin.layouts.partials.tinymce')
@endsection

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit menu</h4>
                <p class="card-description"></p>
                <form action="{{route('menu.update', $menus->id)}}" method="POST" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$menus->name}}" placeholder="Name">
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
                        <input type="text" class="form-control" id="price" name="price" value="{{$menus->price}}" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" value="" rows="3">{{$menus->description}}</textarea>
                    </div>
                    <input type="submit" id="btnmodal" class="btn btn-success mr-2"> 
                </form>
            </div>
        </div>
    </div>
</div>

@endsection