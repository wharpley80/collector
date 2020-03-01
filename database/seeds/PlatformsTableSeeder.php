<?php

use Illuminate\Database\Seeder;
use App\Platform;

class PlatformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //DB::table('platforms')->truncate();

        Platform::insert(
            [
                [
                    'name' => 'Sega Master System',
                    'slug' => 'sega_master_system',
                    'company_id' => 1,
                    'logo_id' => 5
                ],
                [
                    'name' => 'Sega Genesis/Mega Drive',
                    'slug' => 'sega_genesis_mega_drive',
                    'company_id' => 1,
                    'logo_id' => 5
                ],
                [
                    'name' => 'Sega CD',
                    'slug' => 'sega_cd',
                    'company_id' => 1,
                    'logo_id' => 7
                ],
                [
                    'name' => 'Sega 32X',
                    'slug' => 'sega_32x',
                    'company_id' => 1,
                    'logo_id' => 8
                ],
                [
                    'name' => 'Sega Saturn',
                    'slug' => 'sega_saturn',
                    'company_id' => 1,
                    'logo_id' => 9
                ],
                [
                    'name' => 'Sega Dreamcast',
                    'slug' => 'sega_dreamcast',
                    'company_id' => 1,
                    'logo_id' => 10
                ],
                [
                    'name' => 'Sega Game Gear',
                    'slug' => 'sega_game_gear',
                    'company_id' => 1,
                    'logo_id' => 11
                ],
                [
                    'name' => 'Nintendo Entertainment System',
                    'slug' => 'nintendo_entertainment_system',
                    'company_id' => 2,
                    'logo_id' => 12
                ],
                [
                    'name' => 'Super Nintendo Entertainment System',
                    'slug' => 'super_nintendo_entertainment_system',
                    'company_id' => 2,
                    'logo_id' => 13
                ],
                [
                    'name' => 'Nintendo 64',
                    'slug' => 'nintendo_64',
                    'company_id' => 2,
                    'logo_id' => 14
                ],
                [
                    'name' => 'Nintendo GameCube',
                    'slug' => 'nintendo_gamecube',
                    'company_id' => 2,
                    'logo_id' => 15
                ],
                [
                    'name' => 'Nintendo Wii',
                    'slug' => 'nintendo_wii',
                    'company_id' => 2,
                    'logo_id' => 16
                ],
                [
                    'name' => 'Nintendo Wii U',
                    'slug' => 'nintendo_wii_u',
                    'company_id' => 2,
                    'logo_id' => 17
                ],
                [
                    'name' => 'Nintendo Switch',
                    'slug' => 'nintendo_switch',
                    'company_id' => 2,
                    'logo_id' => 18
                ],
                [
                    'name' => 'Game Boy',
                    'slug' => 'game_boy',
                    'company_id' => 2,
                    'logo_id' => 19
                ],
                [
                    'name' => 'Game Boy Color',
                    'slug' => 'game_boy_color',
                    'company_id' => 2,
                    'logo_id' => 20
                ],
                [
                    'name' => 'Game Boy Advance',
                    'slug' => 'game_boy_advance',
                    'company_id' => 2,
                    'logo_id' => 21
                ],
                [
                    'name' => 'Nintendo DS',
                    'slug' => 'nintendo_ds',
                    'company_id' => 2,
                    'logo_id' => 22
                ],
                [
                    'name' => 'Nintendo 3DS',
                    'slug' => 'nintendo_3ds',
                    'company_id' => 2,
                    'logo_id' => 23
                ],
                [
                    'name' => 'Nintendo Virtual Boy',
                    'slug' => 'nintendo_virtual_boy',
                    'company_id' => 2,
                    'logo_id' => 24
                ],
                [
                    'name' => 'Playstation',
                    'slug' => 'playstation',
                    'company_id' => 3,
                    'logo_id' => 25
                ],
                [
                    'name' => 'Playstation 2',
                    'slug' => 'playstation_2',
                    'company_id' => 3,
                    'logo_id' => 26
                ],
                [
                    'name' => 'Playstation 3',
                    'slug' => 'playstation_3',
                    'company_id' => 3,
                    'logo_id' => 27
                ],
                [
                    'name' => 'Playstation 4',
                    'slug' => 'playstation_4',
                    'company_id' => 3,
                    'logo_id' => 28
                ],
                [
                    'name' => 'Playstation 5',
                    'slug' => 'playstation_5',
                    'company_id' => 3,
                    'logo_id' => 29
                ],
                [
                    'name' => 'Playstation Portable',
                    'slug' => 'playstation_portable ',
                    'company_id' => 3,
                    'logo_id' => 30
                ],
                [
                    'name' => 'Playstation Vita',
                    'slug' => 'playstation_vita',
                    'company_id' => 3,
                    'logo_id' => 31
                ],
                [
                    'name' => 'Playstation VR',
                    'slug' => 'playstation_vr',
                    'company_id' => 3,
                    'logo_id' => 32
                ],
                [
                    'name' => 'Original XBOX',
                    'slug' => 'original_xbox',
                    'company_id' => 4,
                    'logo_id' => 33
                ],
                [
                    'name' => 'XBOX 360',
                    'slug' => 'xbox_360',
                    'company_id' => 4,
                    'logo_id' => 34
                ],
                [
                    'name' => 'XBOX One',
                    'slug' => 'xbox_one',
                    'company_id' => 4,
                    'logo_id' => 35
                ]
        ]);
    }
}
