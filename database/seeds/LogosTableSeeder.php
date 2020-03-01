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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
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
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/sony-logo.jpg',
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
            ],
            [
                'name' => 'Nintendo Entertainment System',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/nes-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Super Nintendo Entertainment System',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/snes-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Nintendo 64',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/n64-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Nintendo GameCube',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/gamecube-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Nintendo Wii',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/wii-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Nintendo Wii U',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/wiiu-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Nintendo Switch',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/switch-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Game Boy',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/gameboy-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Game Boy Color',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/gameboy-color-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Game Boy Advance',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/gba-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Nintendo DS',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/ds-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Nintendo 3DS',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/3ds-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Nintendo Virtual Boy',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/virtual-boy-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Playstation',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/ps1-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Playstation 2',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/ps2-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Playstation 3',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/ps3-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Playstation 4',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/ps4-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Playstation 5',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/ps5-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Playstation Portable',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/psp-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Playstation Vita',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/ps-vita-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Playstation VR',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/ps-vr-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'Original XBOX',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/original-xbox-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'XBOX 360',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/xbox-360-logo.jpg',
                'type' => 2
            ],
            [
                'name' => 'XBOX One',
                'image' => 'http://williamharpleydev.com/img/collectorsDojo/logos/xbox-one-logo.jpg',
                'type' => 2
            ]
        ]);
    }
}
