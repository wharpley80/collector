<?php

use Illuminate\Database\Seeder;
use App\Developer;

class DevelopersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('developers')->truncate();

        Developer::insert(
            [
                [
                    'name' => 'Tecmo',
                    'slug' => 'tecmo',
                ],
                [
                    'name' => 'Nextech',
                    'slug' => 'nextech',
                ],
                [
                    'name' => 'Wolf Team',
                    'slug' => 'wolf_team',
                ],
                [
                    'name' => 'Sonic Team',
                    'slug' => 'sonic_team',
                ],
                [
                    'name' => 'Treasure',
                    'slug' => 'treasure',
                ],
                [
                    'name' => 'Sculptured Software',
                    'slug' => 'sculptured_software',
                ],
                [
                    'name' => 'High Score Productions',
                    'slug' => 'high_score_productions',
                ],
                [
                    'name' => 'Electronic Arts',
                    'slug' => 'electronic_arts',
                ],
                [
                    'name' => 'Realtime Associates',
                    'slug' => 'realtime_associates',
                ],
                [
                    'name' => 'FarSight Studios',
                    'slug' => 'farsight_studios',
                ],
                [
                    'name' => 'Accolade',
                    'slug' => 'accolade'
                ],
                [
                    'name' => 'Technosoft',
                    'slug' => 'Technosoft'
                ],
                [
                    'name' => 'Supersonic Software',
                    'slug' => 'supersonic_software'
                ],
                [
                    'name' => 'Sega',
                    'slug' => 'sega'
                ],
                [
                    'name' => 'Audiogenic',
                    'slug' => 'audiogenic'
                ],
                [
                    'name' => 'Home Data',
                    'slug' => 'home_data'
                ]
            ]);
    }
}
