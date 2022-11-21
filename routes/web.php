<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [BoookController::class, 'index'])->name('books.index');
Route::get("/books/categories", [BookController::class, 'index'])->name('books.categories');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
Route::get("/publisher", [PublisherController::class, 'index'])->name('publisher.index');
Route::view("/about", "about.index")->name('about.index');