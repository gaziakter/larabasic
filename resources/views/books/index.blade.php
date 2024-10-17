@extends('layouts.app')

@section('title', 'Books')

@section('content')
    <h1>Books</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Add Book</a>
    <ul class="list-group">
        @foreach ($books as $book)
            <li class="list-group-item">
                <strong>{{ $book->title }}</strong> by {{ $book->author }} <br>
                <small>Categories: 
                    @foreach ($book->categories as $category)
                        <span class="badge bg-secondary">{{ $category->name }}</span>
                    @endforeach
                </small>
                <br>
                <small>Subcategories: 
                    @foreach ($book->subcategories as $subcategory)
                        <span class="badge bg-info">{{ $subcategory->name }}</span>
                    @endforeach
                </small>
            </li>
        @endforeach
    </ul>
@endsection