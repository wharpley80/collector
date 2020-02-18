<?php

use Illuminate\Database\Seeder;
use App\Region;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('regions')->truncate();

        Region::insert(
        [
            [
                'name' => 'North America',
                'slug' => 'north_america',
                'abbreviation' => 'NA',
                'code' => 'NTSC-U'
            ],
            [
                'name' => 'Japan',
                'slug' => 'japan',
                'abbreviation' => 'JP',
                'code' => 'NTSC-J'
            ],
            [
                'name' => 'Europe',
                'slug' => 'europe',
                'abbreviation' => 'PAL',
                'code' => 'PAL'
            ],
            [
                'name' => 'China',
                'slug' => 'china',
                'abbreviation' => 'CHN',
                'code' => 'NTSC-C'
            ],
            [
                'name' => 'WorldWide',
                'slug' => 'worldwide',
                'abbreviation' => 'ALL',
                'code' => 'NTSC/PAL'
            ]
        ]);
    }
}
