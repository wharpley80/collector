<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('logos')->truncate();

        Company::insert(
        [
            [
                'name' => 'Sega',
                'slug' => 'sega',
                'logo_id' => 1
            ],
            [
                'name' => 'Nintendo',
                'slug' => 'nintendo',
                'logo_id' => 2
            ],
            [
                'name' => 'Playstation',
                'slug' => 'playstation',
                'logo_id' => 3
            ],
            [
                'name' => 'XBOX',
                'slug' => 'xbox',
                'logo_id' => 4
            ]
        ]);
    }
}
