@extends('layouts.template')

@section('title', 'Books List')

@section('content')
    <h1>Articles</h1>

    @foreach($articles as $article)
        <h3>{{ $article->title }}</h3>
        <p>{{ $article->description }}</p>
        <!-- Show details of the book -->
        <hr>
    @endforeach
@endsection
