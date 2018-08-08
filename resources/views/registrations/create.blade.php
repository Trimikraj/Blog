@extends ('layouts.master') 
@section('title', 'Registration Page') 
@section ('content')
<div class="col-sm-8">

    <div class="card">
        <div class="card-header">
            Register
        </div>

        <div class="card-body">

            <form method="POST" action="/register">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Name:</label>
                    <input type="text" class="form-control col-md-6" name="name" id="name" value="{{ old('name') }}" required autofocus>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>
                    <input type="email" class="form-control col-md-6" name="email" id="email" value="{{ old('email') }}" required>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Password:</label>
                    <input type="password" class="form-control col-md-6" name="password" id="password" required>
                </div>

                <div class="form-group row">
                    <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">Confirm Password:</label>
                    <input type="password" class="form-control col-md-6" name="password_confirmation" id="password_confirmation" required>
                </div>

                <div class="form-group row mb-0">
                    <button type="submit" class="btn btn-primary offset-md-4">Register</button>
                </div>
            </form>
        </div>
    @include('layouts.errors')
    </div>

</div>
@endsection