<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;

class CreateBook extends Component
{

    public Book $book;
    public $name, $author, $isbn, $genre, $othe;
    public $success = false;

    protected $rules = [
        'name' => 'required|string|max:200',
        'author' => 'required|string|max:200',
        'isbn' => 'required',
        'genre' => 'required',
    ];

    public function render()
    {
        return view('livewire.create-book');
    }

    public function create()
    {
        $this->validate();
        Book::create([
            'name' => $this->name,
            'author' => $this->author,
            'isbn' => $this->isbn,
            'genre' => $this->genre,
            'othe' => $this->othe
        ]);

        $this->success = true;
    }
}
