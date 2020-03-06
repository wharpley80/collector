<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Platform;
use App\Company;
use App\Region;
use App\Logo;

class SegaController extends Controller
{
    public function index($platform, $region = null, $page = null)
    {

        $selectedPlatform = Platform::where('slug', '=', $platform)->first();
        $company = Company::where('id', '=', $selectedPlatform->company_id)->first();
        $logoImage = Logo::where('id', '=', $selectedPlatform->logo_id)->first()->image;
        $regions = [5];

        if ($region) {
            $regions[] = Region::where('slug', '=', $region)->first()->id;
        }

        $segaGames = Game::where('platform_id', '=', $selectedPlatform->id)
            ->whereIn('region_id', $regions)
            ->paginate(5);

        $paginationInfo = $this->getPaginationInfo($segaGames);

        return view('sega')->with(
            [
                'games'          => $segaGames,
                'platform'       => $selectedPlatform,
                'company'        => $company,
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
