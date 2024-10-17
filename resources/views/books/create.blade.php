@extends('layouts.app')

@section('title', 'Add New Book')

@section('content')
    <h1>Add New Book</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="text" name="title" class="form-control" placeholder="Title" required>
        </div>
        <div class="mb-3">
            <input type="text" name="author" class="form-control" placeholder="Author" required>
        </div>
        <div class="mb-3">
            <textarea name="description" class="form-control" placeholder="Description"></textarea>
        </div>
        <div class="mb-3">
            <input type="date" name="published_at" class="form-control">
        </div>

        <h3>Select Categories</h3>
        @foreach ($categories as $category)
            <div class="mb-2">
                <strong>{{ $category->name }}</strong>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="categories[]" value="{{ $category->id }}" id="category-{{ $category->id }}">
                    <label class="form-check-label" for="category-{{ $category->id }}">
                        {{ $category->name }}
                    </label>
                </div>

                <div class="ms-4">
                    <h4>Select Subcategories</h4>
                    @foreach ($category->subcategories as $subcategory)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="subcategories[]" value="{{ $subcategory->id }}" id="subcategory-{{ $subcategory->id }}">
                            <label class="form-check-label" for="subcategory-{{ $subcategory->id }}">
                                {{ $subcategory->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection