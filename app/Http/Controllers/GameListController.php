<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Platform;
use App\Company;
use App\Region;
use App\Logo;

class GameListController extends Controller
{
    public function index($company, $platform, $region, $sort = null)
    {
        $selectedPlatform = $this->getPlatformBySlug($platform);
        $companyObj       = $selectedPlatform->getCompany();
        $logoImage        = $selectedPlatform->getLogoImg();
        $selectedRegion   = $this->getRegionBySlug($region);
        $sortParams       = $this->getSortParams($sort);
        $regions          = $this->getRegions($selectedRegion);
        $companyPlatforms = $companyObj->getPlatformsByCompany();
        $games            = $this->getGameList($selectedPlatform, $regions, $sortParams);
        $paginationInfo   = $this->getPaginationInfo($games);

        return view($company)->with(
            [
                'games'            => $games,
                'platform'         => $selectedPlatform,
                'companyPlatforms' => $companyPlatforms,
                'region'           => $selectedRegion,
                'company'          => $companyObj,
                'logo'             => $logoImage,
                'paginationInfo'   => $paginationInfo
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
        $wwRegion = Region::where('name', '=', 'Worldwide')->first() ?? '';
        $regions = [$wwRegion->id];
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
            ->paginate(10);

        return $games;
    }
}
