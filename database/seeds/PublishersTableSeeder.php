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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
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
            ],
            [
                'name' => 'Capcom',
                'slug' => 'capcom'
            ],
            [
                'name' => 'Electronic Arts',
                'slug' => 'electronic_arts'
            ],
            [
                'name' => 'Nintendo',
                'slug' => 'nintendo'
            ],
            [
                'name' => 'THQ',
                'slug' => 'thq'
            ],
            [
                'name' => 'THQ Nordic',
                'slug' => 'thq_nordic'
            ],
            [
                'name' => 'Ignition Entertainment',
                'slug' => 'ignition_entertainment'
            ],
            [
                'name' => 'Marvelous Entertainment',
                'slug' => 'marvelous_entertainment'
            ],
            [
                'name' => 'Rising Star Games',
                'slug' => 'rising_star_games'
            ],
            [
                'name' => 'Aksys Games',
                'slug' => 'aksys_games'
            ],
            [
                'name' => 'Marvelous AQL',
                'slug' => 'marvelous_aql'
            ],
            [
                'name' => 'T&E Soft',
                'slug' => 't&e_soft'
            ],
            [
                'name' => 'LucasArts',
                'slug' => 'lucasarts'
            ],
            [
                'name' => 'Crystal Dynamics',
                'slug' => 'crystal_dynamics'
            ],
            [
                'name' => 'BMG Japan',
                'slug' => 'bmg_japan'
            ],
            [
                'name' => 'Scavenger',
                'slug' => 'scavenger'
            ],
            [
                'name' => 'Koei',
                'slug' => 'koei'
            ],
            [
                'name' => 'ESP Software',
                'slug' => 'esp_software'
            ],
            [
                'name' => 'Sunsoft',
                'slug' => 'sunsoft'
            ],
            [
                'name' => 'Infogrames',
                'slug' => 'infogrames'
            ],
            [
                'name' => 'Atari Games',
                'slug' => 'atari_games'
            ],
            [
                'name' => 'Jaleco',
                'slug' => 'jaleco'
            ],
            [
                'name' => 'Sony Computer Entertainment',
                'slug' => 'sony_computer_entertainment'
            ],
            [
                'name' => 'Sony Interactive',
                'slug' => 'sony_interactive'
            ],
            [
                'name' => 'Koei Tecmo',
                'slug' => 'koei_tecmo'
            ],
            [
                'name' => 'Activision',
                'slug' => 'activision'
            ],
            [
                'name' => 'ReadySoft',
                'slug' => 'readysoft'
            ],
            [
                'name' => 'Coconuts Japan',
                'slug' => 'coconuts_japan'
            ],
            [
                'name' => 'Ocean Software',
                'slug' => 'ocean_software'
            ],
            [
                'name' => 'Pack-In-Soft',
                'slug' => 'pack_in_soft'
            ],
            [
                'name' => 'Taito',
                'slug' => 'taito'
            ],
            [
                'name' => 'Interplay',
                'slug' => 'interplay'
            ],
            [
                'name' => 'Microids',
                'slug' => 'microids'
            ],
            [
                'name' => 'Digital Pictures',
                'slug' => 'digital_pictures'
            ],
            [
                'name' => 'GT Interactive',
                'slug' => 'gt_interactive'
            ],
            [
                'name' => 'BMG Interactive',
                'slug' => 'bmg_interactive'
            ],
            [
                'name' => 'Data East',
                'slug' => 'data_east'
            ],
            [
                'name' => 'Cave',
                'slug' => 'cave'
            ],
            [
                'name' => 'Vic Tokai',
                'slug' => 'vic_tokai'
            ],
            [
                'name' => 'Fox Interactive',
                'slug' => 'fox_interactive'
            ],
            [
                'name' => 'Interbec',
                'slug' => 'interbec'
            ],
            [
                'name' => 'Strictly Limited Games',
                'slug' => 'strictly_limited_games'
            ],
            [
                'name' => 'Signature Edition Games',
                'slug' => 'signature_edition_games'
            ],
            [
                'name' => 'Limited Edition Games',
                'slug' => 'limited_edition_games'
            ],
            [
                'name' => 'Multisoft',
                'slug' => 'multisoft'
            ],
            [
                'name' => 'Softbank',
                'slug' => 'softbank'
            ],
            [
                'name' => 'Williams',
                'slug' => 'williams'
            ],
            [
                'name' => 'Bethesda Softworks',
                'slug' => 'bethesda_softworks'
            ],
            [
                'name' => 'Gearbox Publishing',
                'slug' => 'gearbox_publishing'
            ],
            [
                'name' => 'Take-Two Interactive',
                'slug' => 'take_two_interactive'
            ],
            [
                'name' => 'Deep Silver',
                'slug' => 'deep_silver'
            ],
            [
                'name' => '2K Games',
                'slug' => '2k_games'
            ],
            [
                'name' => 'Playmates Interactive Entertainment',
                'slug' => 'playmates_interactive_entertainment'
            ],
            [
                'name' => 'Majesco',
                'slug' => 'majesco'
            ],
            [
                'name' => 'Crave Entertainment',
                'slug' => 'crave_entertainment'
            ],
            [
                'name' => 'Tec Toy',
                'slug' => 'tec_toy'
            ],
            [
                'name' => 'Rockstar Games',
                'slug' => 'rockstar_games'
            ],
            [
                'name' => 'Warp',
                'slug' => 'warp'
            ],
            [
                'name' => 'Black Pearl Software',
                'slug' => 'black_pearl_software'
            ],
            [
                'name' => 'MediaQuest',
                'slug' => 'mediaquest'
            ],
            [
                'name' => 'Bandai',
                'slug' => 'bandai'
            ],
            [
                'name' => 'Ubisoft',
                'slug' => 'ubisoft'
            ],
            [
                'name' => 'Game Arts',
                'slug' => 'game_arts'
            ]
        ]);

    }
}
