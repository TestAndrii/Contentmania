<?php

use App\Http\Livewire\ListBooks;
use App\Http\Livewire\CreateBook;
use App\Http\Livewire\EditBook;
use App\Http\Livewire\HomeBook;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/books', ListBooks::class)->name('books');
    Route::get('/book/create', CreateBook::class)->name('createBook');
    Route::get('/book/{id}/edit', EditBook::class)->name('editBook');
});

