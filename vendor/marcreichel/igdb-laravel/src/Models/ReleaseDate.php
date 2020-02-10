<?php

namespace MarcReichel\IGDBLaravel\Models;


class ReleaseDate extends Model
{
    protected $regionNames = [
        1 => 'Europe',
        2 => 'North America',
        3 => 'Australia',
        4 => 'New Zealand',
        5 => 'Japan',
        6 => 'China',
        7 => 'Asia',
        8 => 'Worldwide',
    ];

    public function getRegionName()
    {
        return $this->regionNames[$this->region] ?? '';
    }
}
