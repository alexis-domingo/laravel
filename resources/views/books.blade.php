@extends('layouts.template')

@section('title', 'Books List')

@section('content')
    <h1>Books List</h1>


    <a href="/books/create"><button>New Book</button></a>
    <hr>


    @foreach($books as $book)
        <h3>{{ $book->title }}</h3>
        <p>{{ $book->author }}</p>
        <!-- Show details of the book -->

        <div style="text-align:center;display:flex;padding:2px;margin:2px;">
            <a style="padding:2px;" href="/books/{{$book->id_book}}"><button style="color:white;background-color:blue;">Details</button></a>
            <!-- Edit this book -->
            <a style="padding:2px;" href="/books/{{$book->id_book}}/edit"><button style="color:white;background-color:green;">Edit</button></a>
            <!-- Delete this book -->

            <form style="padding:2px;" action="/books/{{ $book->id_book }}" method="post">
                @csrf
                @method('DELETE')
                <input style="color:white;background-color:red;" type="submit" value="Delete">
            </form>
        </div>
    @endforeach
@endsection
