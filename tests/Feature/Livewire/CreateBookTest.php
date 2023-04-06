<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\CreateBook;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Livewire\Livewire;
use Tests\TestCase;

class CreateBookTest extends TestCase
{
    use WithoutMiddleware;

    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(CreateBook::class);

        $component->assertStatus(200);
    }

    /**
     * A basic test
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        Livewire::test(CreateBook::class)
            ->set('name')
            ->call('create')
            ->assertHasErrors(['name'=>'required']);


    }
}
