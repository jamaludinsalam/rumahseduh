@extends('admin.layouts.main')
@section('title', 'Menu')
@section('content')


<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Menu</h4>
                <button class="btn btn-success btn-fw" data-toggle="modal" data-target="#exampleModal">New Menu
                        <i class="mdi mdi-plus"></i>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Menu</h5>
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
                                            
                                        <form action="{{route('menu.store')}}" method="post">
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
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Coffee</h3>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped" >
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($coffees as $key=>$coffee)
                            <tr>
                                <td>{{++$key}} </td>
                                <td>{{$coffee->name}}</td>
                                <td>{{$coffee->price}}</td>
                                <td>{{$coffee->description}}</td>
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
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Manula Brew</h3>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped" >
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($manualbrews as  $key=>$manualbrew)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$manualbrew->name}}</td>
                                    <td>{{$manualbrew->price}}</td>
                                    <td>{{$manualbrew->description}}</td>
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
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Other</h3>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped" >
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($others as $key=>$other)
                                <tr>
                                    <td>{{++$key }}</td>
                                    <td>{{$other->name}}</td>
                                    <td>{{$other->price}}</td>
                                    <td>{{$other->description}}</td>
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
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Main Course</h3>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped" >
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mains as $key=>$main)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$main->name}}</td>
                                    <td>{{$main->price}}</td>
                                    <td>{{$main->description}}</td>
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
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Dessert</h3>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped" >
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($desserts as $key=>$dessert)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$dessert->name}}</td>
                                    <td>{{$dessert->price}}</td>
                                    <td>{{$dessert->description}}</td>
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