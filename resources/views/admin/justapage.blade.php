@extends('admin.layouts.main')

@section('content')

<form action="/justapage" method="post">
    {{ csrf_field() }}
    <button type="submit">Click me!</button>
</form>

@endsection