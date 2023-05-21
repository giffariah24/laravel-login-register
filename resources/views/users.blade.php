@extends('layouts.main')
@include('partials.navbar')

@section('content')
    <h1 class="text-center mt-3">List User</h1><br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach ($users as $user)
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
