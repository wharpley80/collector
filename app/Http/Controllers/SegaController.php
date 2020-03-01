<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*
use MarcReichel\IGDBLaravel\Models\Game;
use MarcReichel\IGDBLaravel\Models\Cover;
use MarcReichel\IGDBLaravel\Models\Platform;
use MarcReichel\IGDBLaravel\Models\ReleaseDate;
use MarcReichel\IGDBLaravel\Models\Company;
*/
use App\Game;
use App\Platform;
use App\Region;
use App\Logo;

class SegaController extends Controller
{
    public function index($platform, $region = null, $page = null)
    //public function index($platformId, $region = null, $page = null)
    {

        $selectedPlatform = Platform::where('slug', '=', $platform)->first();
        $logoImage = Logo::where('id', '=', $selectedPlatform->logo_id)->first()->image;
        $regions = [5];

        if ($region) {
            $regions[] = Region::where('slug', '=', $region)->first()->id;
        }

        $segaGames = Game::where('platform_id', '=', $selectedPlatform->id)
            ->whereIn('region_id', $regions)
            ->paginate(5);

/*

        $platform = Platform::where('id', $platformId)->get();
        var_dump($platform); 
        $platformDisplay[] = $platform->first()->getPlatformDisplayInfo();
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

        $games = Game::where('platforms', $platformId)->limit(20)->offset($offset)->get();
        //$games = Game::where('platforms', $platformId)->where('release_dates.region', $regionId)->limit(20)->offset($offset)->get();
        $allGenesis = [];
        foreach ($games as $game) {
            $allGenesis[] = $game->getGameDisplayInfo();
        }
               protected 'perPage' => int 5
          protected 'currentPage' => int 2
var_dump($allGenesis);
*/
        $paginationInfo = $this->getPaginationInfo($segaGames);

        //return view('sega')->with(['platform' => $platformDisplay, 'games' => $allGenesis, 'region' => $region]);
        return view('sega-game')->with(
            [
                'games'          => $segaGames,
                'platform'       => $selectedPlatform,
                'logo'           => $logoImage,
                'paginationInfo' => $paginationInfo
            ]
        );
    }

    /**
     * Returns the pagination from, to, and total for the current page.
     * 
     * @return String
     */
    public function getPaginationInfo($segaGames)
    {
        $pageHigh = $segaGames->perPage() * $segaGames->currentPage();
        $pageLow = $pageHigh - $segaGames->perPage() +1;
        if ($pageHigh > $segaGames->total()) {
            $pageHigh = $segaGames->total();
        }

        $paginationInfo = $pageLow . ' - ' . $pageHigh . ' of ' . $segaGames->total();

        return $paginationInfo ?? '';
    }
}
