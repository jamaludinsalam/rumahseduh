@extends('admin.layouts.main')
@section('tinymce')
    @include('admin.layouts.partials.tinymce')
@endsection
@include('sweetalert::alert')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Product</h4>
                <p class="card-description"></p>
                    <form action="{{route('upload.images', $product->id)}}" method="post" class="dropzone" id="my-awesome-dropzone-{{$product->id}}">
                        {{csrf_field()}}
                      <input type="file" name="file" >
                    </form>
            </div>
        </div>
    </div>
</div>
    

@endsection