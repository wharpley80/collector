<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserGame;
use App\Game;
use Auth;

class SearchController extends Controller
{
    /**
     * Returns games that have a name "LIKE" the given string.
     * 
     * @param String
     */
    public function search(Request $request)
    {
        $text = $request->input('text');
   
        $games = Game::where('name', 'like', $text . '%')->get();
        $searchResults =[];

        foreach ($games as $game) {
            $subArray = [];
            $subArray['id'] = $game->id;
            $subArray['platform_slug'] = $game->getPlatformSlug();
            $subArray['display_info'] = $game->name . ' - ' . 
                $game->getPlatformName() . ' - ' . 
                $game->getRegionName() . ' (' . 
                $game->getRegionAbbreviation() . ')'; 
            $searchResults[] = $subArray;
        }

        return response()->json($searchResults);
    }

    /**
     * Returns games that have a name "LIKE" the given string.
     * 
     * @param String
     */
    public function searchMyCollection(Request $request)
    {
        $user = Auth::user();
        $text = $request->input('text');
        $searchResults =[];
        $myGameIds = [];

        $userGames = UserGame::where('user_id', '=', $user->id)->get();
        foreach ($userGames as $userGame) {
            $myGameIds[] = $userGame->game_id;
        }

        $games = Game::where('name', 'like', $text . '%')
            ->whereIn('id', $myGameIds)
            ->get();

        foreach ($games as $game) {
            $subArray = [];
            $subArray['id'] = $game->id;
            $subArray['platform_slug'] = $game->getPlatformSlug();
            $subArray['display_info'] = $game->name . ' - ' . 
                $game->getPlatformName() . ' - ' . 
                $game->getRegionName() . ' (' . 
                $game->getRegionAbbreviation() . ')'; 
            $searchResults[] = $subArray;
        }

        return response()->json($searchResults);
    }
}
