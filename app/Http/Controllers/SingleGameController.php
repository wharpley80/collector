<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Platform;
use App\UserGame;
use Auth;

class SingleGameController extends Controller
{
    public function index($gameId)
    {
        $game = Game::where('id', '=', $gameId)->first();

        if ($game) {
            $genres = $game->getGameGenres() ?? '';
            //$publisherName = $game->getPublisherName() ?? '';
            $publisher = $game->getPublisher();
            $developers = $game->getGameDevelopers() ?? '';

            return view('single-game')->with(
                [
                    'game' => $game,
                    'genres' => $genres,
                    'publisher' => $publisher,
                    'developers' => $developers
                ]
            );
        }

        return view('collectors-dojo'); 
    }

    /**
     * Add a game to a user's collection.
     * 
     * @param Array
     */
    public function addUserGame(Request $request)
    {
        $gameData = $request->input('gameData');
        $user = Auth::user();
        $result = [];
        $result['status'] = 'fail';
        $result['message'] = 'Must be signed into your account to add games to your collection.';

        if ($user) {
            $gameData['userId'] = $user->id;
            $result['status'] = 'fail';
            $result['message'] = 'Problem saving game data';

            if ($gameData) {
                UserGame::insert(
                    [
                        'user_id' => $gameData['userId'], 
                        'company_id' => $gameData['companyId'], 
                        'game_id' => intval($gameData['gameId']), 
                        'purchase_date' => $gameData['date'], 
                        'purchase_price' => $gameData['price'], 
                        'purchase_location' => $gameData['location'], 
                        'purchase_new' => intval($gameData['purchaseNew']), 
                        'cib' => intval($gameData['cib']), 
                        'cart_disc' => intval($gameData['cartDisc']), 
                        'manual' => intval($gameData['manual']), 
                        'box' => intval($gameData['box']), 
                        'condition' => intval($gameData['condition']), 
                        'comment' => $gameData['comment']
                    ]
                );

                $result['status'] = 'success';
                $result['message'] = 'Game saved successfully.';
            }
        }

        return response()->json($result);
    }
}
