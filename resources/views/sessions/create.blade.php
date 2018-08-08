@extends ('layouts.master') 
@section('title', 'Login Page') 
@section ('content')
<div class="col-sm-8">
    <div class="card">
        <div class="card-header">
            Sign In
        </div>

        <div class="card-body">
            <form method="POST" action="/login">

                {{ csrf_field() }}

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>
                    <input type="email" class="form-control col-md-6" name="email" id="email" required autofocus>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Password:</label>
                    <input type="password" class="form-control col-md-6" name="password" id="password" required>
                </div>

                <div class="form-group row mb-0">
                    <button type="submit" class="btn btn-primary offset-md-4">Sign In</button>
                </div>
            </form>
        </div>
    @include('layouts.errors')
    </div>


</div>
@endsection