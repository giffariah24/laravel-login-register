@extends('layouts.main')

@section('content')
    <h1 class="text-center mt-3">Login Form</h1>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <form>
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="password1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password1">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Login</button>
            </form>
        </div>
    </div><br>
    <div id="loginhelp" class="form-text text-center text-dark">Don't have an account ? <a href="register" class="text-dark fw-bold" style="text-decoration: none">Register Here</a>
    </div>
@endsection
