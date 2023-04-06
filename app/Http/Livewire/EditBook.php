<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class EditBook extends Component
{
    public Book $book;
    public $success = false;

    protected $rules = [
        'book.name' => 'required|string|max:200',
        'book.author' => 'required|string|max:200',
        'book.isbn' => 'required',
        'book.genre' => 'required',
        'book.other' => ''
        ];

    /**
     * mount
     *
     * @param  mixed $id
     * @return void
     */
    public function mount($id)
    {
        $this->book = Book::findOrFail($id);
    }

    /**
     * render
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.edit-book');
    }

    /**
     * update
     *
     * @param  mixed $id
     * @return void
     */
    public function update($id)
    {
        $this->validate();

        Book::where('id', $id)->update([
            'name' => $this->book->name,
            'author' => $this->book->author,
            'isbn' => $this->book->isbn,
            'genre' => $this->book->genre,
            'other' => $this->book->other
        ]);

        $this->success = true;
    }
}
