@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="btn btn-warning" href="{{route('admin.posts.edit',$post->id)}}">Modifica</a>
        <a class="btn btn-info" href="{{route('admin.posts.index')}}">Lista Post</a>
        <h1>{{$post->title}}
            @if ($post->category)
                <a href="{{route('admin.categories.show',$post->category->id)}}" class="badge badge-primary">{{$post->category->name}}</a>
            @else
                <span class="badge">Nessuna categoria selezionata</span>
            @endif
        </h1>
        <p>{{$post->body}}</p>
        @if (count($post->tags)>0)
             <div class="mt-3 h4">
                @foreach ($post->tags as $tag)
                    <span class="badge badge-info">{{$tag->name}}</span>
                @endforeach
            </div> 
        @else 
            <h5>Nessun tag presente</h5>
        @endif         
    </div>
@endsection