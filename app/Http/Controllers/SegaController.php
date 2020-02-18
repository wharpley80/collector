<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MarcReichel\IGDBLaravel\Models\Game;
use MarcReichel\IGDBLaravel\Models\Cover;
//use MarcReichel\IGDBLaravel\Models\Platform;
use MarcReichel\IGDBLaravel\Models\ReleaseDate;
use MarcReichel\IGDBLaravel\Models\Company;
use App\SegaGame;
use App\Platform;
use App\Region;
use App\Logo;

class SegaController extends Controller
{
    public function index($platform, $region = null, $page = null)
    {
        $selectedPlatform = Platform::where('slug', '=', $platform)->get();
        $logoImage = Logo::where('id', '=', $selectedPlatform[0]->logo_id)->get()[0]->image;
        $regions = [5];

        if ($region) {
            $regions[] = Region::where('slug', '=', $region)->get()[0]->id;
        }

        $segaGames = SegaGame::where('platform', '=', $selectedPlatform[0]->id)
            ->whereIn('region', $regions)
            ->paginate(5);

        /*
        $platform = Platform::where('id', $platformId)->get();
        $platformDisplay[] = $platform[0]->getPlatformDisplayInfo();
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
        */

        //return view('sega')->with(['platform' => $platformDisplay, 'games' => $allGenesis, 'region' => $region]);
        return view('sega-game')->with(['games' => $segaGames, 'platform' => $selectedPlatform[0], 'logo' => $logoImage]);
    }
}
