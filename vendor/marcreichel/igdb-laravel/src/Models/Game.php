<?php

namespace MarcReichel\IGDBLaravel\Models;


class Game extends Model
{
    protected $casts = [
        'bundles' => self::class,
        'dlcs' => self::class,
        'expansions' => self::class,
        'parent_game' => self::class,
        'similar_games' => self::class,
        'standalone_expansions' => self::class,
        'version_parent' => self::class,
    ];

    /**
     * Returns the genre names.
     * 
     * @return String
     */
    public function getGenreNames()
    {
        $counter = 0;
        if (isset($this['genres'])) {
            foreach ($this['genres'] as $key => $genreId) {
                $genre = Genre::where('id', $genreId)->get();

                if ($counter === 0) {
                    $genreName = $genre[0]['name'];
                    $counter++;
                } else {
                    $genreName = $genreName . ', ' . $genre[0]['name'];
                }
            }
        }

        return $genreName ?? '';
    }

    /**
     * Returns the region.
     */
    public function getRegion()
    {
        $releaseDates = ReleaseDate::where('game', $this['id'])->get();
        foreach ($releaseDates as $releaseDate) {
            $regionName = $releaseDate->getRegionName();
        }

        return $regionName ?? '';
    }

    /**
     * Returns all games released from a specific region.
     */
    public function getGamesByRegion($region)
    {
        if ($this->getRegion() === $region) {
            return $this;
            //$naGenesis[] = $game;
        }

        return;
    }

    /**
     * Returns the game cover.
     * 
     * @return String
     */
    public function getCover()
    {
        // Missing Some Cover Arts
        $covers = Cover::where('id', $this['cover'])->get();

        foreach ($covers as $cover) {
            $coverArt = 'https://images.igdb.com/igdb/image/upload/t_cover_small_2x/' . $cover['image_id'] . '.jpg';
        }

        return $coverArt ?? '';
    }

    /**
     * Returns the release date.
     * 
     * @return String
     */
    public function getReleaseDate()
    {
        $releaseDates = ReleaseDate::where('game', $this['id'])->get();

        return $releaseDates[0]['human'];
    }

    /**
     * Returns the rating.
     * 
     * @return Int
     */
    public function getRating()
    {
        return $this['aggregated_rating'] ?? '';
    }

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


}
