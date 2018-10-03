@extends('admin.layouts.main')

@section('content')

<script>
 
</script>


<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h3 >Category</h3>
      <br>
      <button class="btn btn-success btn-fw" data-toggle="modal" data-target="#exampleModal">New Category<i class="mdi mdi-plus"></i></button>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <!--============ modal body =========--> 
              <div class="col-md-12  grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"></h4>
                    <p class="card-description"></p>
                    <form action="{{route('category.store')}}" method="post">
                      {{csrf_field()}}
                      <div class="form-group">
                        <label for="name">Category Name</label>
                          <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Name">
                      </div>
                      <input type="submit" class="btn btn-success mr-2"> >
                      <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              <!--============ /modal body =========--> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Drinks</h3>
        <br>
        <div class="table-responsive">
          <table class="table table-striped" >
            <thead>
              <tr>
                <th>No.</th>
                <th>Name</th>
              </tr>
            </thead>
            <tbody>
              @foreach($drinks as $key=>$drink)
              <tr>
                <td>{{++$key}}</td>
                <td>{{$drink->name}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Foods</h3>
          <br>
          <div class="table-responsive">
            <table class="table table-striped" >
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                </tr>
              </thead>
              <tbody>
                @foreach($foods as $key=>$food)
                <tr>
                  <td>{{++$key}} </td>
                  <td>{{$food->name}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Products</h3>
          <br>
          <div class="table-responsive">
            <table class="table table-striped" >
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                </tr>
              </thead>
              <tbody>
                @foreach($products as $key=>$product)
                <tr>
                  <td>{{++$key}}</td>
                  <td>{{$product->name}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>






      
@endsection