<?php

use Illuminate\Database\Seeder;
use App\Logo;

class LogosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('logos')->truncate();

        Logo::insert(
        [
            [
                'name' => 'Sega',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/sega-logo.jpg',
                'type' => 1
            ],
            [
                'name' => 'Nintendo',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/nintendo-logo.jpg',
                'type' => 1
            ],
            [
                'name' => 'Playstation',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/playstation-logo.jpg',
                'type' => 1
            ],
            [
                'name' => 'XBOX',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/xbox-logo.png',
                'type' => 1
            ],
            [
                'name' => 'Sega Master System',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/sega-master-system-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Sega Genesis',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/sega-genesis-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Sega CD',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/sega-cd-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Sega 32X',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/sega-32x-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Sega Saturn',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/sega-saturn-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Sega Dreamcast',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/sega-dreamcast-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Sega Game Gear',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/sega-game-gear-logo.jpg',
                'type' => 2
            ]
        ]);
    }
}
