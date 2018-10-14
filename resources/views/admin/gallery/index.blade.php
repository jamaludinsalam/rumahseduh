@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Image</h4>
                <p class="card-description"></p>
                <h3 ><a href="{{route('gallery.create')}}"> <button class="btn btn-success btn-fw" data-toggle="modal" data-target="#exampleModal">New Image
                        <i class="mdi mdi-plus"></i>
                </button></a></h3>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th >No</th>
                                <th>Created At</th>
                                <th>Image</th>
                                <th>Action</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($galleries as $key=>$gallery)
                            <tr>
                                <td style="width:50px">{{++$key}}</td>
                                <td>{{\Carbon\Carbon::parse($gallery->created_at)->diffForHumans()}}</td>
                                <td>
                                    <div class="item-slick3" data-thumb="{{asset('images/gallery')}}/{{$gallery->image}}">
                                        <div class="wrap-pic-w pos-relative">
                                                <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset('images/gallery')}}/{{$gallery->image}}">
                                                    <img style="width:100px; height:100px; object-fit: cover;" src="{{asset('images/gallery')}}/{{$gallery->image}}" alt="IMG-PRODUCT">
                                                </a>
                                        </div>
                                    </div>
                                </td>
                                
                                
                                <td style="width:50px"> 
                                    
                                    <div class="row">
                                        <form action="{{route('gallery.destroy', $gallery->id)}}" method="POST" enctype="multipart/form-data">
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