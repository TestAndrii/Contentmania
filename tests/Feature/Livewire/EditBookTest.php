<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\EditBook;
use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EditBookTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(EditBook::class, ['id' => 2]);

        $component->assertStatus(200);
    }
}
