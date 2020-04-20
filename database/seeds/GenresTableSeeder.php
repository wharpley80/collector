<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //DB::table('genres')->truncate();

        Genre::insert(
        [
            [
                'name' => 'Platformer',
                'slug' => 'platformer',
                'parent_genre' => 'Action',
                'parent_genre_slug' => 'action'
            ],
            [
                'name' => 'Shooter',
                'slug' => 'shooter',
                'parent_genre' => 'Action',
                'parent_genre_slug' => 'action'
            ],
            [
                'name' => 'Fighting',
                'slug' => 'fighting',
                'parent_genre' => 'Action',
                'parent_genre_slug' => 'action'
            ],
            [
                'name' => 'Beat Em Up',
                'slug' => 'beat_em_up',
                'parent_genre' => 'Action',
                'parent_genre_slug' => 'action'
            ],
            [
                'name' => 'Stealth',
                'slug' => 'stealth',
                'parent_genre' => 'Action',
                'parent_genre_slug' => 'action'
            ],
            [
                'name' => 'Survival',
                'slug' => 'survival',
                'parent_genre' => 'Action',
                'parent_genre_slug' => 'action'
            ],
            [
                'name' => 'Rhythm',
                'slug' => 'rhythm',
                'parent_genre' => 'Action',
                'parent_genre_slug' => 'action'
            ],
            [
                'name' => 'Battle Royale',
                'slug' => 'battle_royale',
                'parent_genre' => 'Action',
                'parent_genre_slug' => 'action'
            ],
            [
                'name' => 'Survival Horror',
                'slug' => 'survival_horror',
                'parent_genre' => 'Action-Adventure',
                'parent_genre_slug' => 'action_adventure'
            ],
            [
                'name' => 'Metroidvania',
                'slug' => 'metroidvania',
                'parent_genre' => 'Action-Adventure',
                'parent_genre_slug' => 'action_adventure'
            ],
            [
                'name' => 'Text Adventure',
                'slug' => 'text_adventure',
                'parent_genre' => 'Adventure',
                'parent_genre_slug' => 'adventure'
            ],
            [
                'name' => 'Graphic Adventure',
                'slug' => 'graphic_adventure',
                'parent_genre' => 'Adventure',
                'parent_genre_slug' => 'adventure'
            ],
            [
                'name' => 'Visual Novel',
                'slug' => 'visual_novel',
                'parent_genre' => 'Adventure',
                'parent_genre_slug' => 'adventure'
            ],
            [
                'name' => 'Interactive Movie',
                'slug' => 'interactive_movie',
                'parent_genre' => 'Adventure',
                'parent_genre_slug' => 'adventure'
            ],
            [
                'name' => 'Real-Time 3D Adventure',
                'slug' => 'real_time_3D_adventure',
                'parent_genre' => 'Adventure',
                'parent_genre_slug' => 'adventure'
            ],
            [
                'name' => 'Action RPG',
                'slug' => 'action_rpg',
                'parent_genre' => 'Role-Playing',
                'parent_genre_slug' => 'role_playing'
            ],
            [
                'name' => 'MMO RPG',
                'slug' => 'mmo_rpg',
                'parent_genre' => 'Role-Playing',
                'parent_genre_slug' => 'role_playing'
            ],
            [
                'name' => 'Roguelikes',
                'slug' => 'Roguelikes',
                'parent_genre' => 'Role-Playing',
                'parent_genre_slug' => 'role_playing'
            ],
            [
                'name' => 'Tactical RPG',
                'slug' => 'tactical_rpg',
                'parent_genre' => 'Role-Playing',
                'parent_genre_slug' => 'role_playing'
            ],
            [
                'name' => 'Sandbox RPG',
                'slug' => 'sandbox_rpg',
                'parent_genre' => 'Role-Playing',
                'parent_genre_slug' => 'role_playing'
            ],
            [
                'name' => 'JRPG',
                'slug' => 'jrpg',
                'parent_genre' => 'Role-Playing',
                'parent_genre_slug' => 'role_playing'
            ],
            [
                'name' => 'First-Person Party-Based RPG',
                'slug' => 'first_person_party_based_rpg',
                'parent_genre' => 'Role-Playing',
                'parent_genre_slug' => 'role_playing'
            ],
            [
                'name' => 'Construction and Management Simulation',
                'slug' => 'construction_and_management_simulation',
                'parent_genre' => 'Simulation',
                'parent_genre_slug' => 'simulation'
            ],
            [
                'name' => 'Life Simulation',
                'slug' => 'life_simulation',
                'parent_genre' => 'Simulation',
                'parent_genre_slug' => 'simulation'
            ],
            [
                'name' => 'Vehicle Simulation',
                'slug' => 'vehicle_simulation',
                'parent_genre' => 'Simulation',
                'parent_genre_slug' => 'simulation'
            ],
            [
                'name' => '4X',
                'slug' => '4x',
                'parent_genre' => 'Strategy',
                'parent_genre_slug' => 'strategy'
            ],
            [
                'name' => 'Artillery',
                'slug' => 'artillery',
                'parent_genre' => 'Strategy',
                'parent_genre_slug' => 'strategy'
            ],
            [
                'name' => 'Auto Battler',
                'slug' => 'auto_battler',
                'parent_genre' => 'Strategy',
                'parent_genre_slug' => 'strategy'
            ],
            [
                'name' => 'MOBA Strategy',
                'slug' => 'moba_strategy',
                'parent_genre' => 'Strategy',
                'parent_genre_slug' => 'strategy'
            ],
            [
                'name' => 'Real-Time Strategy',
                'slug' => 'real_time_strategy',
                'parent_genre' => 'Strategy',
                'parent_genre_slug' => 'strategy'
            ],
            [
                'name' => 'Real-Time Tactics',
                'slug' => 'real_time_tactics',
                'parent_genre' => 'Strategy',
                'parent_genre_slug' => 'strategy'
            ],
            [
                'name' => 'Tower Defense',
                'slug' => 'tower_defense',
                'parent_genre' => 'Strategy',
                'parent_genre_slug' => 'strategy'
            ],
            [
                'name' => 'Turn-Based Strategy',
                'slug' => 'turn_based_strategy',
                'parent_genre' => 'Strategy',
                'parent_genre_slug' => 'strategy'
            ],
            [
                'name' => 'Turn-Based Tactics',
                'slug' => 'turn_based_tactics',
                'parent_genre' => 'Strategy',
                'parent_genre_slug' => 'strategy'
            ],
            [
                'name' => 'Wargame',
                'slug' => 'wargame',
                'parent_genre' => 'Strategy',
                'parent_genre_slug' => 'strategy'
            ],
            [
                'name' => 'Grand Strategy Wargame',
                'slug' => 'grand_strategy_wargame',
                'parent_genre' => 'Strategy',
                'parent_genre_slug' => 'strategy'
            ],
            [
                'name' => 'Racing',
                'slug' => 'racing',
                'parent_genre' => 'Sports',
                'parent_genre_slug' => 'sports'
            ],
            [
                'name' => 'Sports Game',
                'slug' => 'sports_game',
                'parent_genre' => 'Sports',
                'parent_genre_slug' => 'sports'
            ],
            [
                'name' => 'Competitive',
                'slug' => 'competitive',
                'parent_genre' => 'Sports',
                'parent_genre_slug' => 'sports'
            ],
            [
                'name' => 'Sports-Based Fighting',
                'slug' => 'sports_based_fighting',
                'parent_genre' => 'Sports',
                'parent_genre_slug' => 'sports'
            ],
            [
                'name' => 'Board/Card',
                'slug' => 'board_card',
                'parent_genre' => 'Other',
                'parent_genre_slug' => 'other'
            ],
            [
                'name' => 'Casual',
                'slug' => 'casual',
                'parent_genre' => 'Other',
                'parent_genre_slug' => 'other'
            ],
            [
                'name' => 'Digital Collectible Card Game',
                'slug' => 'digital_collectible_card_game',
                'parent_genre' => 'Other',
                'parent_genre_slug' => 'other'
            ],
            [
                'name' => 'Logic',
                'slug' => 'logic',
                'parent_genre' => 'Other',
                'parent_genre_slug' => 'other'
            ],
            [
                'name' => 'MMO',
                'slug' => 'mmo',
                'parent_genre' => 'Other',
                'parent_genre_slug' => 'other'
            ],
            [
                'name' => 'Mobile',
                'slug' => 'mobile',
                'parent_genre' => 'Other',
                'parent_genre_slug' => 'other'
            ],
            [
                'name' => 'Party',
                'slug' => 'party',
                'parent_genre' => 'Other',
                'parent_genre_slug' => 'other'
            ],
            [
                'name' => 'Programming',
                'slug' => 'programming',
                'parent_genre' => 'Other',
                'parent_genre_slug' => 'other'
            ],
            [
                'name' => 'Trivia',
                'slug' => 'trivia',
                'parent_genre' => 'Other',
                'parent_genre_slug' => 'other'
            ],
            [
                'name' => 'Art',
                'slug' => 'art',
                'parent_genre' => 'Other',
                'parent_genre_slug' => 'other'
            ],
            [
                'name' => 'Christian',
                'slug' => 'christian',
                'parent_genre' => 'Other',
                'parent_genre_slug' => 'other'
            ],
            [
                'name' => 'Educational',
                'slug' => 'educational',
                'parent_genre' => 'Other',
                'parent_genre_slug' => 'other'
            ],
            [
                'name' => 'Esports',
                'slug' => 'esports',
                'parent_genre' => 'Other',
                'parent_genre_slug' => 'other'
            ],
            [
                'name' => 'Exergame',
                'slug' => 'exergame',
                'parent_genre' => 'Other',
                'parent_genre_slug' => 'other'
            ],
            [
                'name' => 'Personalized',
                'slug' => 'personalized',
                'parent_genre' => 'Other',
                'parent_genre_slug' => 'other'
            ],
            [
                'name' => 'Serious',
                'slug' => 'serious',
                'parent_genre' => 'Other',
                'parent_genre_slug' => 'other'
            ],
            [
                'name' => 'Pinball',
                'slug' => 'pinball',
                'parent_genre' => 'Simulation',
                'parent_genre_slug' => 'simulation'
            ],
            [
                'name' => 'First-Person Shooter',
                'slug' => 'first_person_shooter',
                'parent_genre' => 'Action',
                'parent_genre_slug' => 'action'
            ],
            [
                'name' => 'Third-Person Shooter',
                'slug' => 'Third_person_shooter',
                'parent_genre' => 'Action',
                'parent_genre_slug' => 'action'
            ],
            [
                'name' => 'Action',
                'slug' => 'action',
                'parent_genre' => 'Action',
                'parent_genre_slug' => 'action'
            ],
            [
                'name' => 'Action-Adventure',
                'slug' => 'action_adventure',
                'parent_genre' => 'Adventure',
                'parent_genre_slug' => 'adventure'
            ],
            [
                'name' => 'RPG',
                'slug' => 'rpg',
                'parent_genre' => 'Role-Playing',
                'parent_genre_slug' => 'role_playing'
            ],
            [
                'name' => 'Compilation',
                'slug' => 'compilation',
                'parent_genre' => 'Other',
                'parent_genre_slug' => 'other'
            ],
            [
                'name' => 'Metroidvania',
                'slug' => 'metroidvania',
                'parent_genre' => 'Adventure',
                'parent_genre_slug' => 'adventure'
            ],
            [
                'name' => 'Hack and Slash',
                'slug' => 'hack_and_slash',
                'parent_genre' => 'Action',
                'parent_genre_slug' => 'action'
            ],
            [
                'name' => 'Arena Fighting',
                'slug' => 'arena_fighting',
                'parent_genre' => 'Action',
                'parent_genre_slug' => 'action'
            ],
            [
                'name' => 'Light Gun Shooter',
                'slug' => 'light_gun_shooter',
                'parent_genre' => 'Action',
                'parent_genre_slug' => 'action'
            ],
            [
                'name' => 'Puzzle',
                'slug' => 'puzzle',
                'parent_genre' => 'Other',
                'parent_genre_slug' => 'other'
            ],
            [
                'name' => 'Simulation',
                'slug' => 'simulation',
                'parent_genre' => 'Simulation',
                'parent_genre_slug' => 'simulation'
            ],
            [
                'name' => 'Combat Flight Simulator',
                'slug' => 'combat_flight_simulator',
                'parent_genre' => 'Simulation',
                'parent_genre_slug' => 'simulation'
            ],
            [
                'name' => 'Point-and-Click Adventure',
                'slug' => 'point_and_click_adventure',
                'parent_genre' => 'Adventure',
                'parent_genre_slug' => 'adventure'
            ],
            [
                'name' => 'Adventure',
                'slug' => 'adventure',
                'parent_genre' => 'Adventure',
                'parent_genre_slug' => 'adventure'
            ],
            [
                'name' => 'Rail Shooter',
                'slug' => 'rail_shooter',
                'parent_genre' => 'Action',
                'parent_genre_slug' => 'action'
            ],
            [
                'name' => 'Car Combat',
                'slug' => 'car_combat',
                'parent_genre' => 'Action',
                'parent_genre_slug' => 'action'
            ],
            [
                'name' => 'Bullet Hell Shooter',
                'slug' => 'bullet_hell_shooter',
                'parent_genre' => 'Shoot \'em up',
                'parent_genre_slug' => 'shoot_em_up'
            ],
            [
                'name' => 'Vertical Scrolling Shooter',
                'slug' => 'vertical_scrolling_shooter',
                'parent_genre' => 'Shoot \'em up',
                'parent_genre_slug' => 'shoot_em_up'
            ],
            [
                'name' => 'Horizontal Scrolling Shooter',
                'slug' => 'horizontal_scrolling_shooter',
                'parent_genre' => 'Shoot \'em up',
                'parent_genre_slug' => 'shoot_em_up'
            ],
            [
                'name' => 'Shoot \'em up',
                'slug' => 'shoot_em_up',
                'parent_genre' => 'Shoot \'em up',
                'parent_genre_slug' => 'shoot_em_up'
            ],
            [
                'name' => 'Twin Stick Shooter',
                'slug' => 'twin_stick_shooter',
                'parent_genre' => 'Action',
                'parent_genre_slug' => 'action'
            ],
            [
                'name' => 'Puzzle Adventure',
                'slug' => 'puzzle_adventure',
                'parent_genre' => 'Adventure',
                'parent_genre_slug' => 'adventure'
            ],
            [
                'name' => 'Space Combat Simulator',
                'slug' => 'space_combat_simulator',
                'parent_genre' => 'Simulation',
                'parent_genre_slug' => 'simulation'
            ],
            [
                'name' => 'Soccer Game',
                'slug' => 'soccer_game',
                'parent_genre' => 'Sports',
                'parent_genre_slug' => 'sports'
            ],
            [
                'name' => 'Baseball Game',
                'slug' => 'baseball_game',
                'parent_genre' => 'Sports',
                'parent_genre_slug' => 'sports'
            ],
            [
                'name' => 'Basketball Game',
                'slug' => 'basketball_game',
                'parent_genre' => 'Sports',
                'parent_genre_slug' => 'sports'
            ],
            [
                'name' => 'Football Game',
                'slug' => 'football_game',
                'parent_genre' => 'Sports',
                'parent_genre_slug' => 'sports'
            ],
            [
                'name' => 'Golf Game',
                'slug' => 'golf_game',
                'parent_genre' => 'Sports',
                'parent_genre_slug' => 'sports'
            ],
            [
                'name' => 'Hockey Game',
                'slug' => 'hockey_game',
                'parent_genre' => 'Sports',
                'parent_genre_slug' => 'sports'
            ],
            [
                'name' => 'Tennis Game',
                'slug' => 'tennis_game',
                'parent_genre' => 'Sports',
                'parent_genre_slug' => 'sports'
            ],
        ]);

    }
}
