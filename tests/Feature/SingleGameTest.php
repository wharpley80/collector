<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\UserGame;
use Tests\TestCase;

class SingleGameTest extends TestCase
{
    use RefreshDatabase;

    /**
     * This is a test to verify that a user can add a game to their collection.
     *
     * @return void
     */
    public function testUsersCanAddGameToTheirCollection()
    {
        $this->actingAs(factory(User::class)->create());
        $user = factory(User::class)->make();
        
        $gameData = [];
        $gameData['userId'] = $user->id;
        $gameData['companyId'] = 1;
        $gameData['gameId'] = 1;
        $gameData['date'] = '2/20/20';
        $gameData['price'] = '19.99';
        $gameData['location'] = 'Video Game Heaven';
        $gameData['purchaseNew'] = 0;
        $gameData['cib'] = 0;
        $gameData['cartDisc'] = 1;
        $gameData['manual'] = 1;
        $gameData['box'] = 1;
        $gameData['condition'] = 1;
        $gameData['comment'] = 'This is a test comment';

        $data['gameData'] = $gameData;

        $response = $this->post('/single-game', $data);
        
        $this->assertCount(1, UserGame::all());
    }
}