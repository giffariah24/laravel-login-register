@extends('layouts.main')

@section('content')
    <h1 class="text-center mt-3">Registration Form</h1>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                  <strong>{{ $message }}</strong>
              </div>
            @endif
    <form action ="/register" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 mt-2">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" value="{{ old('name') }}">
            @if($errors->has('name'))
                <div class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}">
            @if($errors->has('email'))
                <div class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password">
            <span>At least one uppercase letter</span><br>
            <span>At least one lowercase letter</span><br>
            <span>At least one digit number</span>
            @if($errors->has('password'))
                <div class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Repeat Password</label>
            <input type="password" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" name="password_confirmation">
            @if($errors->has('password_confirmation'))
                <div class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
                </div>
            @endif
        </div>
        <div class="mb-3 mt-2">
            <label for="avatar" class="form-label">Avatar</label>
            <input type="file" class="form-control {{ $errors->has('avatar') ? 'is-invalid' : '' }}" name="avatar">
            @if($errors->has('avatar'))
                <div class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('avatar') }}</strong>
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
    </div>
    </div><br>
    <div id="loginhelp" class="form-text text-center text-dark">Already have an account ? <a href="login" class="text-dark fw-bold" style="text-decoration: none">Login Here</a>
    </div>
@endsection
