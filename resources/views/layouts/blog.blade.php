<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
@guest
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="col-10 navbar-brand" href="{{url('main')}}">Home</a>
        <div class="col-2 my-2 my-md-0">
            <a class="navbar-brand" href="{{route('login')}}" >Login</a>
            <a class="navbar-brand" href="{{route('register')}}" >Register</a>
        </div>
    </nav>
    @else
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="col-10 navbar-brand" href="{{url('main')}}">Home</a>
        <div class="col-2 my-2 my-md-0">
            <a class="navbar-brand" href="{{url('posts/create')}}" >Create</a>
            <a class="navbar-brand" href="{{route('logout')}}" >Logout</a>
        </div>
    </nav>
@endguest
@yield('content')
</body>
</html>