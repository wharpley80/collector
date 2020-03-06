<?php

namespace Tests\Feature;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\User;
use App\UserGame;
use App\Game;
use App\Platform;
use Tests\TestCase;

class MyCollectionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * This is a test to verify that a user that isn't logged in can't land on the 
     * My Collection page.
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

    /**
     * This is a test to verify that a logged in user's games are being displayed on 
     * the page.
     *
     * @return void
     */
    public function testLoggedInUsersGamesAreDisplayed()
    {
        $this->actingAs(factory(User::class)->create());
        $user = factory(User::class)->make();

        $game = $factory->define(Game::class, function (Faker $faker) {
            return [
                'name' => $faker->name,
                'slug' => $faker->name,
                'company_id' => $faker->company_id,
                'platform_id' => $faker->platform_id,
                'region_id' => $faker->region_id,
                'genre' => $faker->genre,
                'publisher_id' => $faker->publisher_id,
                'release_date' => $faker->release_date,
            ];
        });

    }
}