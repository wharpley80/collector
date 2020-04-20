<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /**
     * Returns the display info for a game.
     * 
     * @return Array
     */
    public function getGameDisplayInfo()
    {
        $displayArray = [];
        $displayArray['id']      = $this->id;
        $displayArray['name']    = $this->name;
        $displayArray['release'] = $this->getReleaseDate();
        $displayArray['genre']   = $this->getGenreNames();
        $displayArray['region']  = $this->getRegion();
        $displayArray['rating']  = $this->getRating();
        $displayArray['cover']   = $this->getCover();
        $displayArray['summary'] = $this->summary;

        return $displayArray;
    }

    /**
     * Returns the genres associated to a game.
     * 
     * @return String
     */
    public function getGameGenres()
    {
        $counter = 0;
        if (isset($this->genre)) {
            $genres = json_decode($this->genre, true);
            foreach ($genres as $key => $genreId) {
                $genre = Genre::where('id', $genreId)->first();

                if ($counter === 0) {
                    $genreName = $genre->name;
                    $counter++;
                } else {
                    $genreName = $genreName . ', ' . $genre->name;
                }
            }
        }

        return $genreName ?? '';
    }

    /**
     * Returns the publisher for a game.
     * 
     * @return Object
     */
    public function getPublisher()
    {
        $publisher = Publisher::where('id', $this->publisher_id)->first();

        return $publisher ?? '';
    }

    /**
     * Returns the publisher name for a game.
     * 
     * @return String
     */
    public function getPublisherName()
    {
        $publisher = Publisher::where('id', $this->publisher_id)->first();

        return $publisher->name ?? '';
    }

    /**
     * Returns the developers for a game.
     * 
     * @return String
     */
    public function getGameDevelopers()
    {
        $counter = 0;
        if (isset($this->developer)) {
            $developers = json_decode($this->developer, true);
            foreach ($developers as $key => $developerId) {
                $developer = Developer::where('id', $developerId)->first();

                if ($counter === 0) {
                    $developerName = $developer->name;
                    $counter++;
                } else {
                    $developerName = $developerName . ', ' . $developer->name;
                }
            }
        }

        return $developerName ?? '';
    }

    /**
     * Returns the platform name for a game.
     * 
     * @return String
     */
    public function getPlatformName()
    {
        $platform = Platform::where('id', $this->platform_id)->first();

        return $platform->name ?? '';
    }

    /**
     * Returns the platform slug for a game.
     * 
     * @return String
     */
    public function getPlatformSlug()
    {
        $platform = Platform::where('id', $this->platform_id)->first();

        return $platform->slug ?? '';
    }

    /**
     * Returns the region name for a game.
     * 
     * @return String
     */
    public function getRegionName()
    {
        $region = Region::where('id', $this->region_id)->first();

        return $region->name ?? '';
    }

    /**
     * Returns the pagination from, to, and total for the current page.
     * 
     * @return String
     */
    public function getPaginationInfo()
    {
    }

    /**
     * Returns the region abbreviation for a game.
     * 
     * @return String
     */
    public function getRegionAbbreviation()
    {
        $region = Region::where('id', $this->region_id)->first();

        return $region->abbreviation ?? '';
    }

    /**
     * Returns the company.id for a game.
     * 
     * @return String
     */
    public function getCompanyId()
    {
        $platform = Platform::where('id', $this['platform_id'])->first();

        return $platform->company_id ?? '';
    }
}
