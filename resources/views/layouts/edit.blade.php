
@extends('layouts.blog')

@section('content')
    @guest
        <h1>Access denied</h1>
    @else
        <div class="card-body">
            @include('layouts.errors')

            <form action={{url('posts/edit/'.$post->id)}} method="post" class="form-horizontal" >
                {{csrf_field()}}
                <div class="form-group">
                    <div class="row">
                        <label for="Posts" class="col-md-2 control-label">Post</label>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <input type="text" name="title" id="post-title" class="form-control" value="@php echo $post->title @endphp">
                        </div>
                        <label for="post-title" class="col-md-2">Title</label>

                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <input type="text" name="body" id="post-body" class="form-control" value="@php echo $post->body @endphp">
                        </div>
                        <label for="post-body" class="col-md-2">Body</label>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-success">update</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    @endguest
@endsection