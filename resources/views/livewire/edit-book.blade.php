<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="overflow-hidden shadow-xl sm:rounded-lg">

    @if ($success)
    <div>
        <div class="alert alert-success">
            Книга была успешно сохранета
        </div>

    </div>
    @endif

    <form wire:submit.prevent="update({{ $book->id }})">
        <div class="form-group">
            <label for="Book name">Название:</label>
            <input name="name" id="name" wire:model="book.name" class="form-control">
            @error('book.name') <span class="bg-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="Book author">Автор:</label>
            <textarea name="author" id="author" wire:model="book.author" class="form-control"></textarea>
            @error('book.author') <span class="bg-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="Book ISBN">ISBN:</label>
            <textarea name="isbn" id="isbn" placeholder="ISBN" wire:model="book.isbn" class="form-control"></textarea>
            @error('book.isbn') <span class="bg-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="Book genre">Жанр:</label>
            <textarea name="genre" id="genre" wire:model="book.genre" class="form-control"></textarea>
            @error('book.genre') <span class="bg-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="Book other">Описание, примечания, заметки:</label>
            <textarea name="other" id="other" wire:model="book.other" class="form-control"></textarea>
            @error('book.other') <span class="bg-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </div>
    </form>

    </div>
</div>

