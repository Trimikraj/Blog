{{--
<nav class="navbar navbar-default navbar-fixed-top container-fluid">
    <div class="container">

        <a class="p-2 nav-link text-muted text-warning" href="{{url( '/')}} ">Home</a>

        <a class="p-2 nav-link text-muted text-warning" href="{{url( '/posts/create')}} ">Create</a>

        <nav class="nav navbar-nav">
            @if (Auth::check())
            <span class="p-2 text-success fa fa-user"> {{ Auth::user()->name }}</span>
            <a class="p-2 nav-link text-muted" href="{{url( '/logout')}} " title="Sign Out "><span class="fa fa-power-off text-danger "></span></a>
        </nav>
        @else
        <nav class="nav navbar-nav navbar-right">
            <a class="p-2 nav-link text-muted text-warning" href="{{url( '/login')}} ">Sign In</a>
            <a class="p-2 nav-link text-muted text-warning" href="{{url( '/register')}} ">Register</a>
        </nav>@endif


    </div>
</nav> --}}



<nav class="navbar navbar-expand-md fixed-top bg-light">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
        aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>

    <div class="collapse navbar-collapse" id="navbarCollapse">

        <ul class="navbar-nav container">
            <li class="nav-item">
                <a class="p-2 nav-link text-muted text-warning" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="p-2 nav-link text-muted text-warning" href="{{url('/posts/create')}}">Create</a>
            </li>

            <li class="nav nav-item col justify-content-end align-items-center">

                @if (Auth::check())
                <span class="p-2 text-success fa fa-user"> {{ Auth::user()->name }}</span>

                <a class="p-1 nav-link text-muted" href="{{url( '/logout')}} " title="Sign Out ">
                        <span class="fa fa-power-off text-danger "></span>
                </a>

            </li>
            @else
            <li class="nav nav-item">
                <a class="p-2 nav-link text-muted text-warning ml-auto" href="{{url('/login')}}">Sign In</a>
                <a class="p-2 nav-link text-muted text-warning" href="{{url('/register')}}">Register</a>
            </li>
            @endif

        </ul>
    </div>
</nav>