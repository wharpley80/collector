<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\UserGame;
use Auth;

class MyCollectionController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userGames = UserGame::where('user_id', '=', $user->id)->get();
        $myGames = [];

        foreach ($userGames as $userGame) {
            if ($userGame['game_id']) {
                $game = Game::where('id', '=', $userGame['game_id'])->first();
                $myGames[] = $game;
            }
        }

        return view('my-collection')->with(
            [
                'myGames' => $myGames
            ]
        );
    }
}
