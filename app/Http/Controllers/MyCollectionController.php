<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Platform;
use App\Game;
use App\UserGame;
use Auth;

class MyCollectionController extends Controller
{
    public function index($platform = null)
    {
        $user             = Auth::user();
        $userGames        = UserGame::where('user_id', '=', $user->id)->get();
        $platforms        = Platform::all();
        $selectedPlatform = null;
        $game             = null;
        $myGames          = [];

        if ($platform !== null) {
            $selectedPlatform = Platform::where('slug', '=', $platform)->first();
        }

        foreach ($userGames as $userGame) {
            if (isset($userGame['game_id'])) {
                if ($selectedPlatform !== null) {
                    $game = Game::where('id', '=', $userGame['game_id'])
                        ->where('platform_id', '=', $selectedPlatform->id)
                        ->first();
                }

                if ($selectedPlatform === null) {
                    $game = Game::where('id', '=', $userGame['game_id'])->first();
                }

                if ($game !== null) {
                    $myGames[] = $game;
                }  
            }
        }

        return view('my-collection')->with(
            [
                'myGames' => $myGames,
                'platforms' => $platforms,
                'selectedPlatform' => $selectedPlatform
            ]
        );
    }
}
