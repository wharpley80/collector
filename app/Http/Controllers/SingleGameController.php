<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SegaGame;
use App\Platform;
use App\UserGame;
use Auth;

class SingleGameController extends Controller
{
    public function index($platform, $gameId)
    {
        $selectedPlatform = Platform::where('slug', '=', $platform)->get()[0];

        if ($selectedPlatform->slug == 'sega_genesis_mega_drive') {
            $game = SegaGame::where('id', '=', $gameId)->get()[0];
        }

        if ($selectedPlatform->slug == 'sega_saturn') {
            $game = SegaGame::where('id', '=', $gameId)->get()[0];
        }

        $genres = $game->getGameGenres();
        $publisherName = $game->getPublisherName();
        $developers = $game->getGameDevelopers();

        return view('single-game')->with(
            [
                'game' => $game,
                'genres' => $genres,
                'publisherName' => $publisherName,
                'developers' => $developers,
                'companyId' => $game->getCompanyId()
            ]
        );
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
            $result['status'] = 'fail';
            $result['message'] = 'Problem saving game data';

            if ($gameData) {
                UserGame::insert(
                    [
                        'user_id' => $user->id, 
                        'company_id' => $gameData['companyId'], 
                        'game_id' => intval($gameData['gameId']), 
                        'purchase_date' => $gameData['date'], 
                        'purchase_price' => $gameData['price'], 
                        'purchase_location' => $gameData['location'], 
                        'purchase_new' => intval($gameData['purchaseNew']), 
                        'cib' => intval($gameData['cib']), 
                        'cart_disc' => intval($gameData['cartDisc']), 
                        'manual' => intval($gameData['box']), 
                        'box' => intval($gameData['manual']), 
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
