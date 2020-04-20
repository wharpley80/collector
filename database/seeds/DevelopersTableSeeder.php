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
                    'name' => 'Jumpin Jack Software',
                    'slug' => 'jumpin_jack_software'
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
                    'name' => 'Big Ape Production',
                    'slug' => 'big_ape_production'
                ],
                [
                    'name' => 'Crystal Dynamics',
                    'slug' => 'crystal_dynamics'
                ],
                [
                    'name' => 'Lemon',
                    'slug' => 'lemon'
                ],
                [
                    'name' => 'Sunsoft',
                    'slug' => 'sunsoft'
                ],
                [
                    'name' => 'Probe Entertainment',
                    'slug' => 'probe_entertainment'
                ],
                [
                    'name' => 'Iguana Entertainment',
                    'slug' => 'iguana_entertainment'
                ],
                [
                    'name' => 'Infogrames',
                    'slug' => 'infogrames'
                ],
                [
                    'name' => 'Mesa Logic',
                    'slug' => 'mesa_logic'
                ],
                [
                    'name' => 'Jaleco',
                    'slug' => 'jaleco'
                ],
                [
                    'name' => 'Smilebit',
                    'slug' => 'smilebit'
                ],
                [
                    'name' => 'Vicarious Visions',
                    'slug' => 'vicarious_visions'
                ],
                [
                    'name' => 'Team Ninja',
                    'slug' => 'team_ninja'
                ],
                [
                    'name' => 'Cyclone Studios',
                    'slug' => 'cyclone_studios'
                ],
                [
                    'name' => 'Sega Away Team',
                    'slug' => 'sega_away_team'
                ],
                [
                    'name' => 'The Illusions Gaming Company',
                    'slug' => 'the_illusions_gaming_company'
                ],
                [
                    'name' => 'ReadySoft',
                    'slug' => 'readysoft'
                ],
                [
                    'name' => 'Ocean Software',
                    'slug' => 'ocean_software'
                ],
                [
                    'name' => 'Taito',
                    'slug' => 'taito'
                ],
                [
                    'name' => 'Funcom',
                    'slug' => 'funcom'
                ],
                [
                    'name' => 'Imagineering',
                    'slug' => 'imagineering'
                ],
                [
                    'name' => 'Planet Interactive',
                    'slug' => 'planet_interactive'
                ],
                [
                    'name' => 'G3 Interactive',
                    'slug' => 'g3_interactive'
                ],
                [
                    'name' => 'Bonsai Entertainment',
                    'slug' => 'bonsai_entertainment'
                ],
                [
                    'name' => 'Westwood Studios',
                    'slug' => 'westwood_studios'
                ],
                [
                    'name' => 'Digital Pictures',
                    'slug' => 'digital_pictures'
                ],
                [
                    'name' => 'New Level Software',
                    'slug' => 'new_level_software'
                ],
                [
                    'name' => 'Interactive Studios',
                    'slug' => 'interactive_studios'
                ],
                [
                    'name' => 'Argonaut Software',
                    'slug' => 'argonaut_software'
                ],
                [
                    'name' => 'Eidos Interactive',
                    'slug' => 'eidos_interactive'
                ],
                [
                    'name' => 'Kronos Digital Entertainment',
                    'slug' => 'kronos_digital_entertainment'
                ],
                [
                    'name' => 'Virtucraft',
                    'slug' => 'virtucraft'
                ],
                [
                    'name' => 'Sega AM3',
                    'slug' => 'sega_am3'
                ],
                [
                    'name' => 'Xatrix Entertainment',
                    'slug' => 'xatrix_entertainment'
                ],
                [
                    'name' => 'Warp',
                    'slug' => 'warp'
                ],
                [
                    'name' => 'Climax Entertainment',
                    'slug' => 'climax_entertainment'
                ],
                [
                    'name' => 'Rage Software',
                    'slug' => 'rage_software'
                ],
                [
                    'name' => 'Amusement Vision',
                    'slug' => 'amusement_vision'
                ],
                [
                    'name' => 'Millennium Interactive',
                    'slug' => 'millennium_interactive'
                ],
                [
                    'name' => 'Sega AM1',
                    'slug' => 'sega_am1'
                ],
                [
                    'name' => 'N-Space',
                    'slug' => 'n_space'
                ],
                [
                    'name' => 'Rage Software',
                    'slug' => 'rage_software'
                ],
                [
                    'name' => 'Midway Studios',
                    'slug' => 'midway_studios'
                ],
                [
                    'name' => 'id Software',
                    'slug' => 'id_software'
                ],
                [
                    'name' => 'Midway Games',
                    'slug' => 'midway_games'
                ],
                [
                    'name' => 'Screaming Villans',
                    'slug' => 'screaming_villans'
                ],
                [
                    'name' => 'Torus Games',
                    'slug' => 'torus_games'
                ],
                [
                    'name' => 'Lobotomy Software',
                    'slug' => 'lobotomy_software'
                ],
                [
                    'name' => 'Eurocom',
                    'slug' => 'eurocom'
                ],
                [
                    'name' => 'Aardvark Software',
                    'slug' => 'aardvark_software'
                ],
                [
                    'name' => 'Gearbox Software',
                    'slug' => 'gearbox_software'
                ],
                [
                    'name' => 'Apogee Software',
                    'slug' => 'apogee_software'
                ],
                [
                    'name' => 'Shiny Entertainment',
                    'slug' => 'shiny_entertainment'
                ],
                [
                    'name' => 'Screaming Pink',
                    'slug' => 'screaming_pink'
                ],
                [
                    'name' => 'Super Empire',
                    'slug' => 'super_empire'
                ],
                [
                    'name' => 'David A. Palmer Productions',
                    'slug' => 'david_a_palmer_productions'
                ],
                [
                    'name' => 'Game Titan',
                    'slug' => 'game_titan'
                ],
                [
                    'name' => 'VIS Interactive',
                    'slug' => 'vis_interactive'
                ],
                [
                    'name' => 'Sega CS',
                    'slug' => 'sega_cs'
                ],
                [
                    'name' => 'Extended Play Productions',
                    'slug' => 'extended_play_productions'
                ],
                [
                    'name' => 'XYZ Productions',
                    'slug' => 'xyz_productions'
                ],
                [
                    'name' => 'Tiertex Design Studios',
                    'slug' => 'tiertex_design_studios'
                ],
                [
                    'name' => 'Perfect Entertainment',
                    'slug' => 'perfect_entertainment'
                ],
                [
                    'name' => 'Ving',
                    'slug' => 'ving'
                ],
                [
                    'name' => 'TOSE',
                    'slug' => 'tose'
                ],
                [
                    'name' => 'Santaclaus',
                    'slug' => 'santaclaus'
                ],
                [
                    'name' => 'Burst Studios',
                    'slug' => 'burst_studios'
                ],
                [
                    'name' => 'Radical Entertainment',
                    'slug' => 'radical_entertainment'
                ],
                [
                    'name' => 'Game Arts',
                    'slug' => 'game_arts'
                ]
            ]
        );

    }
}
