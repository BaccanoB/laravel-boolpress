@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="btn btn-info" href="{{route('admin.posts.index')}}">Lista Post</a>
        <h1>{{$post->title}}
            @if ($post->category)
                <span class="badge badge-primary">{{$post->category->name}}</span>
            @else
                <span class="badge">Nessuna categoria selezionata</span>
            @endif
        </h1>
        <p>{{$post->body}}</p>
        {{-- <a class="btn btn_warning" href="{{route('admin.posts.edit')}}"></a> --}}
    </div>
@endsection