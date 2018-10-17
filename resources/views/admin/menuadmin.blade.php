@extends('admin.layouts.main')
@section('title', 'Menu')
@section('content')


<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Menu</h4>
                <a href="{{route('menu.create')}}"><button class="btn btn-success btn-fw" >New Menu
                        <i class="mdi mdi-plus"></i>
                </button></a>
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
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($coffees as $key=>$coffee)
                            <tr>
                                <td>{{++$key}} </td>
                                <td>{{$coffee->name}}</td>
                                <td>{{$coffee->price}}</td>
                                <td>{!!$coffee->description!!}</td>
                                <td style="width:50px"> 
                                    
                                    <div class="row">
                                        <a href="{{route('menu.edit', $coffee->id)}}" class="btn btn-warning btn-fw">Edit</a>
                                        
                                    </div>
                                    <br>
                                    <div class="row">
                                        <form action="{{route('menu.destroy', $coffee->id)}}" method="POST" enctype="multipart/form-data">
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
                                    <td>{!!$manualbrew->description!!}</td>
                                    <td style="width:50px"> 
                                        
                                        <div class="row">
                                            <a href="{{route('menu.edit', $manualbrew->id)}}" class="btn btn-warning btn-fw">Edit</a>
                                            
                                        </div>
                                        <br>
                                        <div class="row">
                                            <form action="{{route('menu.destroy', $manualbrew->id)}}" method="POST" enctype="multipart/form-data">
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
                                    <td>{!!$other->description!!}</td>
                                    <td style="width:50px"> 
                                        
                                        <div class="row">
                                            <a href="{{route('menu.edit', $other->id)}}" class="btn btn-warning btn-fw">Edit</a>
                                            
                                        </div>
                                        <br>
                                        <div class="row">
                                            <form action="{{route('menu.destroy', $other->id)}}" method="POST" enctype="multipart/form-data">
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
                                    <td>{!!$main->description!!}</td>
                                    <td style="width:50px"> 
                                        
                                        <div class="row">
                                            <a href="{{route('menu.edit', $main->id)}}" class="btn btn-warning btn-fw">Edit</a>
                                            
                                        </div>
                                        <br>
                                        <div class="row">
                                            <form action="{{route('menu.destroy', $main->id)}}" method="POST" enctype="multipart/form-data">
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
                                    <td>{!!$dessert->description!!}</td>
                                    <td style="width:50px"> 
                                        
                                        <div class="row">
                                            <a href="{{route('menu.edit', $dessert->id)}}" class="btn btn-warning btn-fw">Edit</a>
                                            
                                        </div>
                                        <br>
                                        <div class="row">
                                            <form action="{{route('menu.destroy', $dessert->id)}}" method="POST" enctype="multipart/form-data">
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
</div>

    
@endsection