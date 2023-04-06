<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;
use App\View\Components\CreateBook;
use Illuminate\Support\Facades\Session;
use Livewire\Livewire;

class ListBooks extends Component
{

    public $searchName;
    public $searchAuthor;
    public $searchGenre;

    /**
     * deleteBook
     *
     * @param  mixed $book
     * @return void
     */
    public function deleteBook(Book $book)
    {
        $book->delete();
    }

    /**
     * render
     *
     * @return void
     */
    public function render()
    {
        $searchName = '%' . $this->searchName . '%';
        $searchAuthor = '%' . $this->searchAuthor . '%';
        $searchGenre = '%' . $this->searchGenre . '%';

        $books = Book::where('name', 'like', $searchName)
            ->where('author', 'like', $searchAuthor)
            ->where('genre', 'like', $searchGenre)
            ->paginate(5);

        return view('livewire.list-books',[
            'books' => $books,
        ]);
    }
}
