@extends('layouts.blog')
@section('content')
    @if(count($posts)>0)
        <ul>
            @foreach($posts as $post)
                <div class="container">
                    <div class="jumbotron">
                        <div class="container">
                            <h1 class="display-3">{{$post->title}}</h1>
                            <img src="{{$post->getImagePath()}}" class="rounded" width="304" height="236">
                            @guest
                                <p>{{$post ->body }}</p>

                                <p>Created by :{{$post->user->name}}</p>
                            @else
                                <div class="row">
                                    <div class="col-md-1">
                                        <form action="{{route('post.delete', ['id' => $post->id])}}" method="POST">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col-md-1">
                                        <form action="{{route('post.edit',['id' => $post->id])}}">
                                            <button class="btn btn-secondary">
                                                Edit
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endguest
                        </div>
                    </div>
                </div>
            @endforeach
        </ul>
    @else
        <div class="container">
            <div class="jumbotron">
                <div class="container">
                    <h1 class="display-3">No posts </h1>
                </div>
            </div>
        </div>
    @endif
@endsection