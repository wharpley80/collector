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
            ]
        ]);
    }
}
