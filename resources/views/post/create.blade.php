@extends('layouts.blog')

@section('content')
    @guest
        <h1>Access denied</h1>
    @else



        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Post') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                                    <div class="col-md-6">
                                        <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                                        @if ($errors->has('title'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Body" class="col-md-4 col-form-label text-md-right">{{ __('Body') }}</label>

                                    <div class="col-md-6">
                                        <textarea id="body" type="body" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" name="body"  required rows="8">{{ old('body') }} </textarea>

                                        @if ($errors->has('body'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                                    <div class="col-md-6">
                                        <input id="image" type="file" class="form-control" name="image" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endguest
@endsection