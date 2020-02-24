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
    //public function index($platformId, $region = null, $page = null)
    {
        /*
        $text = 'thre';
        $text = $text . '%';
   
        $testGames = SegaGame::where('name', 'like', $text)->get();
foreach ($testGames as $testGame) {
    var_dump($testGame);
}
*/



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
        var_dump($platform[0]); 
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
                'platform'       => $selectedPlatform[0],
                'logo'           => $logoImage,
                'paginationInfo' => $paginationInfo
            ]
        );
    }

    /**
     * Returns games that have a name "LIKE" the given string.
     * 
     * @param String
     */
    public function search(Request $request)
    {
        $text = $request->input('text');
   
        $segaGames = SegaGame::where('name', 'like', $text . '%')->get();
        $searchResults =[];

        foreach ($segaGames as $segaGame) {
            $subArray = [];
            $subArray['id'] = $segaGame->id;
            $subArray['platform_slug'] = $segaGame->getPlatformSlug();
            $subArray['display_info'] = $segaGame->name . ' - ' . 
                $segaGame->getPlatformName() . ' - ' . 
                $segaGame->getRegionName() . '(' . 
                $segaGame->getRegionAbbreviation() . ')'; 
            $searchResults[] = $subArray;
        }

        return response()->json($searchResults);
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
