@extends('admin.layouts.main')

@include('sweetalert::alert')

@section('content')

<div class="row">
  <div class="container">
    <form action="/justapage" method="post">
      {{ csrf_field() }}
      <button type="submit">Click me!</button>
  </form>
  </div>
</div>

<div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h3 >Products</h3>
            <br>
            <button class="btn btn-success btn-fw" data-toggle="modal" data-target="#exampleModal">New Product
                    <i class="mdi mdi-plus"></i>
            </button>
            <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
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
                            <p class="card-description">
                              
                            </p>
                          <form action="{{route('product.store')}}" method="post">
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

                    <!--============ /modal body =========--> 
                    </div>
                    
                  </div>
                </div>
              </div>


            <div class="table-responsive">
              <table class="table table-striped" >
                <thead>
                  <tr>
                    <th>
                      No.
                    </th>
                    <th>
                      Product
                    </th>
                    <th>
                      Price
                    </th>
                    <th>
                      Category
                    </th>
                    <th>
                        Image
                    </th>
                    <th style="word-wrap:break-word">
                       Description
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($products as $product)
                  <tr>
                    <td>
                      {{$product->id}}
                    </td>
                    
                    <td>
                        {{$product->name}}
                    </td>
                    <td>
                       Rp. {{$product->price}}
                    </td>
                    
                    <td>
                        {{$product->category->name}}
                    </td>
                  
                    <td class="py-1">
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
                                        <p class="card-description">
                                          
                                        </p>
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
                    <br>
                    <div class="row">
                      @foreach($product->images as $image)
                        <img style="height:50px; width:50px" src="{{url($image->image_path)}}" alt="image" />
                    <form action="{{route('product.destroy', $image->id)}}" method="POST">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}  
                          <button type="submit"><a href=""><i class="mdi mdi-delete"></i></a></button>
                        </form>
                        <br>
                        @endforeach
                      </div>
                    </td>
                    <td wrap style="word-wrap:break-word"> 
                        {{$product->description}}
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>



      <script>
      
      </script>
@endsection