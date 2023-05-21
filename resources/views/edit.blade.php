@extends('layouts.main')

@include('partials.navbar')
@section('content')
    <h1 class="text-center mt-3">Edit Profile</h1>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <form action ="/edit" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3 mt-2">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" value="{{ old('name', $user->name )}}" required>
                    @if($errors->has('name'))
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email', $user->email) }}" required>
                    @if($errors->has('email'))
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
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
                <button type="submit" class="btn btn-success mt-2">Update</button>
            </form>
        </div>
    </div><br>
@endsection

