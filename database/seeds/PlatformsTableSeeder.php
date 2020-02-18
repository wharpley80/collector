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
                ]
            ]);
    }
}
