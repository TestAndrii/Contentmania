<div>
    <div class="py-12">
        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="shadow-xl sm:rounded-lg">

            <table class="table table-sm table-bordered align-middle border-2">
                <thead>
                <tr>
                    <th></th>
                    <th>Название</th>
                    <th>Автор</th>
                    <th>ISBN</th>
                    <th>Жанр</th>
                    <th>Заметки</th>
                    <th>Дата создания</th>
                    <th>Действия</th>
                </tr>
                <tr>
                    <th>Поиск:</th>
                    <th>
                        <input type="text" wire:model="searchName">
                    </th>
                    <th>
                        <input type="text" wire:model="searchAuthor">
                    </th>
                    <th>-</th>
                    <th>
                        <input type="text" wire:model="searchGenre">
                    </th>
                    <th>-</th>
                    <th>-</th>
                    <th>
                        <a href="{{ url('book/create') }}" class="btn btn-primary">
                            Добавить
                        </a>
                    </th>
                </tr>
                </thead>

                <tbody>
                @foreach($books as $book)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->genre }}</td>
                    <td>{{ $book->other }}</td>
                    <td>{{ $book->created_at }}</td>
                    <td>
                        <a href='{{ url("book/{$book->id}/edit") }}' class="btn btn-success">
                            Изменить
                        </a>
                    <hr>
                        <x-danger-button wire:click="deleteBook({{ $book }})">
                            Удалить
                        </x-danger-button>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>


            </div>
            {{ $books->links() }}
        </div>
    </div>


</div>
