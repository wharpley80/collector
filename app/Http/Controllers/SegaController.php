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
    //public function index($platform, $region = null, $sort = null)
    public function index($company, $platform, $region = null, $sort = null)
    {
        $selectedPlatform = $this->getPlatformBySlug($platform);
        $companyObj       = $selectedPlatform->getCompany();
        $logoImage        = $selectedPlatform->getLogoImg();
        $selectedRegion   = $this->getRegionBySlug($region);
        $sortParams       = $this->getSortParams($sort);
        $regions          = $this->getRegions($selectedRegion);
        $games            = $this->getGameList($selectedPlatform, $regions, $sortParams);
        $paginationInfo   = $this->getPaginationInfo($games);

        //return view('sega')->with(
        return view($company)->with(
            [
                'games'          => $games,
                'platform'       => $selectedPlatform,
                'region'         => $selectedRegion,
                'company'        => $companyObj,
                'logo'           => $logoImage,
                'paginationInfo' => $paginationInfo
            ]
        );
    }

    /**
     * Returns a platform based on it's slug.
     * 
     * @param string $slug
     * 
     * @return Object 
     */
    public function getPlatformBySlug($slug)
    {
        return Platform::where('slug', '=', $slug)->first() ?? '';
    }

    /**
     * Returns a region based on it's slug.
     * 
     * @param string $slug
     * 
     * @return Object 
     */
    public function getRegionBySlug($slug)
    {
        return Region::where('slug', '=', $slug)->first() ?? '';
    }

    /**
     * Returns the pagination from, to, and total for the current page.
     * 
     * @param object $games
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

    /**
     * Returns the sort paramaters for the page.
     * 
     * @param string $sort
     * 
     * @return Array
     */
    public function getSortParams($sort)
    {
        $mySort = $sort ?? 'name-asc';
        $sortParams = explode('-', $mySort);

        return $sortParams;
    }

    /**
     * Returns the regions to search by.
     * 
     * @param object $region
     * 
     * @return Array
     */
    public function getRegions($region)
    {
        $regions = [5];
        if ($region) {
            $regions[] = $region->id;
        }

        return $regions;
    }

    /**
     * Returns the game list for the page.
     * 
     * @param object $platform
     * @param array $regions
     * @param array $sort
     * 
     * @return Object
     */
    public function getGameList($platform, $regions, $sort)
    {
        $games = Game::where('platform_id', '=', $platform->id)
            ->whereIn('region_id', $regions)
            ->orderBy($sort[0], $sort[1])
            ->paginate(5);

        return $games;
    }





}
