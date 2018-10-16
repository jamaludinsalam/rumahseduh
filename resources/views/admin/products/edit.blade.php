<!-- @extends('admin.layouts.main')
@section('title', 'Create Products')
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
                    <form action="{{route('product.update', $product->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" value= "{{$product->name}}"class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" id="category_id" name="category_id">
                            <option >Please Select Category</option>
                            @foreach($categories as $category)
                            <option value="{{$product->$category->id}}">{{$category->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" value= "{{$products->name}}"class="form-control" id="price" name="price" placeholder="Price">
                        </div>

                        
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" value= "{{$products->description}}"id="description" name="description" rows="3"></textarea>
                        </div>

                        
                        <input type="submit" id="btnmodal" class="btn btn-success mr-2"> 
                    </form>
            </div>
        </div>
    </div>
</div>

@endsection -->