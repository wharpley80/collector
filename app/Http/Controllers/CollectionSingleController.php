<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserGame;
use App\Game;
use Auth;

class CollectionSingleController extends Controller
{
    public function index($gameId)
    {
        $user = Auth::user();
        $game = Game::where('id', '=', $gameId)->first();
        $userGame = UserGame::where('game_id', '=', $gameId)
            ->where('user_id', '=', $user->id)
            ->first();

        $genres = $game->getGameGenres();
        $publisherName = $game->getPublisherName();
        $developers = $game->getGameDevelopers();

        return view('collection-single')->with(
            [
                'game' => $game,
                'userGame' => $userGame,
                'genres' => $genres,
                'publisherName' => $publisherName,
                'developers' => $developers
            ]
        );
    }
}
