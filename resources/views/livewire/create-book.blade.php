<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="overflow-hidden shadow-xl sm:rounded-lg">

    @if ($success)
    <div>
        <div class="alert alert-success">
             Книга была успешно создана
        </div>

    </div>
    @endif

    <form wire:submit.prevent="create">
        <div class="form-group">
            <label for="Book name">Название:</label>
            <input wire:model="name" name="name" id="name" class="form-control" placeholder="Название книги">
            @error('name') <span class="bg-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="Book author">Автор:</label>
            <textarea name="author" id="author" placeholder="автор книги" wire:model="author" class="form-control"></textarea>
            @error('author') <span class="bg-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="Book ISBN">ISBN:</label>
            <textarea name="isbn" id="isbn" placeholder="ISBN" wire:model="isbn" class="form-control"></textarea>
            @error('isbn') <span class="bg-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="Book genre">Жанр:</label>
            <textarea name="genre" id="genre" placeholder="жанр (желательно создать справочник)" wire:model="genre" class="form-control"></textarea>
            @error('genre') <span class="bg-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="Book other">Описание, примечания:</label>
            <textarea name="other" id="other" placeholder="Описание" wire:model="other" class="form-control"></textarea>
            @error('other') <span class="bg-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </div>
    </form>

    </div>
</div>

