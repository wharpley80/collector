<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publisher;
use App\Game;
use App\Platform;
use App\Company;
use App\Region;
use App\Logo;

class PublisherListController extends Controller
{
    public function index($publisherSlug, $region, $sort = null)
    {
        $publisher      = $this->getPublisher($publisherSlug);
        $sortParams     = $this->getSortParams($sort);
        $selectedRegion = $this->getRegionBySlug($region);
        $regions        = $this->getRegions($selectedRegion);
        $games          = $this->getGamesByPublisher($publisher->id, $regions, $sortParams);
        $paginationInfo = $this->getPaginationInfo($games);
        $logo           = '';
//var_dump($games);

        return view('publisher-list')->with(
            [
                'games'          => $games,
                'publisher'      => $publisher,
                'allPublishers'  => $this->getAllPublishers(),
                'allPlatforms'   => $this->getAllPlatforms(),
                'logo'           => $logo,
                'paginationInfo' => $paginationInfo
            ]
        );
    }

    /**
     * Returns the publisher.
     * 
     * @param integer $publisherId
     * 
     * @return Object
     */
    public function getPublisher($publisherSlug)
    {
        $publisher = Publisher::where('slug', $publisherSlug)->first();

        return $publisher ?? '';
    }

    /**
     * Returns all publishers.
     * 
     * @return Object
     */
    public function getAllPublishers()
    {
        $allPublishers = Publisher::orderBy('name', 'asc')->get();

        return $allPublishers ?? '';
    }

    /**
     * Returns all platforms.
     * 
     * @return Object
     */
    public function getAllPlatforms()
    {
        $allPlatforms = Platform::orderBy('name', 'asc')->get();

        return $allPlatforms ?? '';
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
     * Returns all games made by the publisher.
     * 
     * @param integer $publisherId
     * 
     * @return Object
     */
    public function getGamesByPublisher($publisherId, $regions, $sort)
    {
        $games = Game::where('publisher_id', '=', $publisherId)
            ->whereIn('region_id', $regions)
            ->orderBy($sort[0], $sort[1])
            ->paginate(5);

        return $games ?? '';
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
}
