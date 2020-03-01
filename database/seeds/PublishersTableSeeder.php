<?php

use Illuminate\Database\Seeder;
use App\Publisher;

class PublishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //DB::table('publishers')->truncate();

        Publisher::insert(
        [
            [
                'name' => 'Tecmo',
                'slug' => 'tecmo'
            ],
            [
                'name' => 'Atlus',
                'slug' => 'atlus'
            ],
            [
                'name' => 'Renovation',
                'slug' => 'renovation'
            ],
            [
                'name' => 'Sega',
                'slug' => 'sega'
            ],
            [
                'name' => 'Parker Brothers',
                'slug' => 'parker_brothers'
            ],
            [
                'name' => 'EA Sports',
                'slug' => 'ea_sports'
            ],
            [
                'name' => 'Viacom New Media',
                'slug' => 'viacom_new_media'
            ],
            [
                'name' => 'Accolade',
                'slug' => 'accolade'
            ],
            [
                'name' => 'Codemasters',
                'slug' => 'codemasters'
            ],
            [
                'name' => 'Home Data',
                'slug' => 'home_data'
            ],
            [
                'name' => 'Eidos Interactive',
                'slug' => 'eidos_interactive'
            ],
            [
                'name' => 'Konami',
                'slug' => 'konami'
            ],
            [
                'name' => 'Virgin Interactive Entertainment',
                'slug' => 'virgin_interactive_entertainment'
            ],
            [
                'name' => 'Acclaim',
                'slug' => 'acclaim'
            ],
            [
                'name' => 'Naxat Soft',
                'slug' => 'naxat_soft'
            ],
            [
                'name' => 'Natsume',
                'slug' => 'natsume'
            ],
            [
                'name' => 'Datt Japan',
                'slug' => 'datt_japan'
            ],
            [
                'name' => 'Time Warner Interactive',
                'slug' => 'time_warner_interactive'
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
                'name' => 'Technosoft',
                'slug' => 'technosoft'
            ],
            [
                'name' => 'Working Designs',
                'slug' => 'working_designs'
            ],
            [
                'name' => 'Takara',
                'slug' => 'takara'
            ],
            [
                'name' => 'Midway Games',
                'slug' => 'midway_games'
            ]
        ]);
    }
}
