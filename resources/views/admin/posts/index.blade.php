@extends('admin.layouts.main')
@section('title', 'Posts')
@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Post</h4>
                <p class="card-description"></p>
                <h3 ><a href="{{route('post.create')}}"> <button class="btn btn-success btn-fw" data-toggle="modal" data-target="#exampleModal">New Post
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
                                <th style="width:50px">No</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Content</th>
                                <th>Created At</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $key=>$post)
                            <tr>
                                <td style="width:50px">{{++$key}}</td>
                                <td style="white-space: -o-pre-wrap; 
                                            word-wrap: break-word;
                                            white-space: pre-wrap; 
                                            white-space: -moz-pre-wrap; 
                                            white-space: -pre-wrap;width:300px ">{{$post->title}}
                                </td>
                                <td style="width: 150px">
                                    <div class="item-slick3" data-thumb="{{asset('images/post')}}/{{$post->image}}">
                                        <div class="wrap-pic-w pos-relative">
                                                <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset('images/post')}}/{{$post->image}}">
                                                    <img style="width:100px; height:100px; object-fit: cover;" src="{{asset('images/post')}}/{{$post->image}}" alt="IMG-PRODUCT">
                                                </a>
                                        </div>
                                    </div>
                                </td>
                                <td style="white-space: -o-pre-wrap; 
                                word-wrap: break-word;
                                white-space: pre-wrap; 
                                white-space: -moz-pre-wrap; 
                            white-space: -pre-wrap;width:200px ">{!! str_limit($post->content,650 , ' ...')!!}</td>
                                <td>{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</td>
                                <td style="width:50px"> 
                                    <div class="row">
                                        <a href="{{route('blogs', $post->id)}}" class="btn btn-light btn-fw">View</a>
                                        
                                    </div>
                                    <br>
                                    <div class="row">
                                        <a href="{{route('post.edit', $post->id)}}" class="btn btn-warning btn-fw">Edit</a>
                                        
                                    </div>
                                    <br>
                                    <div class="row">
                                        <form action="{{route('post.destroy', $post->id)}}" method="POST" enctype="multipart/form-data">
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