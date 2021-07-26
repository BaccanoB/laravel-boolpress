@extends('layouts.app')

@section('content')
<div class="container"> 
    <a class="btn btn-info" href="{{route('admin.posts.index')}}">Lista post</a>
    <form action="{{route('admin.posts.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control @error('title') is_invalid @enderror" id="title" name="body" placeholder="Inserisci il titolo dell'articolo" value="{{old('title')}}">
            @error('title')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="body">Contenuto</label>
            <textarea class="form-control @error('body') is_invalid @enderror" id="body" name="body" rows="7" placeholder="Inserisci il contenuto dell'articolo">{{old('body')}}</textarea>
            @error('body')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-success" > Crea </button>
    </form></div>
   
@endsection