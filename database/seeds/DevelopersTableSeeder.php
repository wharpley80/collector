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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
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
                ],
                [
                    'name' => 'Appaloosa Interactive',
                    'slug' => 'appaloosa_interactive'
                ],
                [
                    'name' => 'Cave',
                    'slug' => 'cave'
                ],
                [
                    'name' => 'Attention to Detail',
                    'slug' => 'attention_to_detail'
                ],
                [
                    'name' => 'Point of View',
                    'slug' => 'point_of_view'
                ],
                [
                    'name' => 'Tamsoft',
                    'slug' => 'tamsoft'
                ],
                [
                    'name' => 'Takara',
                    'slug' => 'takara'
                ],
                [
                    'name' => 'Scarab',
                    'slug' => 'scarab'
                ],
                [
                    'name' => 'Jumpin Jack',
                    'slug' => 'jumpin_jack'
                ],
                [
                    'name' => 'Digital Factory',
                    'slug' => 'digital_factory'
                ],
                [
                    'name' => 'KAZe',
                    'slug' => 'kaze'
                ],
                [
                    'name' => 'Core Design',
                    'slug' => 'core_design'
                ],
                [
                    'name' => 'Sega AM2',
                    'slug' => 'sega_am2'
                ],
                [
                    'name' => 'Digital Eclipse',
                    'slug' => 'digital_eclipse'
                ],
                [
                    'name' => 'Capcom',
                    'slug' => 'capcom'
                ],
                [
                    'name' => 'Konami',
                    'slug' => 'konami'
                ],
                [
                    'name' => 'Aspect',
                    'slug' => 'aspect'
                ],
                [
                    'name' => 'Malibu Interactive',
                    'slug' => 'malibu_interactive'
                ],
                [
                    'name' => 'EA Canada',
                    'slug' => 'ea_canada'
                ],
                [
                    'name' => 'Studio 128',
                    'slug' => 'studio_128'
                ],
                [
                    'name' => 'Nintendo',
                    'slug' => 'nintendo'
                ],
                [
                    'name' => 'Vigil Games',
                    'slug' => 'vigil_games'
                ],
                [
                    'name' => 'Kaiko',
                    'slug' => 'kaiko'
                ],
                [
                    'name' => 'Vanillaware',
                    'slug' => 'vanillaware'
                ],
                [
                    'name' => 'Grezzo',
                    'slug' => 'grezzo'
                ],
                [
                    'name' => 'Sculptured Software',
                    'slug' => 'sculptured_software'
                ],
                [
                    'name' => 'Wayfoward',
                    'slug' => 'wayfoward'
                ],
                [
                    'name' => 'Polygon Magic',
                    'slug' => 'polygon_magic'
                ]
            ]
        );

    }
}
