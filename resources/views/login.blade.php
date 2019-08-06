@extends('layouts.userTemplate')

@section('title', 'Insert a new book')

@section('content')
<h1>Login</h1>
<form action="/books" method="POST">
    @csrf
    <input type="text" name="email"><br>
    <input type="submit" value="Submit">
</form>
@endsection
