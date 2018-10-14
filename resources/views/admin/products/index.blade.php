@extends('admin.layouts.main')
@section('title', 'Products')
@include('sweetalert::alert')

@section('content')



<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h3>
        <a href="{{route('product.create')}}">
          <button class="btn btn-success btn-fw" data-toggle="modal" data-target="#exampleModal">New Product
          <i class="mdi mdi-plus"></i></button>
        </a> 
      </h3>
      <br>
      <div class="table-responsive">
        <table class="table table-striped" >
          <thead>
            <tr>
              <th>No.</th>
              <th>Product</th>
              <th>Price</th>
              <th>Category</th>
              <th>Image</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $key=>$product)
            <tr>
              <td style="width:50px">{{++$key}}</td>
              <td style="white-space: -o-pre-wrap; 
              word-wrap: break-word;
              white-space: pre-wrap; 
              white-space: -moz-pre-wrap; 
              white-space: -pre-wrap; width:300px" >{{$product->name}}</td>
              <td>Rp. {{$product->price}}</td>
              <td>{{$product->category->name}}</td>
              <td  style="width:350px">
                <div class="row">
                  @foreach($product->images as $image)
                    <div class="item-slick3" data-thumb="{{url($image->image_path)}}">
                      <div class="wrap-pic-w pos-relative">
                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{url($image->image_path)}}">
                          <img style="height:50px; width:50px" src="{{url($image->image_path)}}" alt="IMG-PRODUCT">
                        </a>
                      </div>
                    </div>
                    {{-- <img style="height:50px; width:50px" src="{{url($image->image_path)}}" alt="image" /> --}}
                      <form action="{{route('product.destroy', $image->id)}}" method="POST" enctype="multipart/form-data">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}  
                        <button type="submit"><a href=""><i class="mdi mdi-delete"></i></a></button>
                      </form>
                      <br>
                  @endforeach
                </div>
                <br>
                
                <div class="row">
                  <button type="button" class="btn btn-outline-info btn-fw" data-toggle="modal" data-target="#upload-image-{{$product->id}}" data-item-id="{{$product->id}}">
                    <i class="mdi mdi-upload"></i>Upload
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="upload-image-{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="uploadModalLabel">Add New Product</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <!--============ modal body =========--> 
                          <div class="col-md-12  grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body">
                                <h4 class="card-title"></h4>
                                <p class="card-description"></p>
                                  <form action="{{route('upload.images', $product->id)}}" method="post" class="dropzone" id="my-awesome-dropzone-{{$product->id}}">
                                      {{csrf_field()}}
                                    <input type="file" name="file" >
                                  </form>
                                <button type="submit" id="btnmodal" class="btn btn-success mr-2"> </button>
                              </div>
                            </div>
                          </div>

                          <!--============ /modal body =========--> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              <td style="white-space: -o-pre-wrap; 
              word-wrap: break-word;
              white-space: pre-wrap; 
              white-space: -moz-pre-wrap; 
              white-space: -pre-wrap; width:300px">{!! str_limit($product->description, 600, '.....') !!}</td>
              <td style="width:40px"> 
                
                <div class="row">
                    <a href="{{route('shops', $product->id)}}" class="btn btn-warning btn-fw">View</a>
                </div>
                <br>
                <div class="row">
                    <form action="{{route('product.delete', $product->id)}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <input type="submit" value="Delete" class="btn btn-danger  btn-fw">
                    </form>
                </div>
              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



     
@endsection