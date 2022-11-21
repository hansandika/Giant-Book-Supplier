<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index'])->name('books.index');
Route::get("/books/categories", [BookController::class, 'index'])->name('books.categories');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
Route::get("/publishers", [PublisherController::class, 'index'])->name('publishers.index');
Route::get("/publishers/{publisher}", [PublisherController::class, 'show'])->name('publishers.show');
Route::get("/contacts", [ContactController::class, 'index'])->name('contacts.index');
