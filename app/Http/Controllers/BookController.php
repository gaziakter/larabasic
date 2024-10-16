<?php
namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('subcategories')->get();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $categories = Category::with('subcategories')->get();
        return view('books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $book = Book::create($request->only(['title', 'author', 'description', 'published_at']));
        $book->subcategories()->attach($request->subcategories);

        return redirect()->route('books.index');
    }

    public function edit(Book $book)
    {
        $categories = Category::with('subcategories')->get();
        return view('books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, Book $book)
    {
        $book->update($request->only(['title', 'author', 'description', 'published_at']));
        $book->subcategories()->sync($request->subcategories);

        return redirect()->route('books.index');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}
