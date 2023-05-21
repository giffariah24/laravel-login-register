@extends('layouts.main')

@include('partials.navbar')
@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4 mt-2">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
        </div>
    </div>
    <h1 class="text-center mt-3">Welcome Back, {{ auth()->user()->name }}</h1>
    <div class="text-center">
        <img src="{{ auth()->user()->avatar }}" class="rounded" width="250">
    </div>
@endsection
