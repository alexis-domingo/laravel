@extends('layouts.userTemplate')

@section('content')

    <h1>Users</h1>

    @foreach($users as $user)
        <p>{{$user->first_name}}</p>
        <p>{{$user->last_name}}</p>
        <p>{{$user->email}}</p>
    @endforeach

@endsection
