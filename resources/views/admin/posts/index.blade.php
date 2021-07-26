@extends('layouts.app')

@section('content')
    <div class="container">
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
                        <td>EDIT</td>
                        <td>DELETE</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection