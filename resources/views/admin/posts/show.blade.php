@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="btn btn-info" href="{{route('admin.posts.index')}}">Lista Post</a>
        <h1>{{$post->title}}</h1>
        <p>{{$post->body}}</p>
        {{-- <a class="btn btn_warning" href="{{route('admin.posts.edit')}}"></a> --}}
    </div>
@endsection