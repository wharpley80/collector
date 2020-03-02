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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //DB::table('company')->truncate();

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
                'name' => 'Sony',
                'slug' => 'sony',
                'logo_id' => 3
            ],
            [
                'name' => 'Microsoft',
                'slug' => 'microsoft',
                'logo_id' => 4
            ]
        ]);
    
    }
}
