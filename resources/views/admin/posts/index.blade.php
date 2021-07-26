@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('deleted'))
            <div class="alert alert-success"> {{session('deleted')}} eliminato!</div>
        @endif
        <h1>Posts</h1>
        <a class="btn btn-primary float-right" href="{{route('admin.posts.create')}}">Crea nuovo post</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITOLO</th>
                    <th>SLUG</th>
                    <th colspan="3">BOTTONI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->slug}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('admin.posts.show',$item->id)}}"><i class="fas fa-search"></i></a>
                        </td>
                        <td> 
                            <a class="btn btn-warning" href="{{route('admin.posts.edit',$item->id)}}"><i class="fas fa-pencil-alt"></i></a>
                        </td>
                        <td>
                            <form action="{{route('admin.posts.destroy',$item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onSubmit="return confirm ('sei sicuro si voler cancellare il post?'"><i class="fas fa-trash-alt"></i> </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection