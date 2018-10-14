@extends('admin.layouts.main')
@section('title', 'Edit Post')
@section('tinymce')
    @include('admin.layouts.partials.tinymce')
@endsection
@include('sweetalert::alert')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Post</h4>
                <p class="card-description"></p>
                <form action="{{route('post.update', $posts->id)}}" method="POST" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" value="{{$posts->title}}" type="text" class="form-control"  placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label hidden name="category_id" >Category</label>
                        <select hidden name="category_id"  class="form-control">
                            <option name="category_id" value="1">1</option>
                            <option name="category_id" value="1">2</option>
                        </select>
                    </div>
                     <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" value="" id="textarea" class="form-control"   rows="7">{{$posts->content}}</textarea>
                    </div>
                    <div class="form-group">
                       <label for="image">Image </label> 
                       <input type="file" name="image" value="{{$posts->image}}" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-success mr-2" value="Submit">
                    {{-- <button type="submit" class="btn btn-success mr-2">Submit</button> --}}
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection