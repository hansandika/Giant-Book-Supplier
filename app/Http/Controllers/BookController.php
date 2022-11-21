<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::get();
        if ($request->has('category')) {
            $books = Book::whereHas('categories', function ($query) use ($request) {
                $query->where('name', $request->category);
            })->get();
        }
        return view('books.index', compact('books'));
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }
}
