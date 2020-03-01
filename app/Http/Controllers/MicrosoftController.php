<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Platform;
use App\Region;
use App\Logo;

class MicrosoftController extends Controller
{
    public function index($platform, $region = null, $page = null)
    {
        $selectedPlatform = Platform::where('slug', '=', $platform)->first();
        $logoImage = Logo::where('id', '=', $selectedPlatform->logo_id)->first()->image;
        $regions = [5];

        if ($region) {
            $regions[] = Region::where('slug', '=', $region)->first()->id;
        }

        $games = Game::where('platform_id', '=', $selectedPlatform->id)
            ->whereIn('region_id', $regions)
            ->paginate(5);

        $paginationInfo = $this->getPaginationInfo($games);

        return view('microsoft')->with(
            [
                'games'          => $games,
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
    public function getPaginationInfo($games)
    {
        $pageHigh = $games->perPage() * $games->currentPage();
        $pageLow = $pageHigh - $games->perPage() +1;
        if ($pageHigh > $games->total()) {
            $pageHigh = $games->total();
        }

        $paginationInfo = $pageLow . ' - ' . $pageHigh . ' of ' . $games->total();

        return $paginationInfo ?? '';
    }
}
