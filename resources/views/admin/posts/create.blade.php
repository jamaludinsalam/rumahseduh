@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Post</h4>
                <p class="card-description"></p>
                <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" type="text" class="form-control"  placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label name="category_id" >Category</label>
                        <select name="category_id"  class="form-control">
                            <option name="category_id" value="1">1</option>
                            <option name="category_id" value="1">2</option>
                        </select>
                    </div>
                    
                    {{-- <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="image" disabled class="file-upload-default">
                        <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info"  placeholder="Upload Image">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                        </span>
                        </div>
                    </div> --}}
                    
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" class="form-control"  rows="4"></textarea>
                    </div>
                    <div class="form-group">
                       <label for="image">Image </label> 
                       <input type="file" name="image" class="form-control">
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