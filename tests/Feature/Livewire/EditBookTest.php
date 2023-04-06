<?php

namespace Tests\Feature\Livewire;

use App\Models\Book;
use App\Models\User;
use Database\Factories\BookFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class EditBookTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_component_can_update()
    {

        $book = BookFactory::factoryForModel(Book::class)->create();

        $this->actingAs($user = User::factory()->create())
            ->get(route('editBook',$book))
            ->assertStatus(200);

    }
}
