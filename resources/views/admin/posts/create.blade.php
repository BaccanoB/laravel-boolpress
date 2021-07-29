@extends('layouts.app')

@section('content')
    <div class="container"> 
        <a class="btn btn-info" href="{{route('admin.posts.index')}}">Lista post</a>
        <form action="{{route('admin.posts.store')}}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control @error('title') is_invalid @enderror" id="title" name="title" placeholder="Inserisci il titolo dell'articolo" value="{{old('title')}}">
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
            <div class="form-group">
                <label for="category_id">Categoria</label>
                <select class="form-control" name="category_id" id="category_id">
                    <option value="">Seleziona la categoria</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{($category->id == old('category_id'))?'selected':''}}>{{$category->name}}</option>
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
                        <input class="form-check-input" type="checkbox" name="tags[]" id="tag-{{$tag->id}}" value="{{$tag->id}}" {{in_array($tag->id,old('tags',[]))?'checked':''}}>
                        <label class="form-check-input" for="tag-{{$tag->id}}">{{$tag->name}}</label>
                    </div>
                @endforeach
                @error('tags')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                
            </div>
            <button type="submit" class="btn btn-success" > Crea </button>
        </form>
    </div>
   
@endsection