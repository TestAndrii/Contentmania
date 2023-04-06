<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\ListBooks;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ListBooksTest extends TestCase
{

        /**
     * test_the_application_returns_a_successful_response
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * A basic test
     */
    public function test_the_application_returns_a_302_for_noautorize_user(): void
    {
        $response = $this->get('/books');

        $response->assertStatus(302);
    }

    /** @test */
    public function the_component_ListBooks_can_render()
    {
        $component = Livewire::test(ListBooks::class);

        $component->assertStatus(200);
    }
}
