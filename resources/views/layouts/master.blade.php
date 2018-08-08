<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/blog.css')}}">

    <script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>

</head>

<body>
    @include('layouts.nav')

    <div class="container my-5 p-md-3">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class=" px-0">
                <h1 class="display-4 font-italic">Welcome to my First Blog</h1>
                <p class="lead my-3">A simple blog using bootstrap 4 with user authentication, user's posts and comments, and their committed
                    timestamp.</p>
            </div>
        </div>
        <hr class="mb-0">
    </div>

    <div class="container">

        <div class="row">
            @yield('content')
    @include('layouts.sidebar')
        </div>
    </div>
    @include('layouts.footer')
</body>

</html>