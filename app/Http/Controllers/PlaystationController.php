<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MarcReichel\IGDBLaravel\Models\Game;
use MarcReichel\IGDBLaravel\Models\Cover;
use MarcReichel\IGDBLaravel\Models\Platform;
use MarcReichel\IGDBLaravel\Models\ReleaseDate;

class PlaystationController extends Controller
{
    public function index($platformId, $region = null, $page = null)
    {
        $platform = Platform::where('id', $platformId)->first();
        $platformDisplay[] = $platform->getPlatformDisplayInfo();
        $offset = 0;

        if ($region === 'north_america') {
            $regionId = 2;
        }
        if ($region === 'europe') {
            $regionId = 1;
        }
        if ($region === 'japan') {
            $regionId = 5;
        } else {
            $region = 'worldwide';
            $regionId = 8;
        }

        if (isset($page)) {
            $pageNumber = explode('=', $page)[1];
            $offset = $pageNumber*20;
        }

        $games = Game::where('platforms', $platformId)->where('release_dates.region', $regionId)->limit(20)->offset($offset)->get();

        $allGenesis = [];
        foreach ($games as $game) {
            $allGenesis[] = $game->getGameDisplayInfo();
        }

        return view('playstation')->with(['platform' => $platformDisplay, 'games' => $allGenesis, 'region' => $region]);
    }
}
