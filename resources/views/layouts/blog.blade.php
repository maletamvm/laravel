<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
@guest
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="col-10 navbar-brand" href="{{route('home')}}">Home</a>

    </nav>
@else

    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="col-10 navbar-brand" href="{{route('home')}}">Home</a>
        <div class="col-md-1 ">
            <a class="navbar-brand" href="{{route('logout')}}">Logout</a>
        </div>

    </nav>
    <div class="nav-scroller bg-white box-shadow">
        <nav class="nav nav-underline">
            <a class="nav-link active" href={{route('post.create')}}>Create Post</a>
            <a class="nav-link" href={{route('register')}}>Create User</a>
        </nav>
    </div>
@endguest
@yield('content')
</body>
</html>