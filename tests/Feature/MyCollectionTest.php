<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Tests\TestCase;

class MyCollectionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * This is a test to verify that a user that isn't logged in can't land on the My Collection page.
     *
     * @return void
     */
    public function testOnlyLoggedInUsersAccessMyCollection()
    {
        $response = $this->get('/my-collection')->assertRedirect('/login');
    }

    /**
     * This is a test to verify that a logged in user can hit the My Collection page.
     *
     * @return void
     */
    public function testLoggedInUsersCanAccessMyCollection()
    {

        $this->actingAs(factory(User::class)->create());

        $response = $this->get('/my-collection')
            ->assertOk();
    }
}