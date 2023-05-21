@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4"><br>
        @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <h1 class="text-center mt-3">Login Form</h1>
            <form action="/login" method="post">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" autofocus >
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Login</button>
            </form>
        </div>
    </div><br>
    <div id="loginhelp" class="form-text text-center text-dark">Don't have an account ? <a href="/register" class="text-dark fw-bold" style="text-decoration: none">Register Here</a>
    </div>
    </div>
    </div>
@endsection
