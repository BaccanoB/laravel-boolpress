@extends('layouts.app')

@section('content')
    <div class="container"> 
        <h1>Modifica il Post</h1>
        <a class="btn btn-info" href="{{route('admin.posts.index')}}">Lista post</a>
        <form action="{{route('admin.posts.update',$post->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control @error('title') is_invalid @enderror" id="title" name="title" placeholder="Inserisci il titolo dell'articolo" value="{{old('title',$post->title)}}">
                @error('title')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Contenuto</label>
                <textarea class="form-control @error('body') is_invalid @enderror" id="body" name="body" rows="7" placeholder="Inserisci il contenuto dell'articolo">{{old('body',$post->body)}}</textarea>
                @error('body')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="category_id">Categoria</label>
                <select class="form-control" name="category_id" id="category_id">
                    <option value="">Seleziona la categoria</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{($post->category != null && $category->id == old('category_id', $post->category->id))?'selected':''}}>{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <h6>Tags</h6>
                @foreach ($tags as $tag)
                    <div class="form-check form-check-inline">
                        @if ($errors->any())
                            <input class="form-check-input" type="checkbox" name="tags[]" id="tag-{{$tag->id}}" value="{{$tag->id}}" {{in_array($tag->id,old('tags',[]))?'checked':''}}> 
                        @else
                            <input class="form-check-input" type="checkbox" name="tags[]" id="tag-{{$tag->id}}" value="{{$tag->id}}" {{$post->tags->contains($tag->id)?'checked':''}}> 
                        @endif
                       
                        <label class="form-check-input" for="tag-{{$tag->id}}">{{$tag->name}}</label>
                    </div>
                @endforeach
                @error('tags')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                
            </div>
            <button type="submit" class="btn btn-success" > Modifica </button>
        </form>
    </div>
   
@endsection