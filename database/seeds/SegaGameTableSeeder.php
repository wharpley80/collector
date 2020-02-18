<?php

use Illuminate\Database\Seeder;
use App\SegaGame;

class SegaGameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('sega_games')->truncate();

        SegaGame::insert(
        [
            [
                'name' => 'Aaahh!!! Real Monsters',
                'slug' => 'aaahh_real_monsters',
                'platform' => 2,
                'region' => 1,
                'genre' => json_encode([1]),
                'publisher' => 7,
                'developer' => json_encode([9]),
                'description' => 'In order to graduate from Monster Academy, three young monsters, Ickis, Oblina, and Krumm, need to pass their Monster Midterm Exam. This test has them scaring a number of people that their headmaster, the Gromble, orders them to in order to pass the exam.',
                'cover' => 'https://images.igdb.com/igdb/image/upload/t_cover_small_2x/esbvruils6pu6jfsz3hs.jpg',
                'video' => 'https://www.youtube.com/watch?v=nWf_Xp0hML8',
                'price' => 'https://www.pricecharting.com/game/sega-genesis/aaahh-real-monsters',
                'release_date' => '1995-Aug-15'
            ],
            [
                'name' => 'Clue',
                'slug' => 'clue',
                'platform' => 2,
                'region' => 1,
                'genre' => json_encode([41]),
                'publisher' => 5,
                'developer' => json_encode([6]),
                'description' => 'In addition to play by the original rules, Clue has an additional mode that allows movement via "points." Each turn begins with nine points and every action the player takes costs points. The player can only do as many things as he has points. For example, moving from square to square costs one point, making a suggestion costs three points. Many players prefer this mode of play as it makes the game more balanced since each player gets the same number of "moves" each turn.',
                'cover' => 'https://images.igdb.com/igdb/image/upload/t_cover_small_2x/zonxbanoxlqc7y9kvazg.jpg',
                'video' => 'https://www.youtube.com/watch?v=KUN4_80-Piw',
                'price' => 'https://www.pricecharting.com/game/sega-genesis/clue',
                'release_date' => '1992'
            ],
            [
                'name' => 'Coach K College Basketball',
                'slug' => 'coach_k_college_basketball',
                'platform' => 2,
                'region' => 1,
                'genre' => json_encode([38]),
                'publisher' => 6,
                'developer' => json_encode([8]),
                'description' => 'There are three game modes: Season, Tournament (with three save slots for both) and Exhibition, and options follow the standard set from the NBA Live series. Gameplay also remains unchanged, with the typical three basic actions (fast running/steal, pass and shoot/block for A, B and C buttons) and the ability to call moves on the fly by pressing one of the buttons along Start (three or six moves can be set, depending on the joypad used).',
                'cover' => 'http://williamharpleydev.com/img/collectorsDojo/covers/coach_k_college_basketball.jpg',
                'video' => 'https://www.youtube.com/watch?v=m8J0t8mBsBs',
                'price' => 'https://www.pricecharting.com/game/sega-genesis/coach-k-college-basketball?q=coach+k+college+basketball',
                'release_date' => '1995-Feb-01'
            ],
            [
                'name' => 'College Football USA 97',
                'slug' => 'college_football_usa_97',
                'platform' => 2,
                'region' => 1,
                'genre' => json_encode([38]),
                'publisher' => 6,
                'developer' => json_encode([7]),
                'description' => 'September is a wonderful time of year as the leaves start to change, the kids go back to school, and Christmas is only a few months away but it also means the college football season. Well, now you can stage your own college football season anytime you want thanks to COLLEGE FOOTBALL USA \'97. Choose from 111 Division I teams and hit the gridiron for some hard-hitting football action as you try to lead your team to the national championship.',  
                'cover' => 'http://williamharpleydev.com/img/collectorsDojo/covers/college_football_usa_97.jpg',
                'video' => 'https://www.youtube.com/watch?v=LNPH_h8inG8',
                'price' => 'https://www.pricecharting.com/game/sega-genesis/college-football-usa-97-the-road-to-new-orleans?q=college+football+usa+97',
                'release_date' => '1996-Feb-01'
            ],
            [
                'name' => 'Crusader of Centy',
                'slug' => 'crusader_of_centy',
                'platform' => 2,
                'region' => 1,
                'genre' => json_encode([16]),
                'publisher' => 2,
                'developer' => json_encode([2]),
                'description' => 'Millions of years ago, heinous creatures that lurked in the shadows and darkness that blanketed the planet inhabited the Earth. When light finally broke through, only a few beasts were able to survive by burrowing into deep caverns. Over time, they multiplied, evolved, and patiently waited for the right time to emerge and rule the Earth once again. You are Corona, and you\'ve just celebrated your 14th birthday. By law of the king, you must now go seek out these creatures of the dark and destroy them.',
                'cover' => 'https://images.igdb.com/igdb/image/upload/t_cover_small_2x/hl8ru1lld5xjqsvggiqy.jpg',
                'video' => 'https://www.youtube.com/watch?v=zdjp53iaeso',
                'price' => 'https://www.pricecharting.com/game/sega-genesis/crusader-of-centy',
                'release_date' => '1994'
            ],
            [
                'name' => 'Dino Land',
                'slug' => 'dino_land',
                'platform' => 2,
                'region' => 1,
                'genre' => json_encode([57]),
                'publisher' => 3,
                'developer' => json_encode([3]),
                'description' => 'Dino Land is a dinosaur themed pinball machine. You basically have the shoot your pinball at dinosaur targets. As you go along, you get more points after you have hit all the dinosaur targets in the board. There are 4 pinball boards, one on ground with ground creatures, an air one that represents flying creatures, a sea level which has sea creatures, and a boss level where you are trying to save your girlfriend from the boss.',
                'cover' => 'https://images.igdb.com/igdb/image/upload/t_cover_small_2x/mopwookpudlqg2kqbckp.jpg',
                'video' => 'https://www.youtube.com/watch?v=vwKtuhgjhMU',
                'price' => 'https://www.pricecharting.com/game/sega-genesis/dino-land',
                'release_date' => '1991'
            ],
            [
                'name' => 'Elemental Master',
                'slug' => 'elemental_master',
                'platform' => 2,
                'region' => 1,
                'genre' => json_encode([2]),
                'publisher' => 3,
                'developer' => json_encode([12]),
                'description' => 'Gyra has usurped the throne, and his minions are pillaging and plundering throughout the countryside. The kingdom is doomed unless someone can stop this madness and restore order to the land. You are the ELEMENTAL MASTER, and you\'re the only person with the power to put an end to Gyra\'s reign of terror. Harnessing the power of the elements fire, water, wind, and the earth you use them as your very own weapons to fight all that is evil in the world.',
                'cover' => 'https://images.igdb.com/igdb/image/upload/t_cover_small_2x/fmermy780jrdsl4rnomx.jpg', 
                'video' => 'https://www.youtube.com/watch?v=0-nQvlZu0bg',
                'price' => 'https://www.pricecharting.com/game/sega-genesis/elemental-master',
                'release_date' => '1991-Jan-14'
            ],
            [
                'name' => 'Final Zone',
                'slug' => 'final_zone',
                'platform' => 2,
                'region' => 1,
                'genre' => json_encode([2]),
                'publisher' => 3,
                'developer' => json_encode([3]),
                'description' => 'It is 100 years into the future. Nuclear weapons, missiles and other weapons of mass destruction are banned, but a new piece of military hardware is about to shape the future. The N.A.P. (New Age Power-Suit), is the newest weapon, a mechanical tank, able to destroy anything in its path. You play as a soldier of the El Shiria Military\'s "Undead" unit named Howie Bowie (no joke) as you are about to go on a urgent mission to destroy your enemies, The Bloody Axis, before they can strike at your nation.',
                'cover' => 'https://images.igdb.com/igdb/image/upload/t_cover_small_2x/ao1cvlefkt7axzyhvb7f.jpg',
                'video' => 'https://www.youtube.com/watch?v=r9_pmxVgnPM',
                'price' => 'https://www.pricecharting.com/game/sega-genesis/final-zone',
                'release_date' => '1990-Feb-01'
            ],
            [
                'name' => 'IMG International Tour Tennis',
                'slug' => 'img_international_tour_tennis',
                'platform' => 2,
                'region' => 1,
                'genre' => json_encode([38]),
                'publisher' => 6,
                'developer' => json_encode([7]),
                'description' => 'Licensed by the International Management Group (IMG), this rare Electronic Arts venture into Tennis features 32 professional players (all male and licensed by the IMG) including Bjorn Borg, Marcelo Rios, Patrick Rafter and Yevgeni Kafelnikov in 15 tournaments with different surfaces.',
                'cover' => 'https://images.igdb.com/igdb/image/upload/t_cover_small_2x/pdxakvogbu89lvvquwww.jpg',
                'video' => 'https://www.youtube.com/watch?v=AYDsQPmq3xw',
                'price' => 'https://www.pricecharting.com/game/sega-genesis/img-international-tour-tennis',
                'release_date' => '1994-Jun-21'
            ],
            [
                'name' => 'McDonald\'s Treasure Land Adventure',
                'slug' => 'mcdonalds_treasure_land_adventure',
                'platform' => 2,
                'region' => 5,
                'genre' => json_encode([1]),
                'publisher' => 4,
                'developer' => json_encode([5]),
                'description' => 'McDonald\'s Treasure Land Adventure is a side-scrolling adventure starring Ronald McDonald. After finding a piece of a treasure map, the yellow clown travels through four different levels (Forest, Town, Sea and Moon). He\'s off to find and defeat the baddies who have the other pieces of the map. Ronald can jump, shoot and use his scarf to grab onto hooks to jump to higher levels.',
                'cover' => 'https://images.igdb.com/igdb/image/upload/t_cover_small_2x/yiqllg2x9hd98btg5dce.jpg',
                'video' => 'https://www.youtube.com/watch?v=Q9WRmyHSCAY',
                'price' => 'https://www.pricecharting.com/game/sega-genesis/mcdonald%27s-treasureland-adventure',
                'release_date' => '1993-Sep-23'
            ],
            [
                'name' => 'Micro Machines: Turbo Tournament 96',
                'slug' => 'micro_machines_turbo_tournament_96',
                'platform' => 2,
                'region' => 3,
                'genre' => json_encode([37]),
                'publisher' => 9,
                'developer' => json_encode([13]),
                'description' => 'Micro Machines: Turbo Tournament 96 is a sequel to Micro Machines 2: Turbo Tournament, released exclusively on the Sega Mega Drive in Europe.',
                'cover' => 'https://images.igdb.com/igdb/image/upload/t_cover_small_2x/mdlxtcszkkt5vkpkom8g.jpg',
                'video' => 'https://www.youtube.com/watch?v=SAAyukyVA0M',
                'price' => 'https://www.pricecharting.com/game/pal-sega-mega-drive/micro-machines-turbo-tournament-96?q=micro+machines+turbo+tournament+96',
                'release_date' => '1995-Oct-20'
            ],
            [
                'name' => 'Prime Time NFL Football Starring Deion Sanders',
                'slug' => 'prime_time_nfl_starring_deion_sanders',
                'platform' => 2,
                'region' => 1,
                'genre' => json_encode([38]),
                'publisher' => 4,
                'developer' => json_encode([10, 13]),
                'description' => 'Prime Time NFL Starring Deion Sanders is a Football Sim game, developed by Farsight Technologies and published by Sega, which was released in 1995.',
                'cover' => 'http://williamharpleydev.com/img/collectorsDojo/covers/prime_time_nfl_deion_sanders.jpg',
                'video' => 'https://www.youtube.com/watch?v=_rHjQO4QDIo',
                'price' => 'https://www.pricecharting.com/game/sega-genesis/prime-time-nfl-football-starring-deion-sanders',
                'release_date' => '1995-Feb-01'
            ],
            [
                'name' => 'Sonic Classics',
                'slug' => 'sonic_classics',
                'platform' => 2,
                'region' => 5,
                'genre' => json_encode([1]),
                'publisher' => 4,
                'developer' => json_encode([4]),
                'description' => 'Sonic Classics compiles three games from the Sonic The Hedgehog series onto one cartridge. They are: Sonic the Hedgehog, Sonic the Hedgehog 2, Dr. Robotnik\'s Mean Bean Machine.',
                'cover' => 'https://images.igdb.com/igdb/image/upload/t_cover_small_2x/whfcwf4dwzzzoxtdgsrq.jpg',
                'video' => 'https://www.youtube.com/watch?v=H0F3p1OrlRU',
                'price' => 'https://www.pricecharting.com/game/sega-genesis/sonic-classics',
                'release_date' => '1997-Feb-01'
            ],
            [
                'name' => 'Tecmo Super Hockey',
                'slug' => 'tecmo_super_hockey',
                'platform' => 2,
                'region' => 1,
                'genre' => json_encode([38]),
                'publisher' => 1,
                'developer' => json_encode([1]),
                'description' => 'Tecmo Super Hockey features the license from the NHLPA, having the top players of the game at the time. It offers exhibition and regular games as well as playing a season with updated stats and the ability to play in the All-Star game as well. Gameplay is similar to other games, with buttons to pass, shoot, making slap-shots and fake shots, as well as fighting, which is not a common feature. It can be played by two players simultaneously.',
                'cover' => 'https://images.igdb.com/igdb/image/upload/t_cover_small_2x/au2kbfwpq6zxlrnfpow4.jpg',
                'video' => 'https://www.youtube.com/watch?v=WGP9bO3AoXA',
                'price' => 'https://www.pricecharting.com/game/sega-genesis/tecmo-super-hockey?q=tecmo+super+hockey',
                'release_date' => '1994-Feb-01'
            ],
            [
                'name' => 'WarpSpeed',
                'slug' => 'warpspeed',
                'platform' => 2,
                'region' => 5,
                'genre' => json_encode([25]),
                'publisher' => 8,
                'developer' => json_encode([11]),
                'description' => 'The player takes control of a starpilot with a mission to defend star bases from a fleet of invading alien warships. The game takes place from a cockpit perspective from one of four starfighters; the Stinger, Striker, Stalker,or Slasher. The game has 7 battle scenarios and a 4 scenario campaign mode.',
                'cover' => 'https://images.igdb.com/igdb/image/upload/t_cover_small_2x/orz2ajhcdlxlxy5jx5sf.jpg',
                'video' => 'https://www.youtube.com/watch?v=oZALKUiWRfk',
                'price' => 'https://www.pricecharting.com/game/sega-genesis/warpspeed',
                'release_date' => '1993'
            ],
            [
                'name' => 'Osomatsu-kun Hachamecha Gekijou',
                'slug' => 'osomatsu-kun_hachamecha_gekijou',
                'platform' => 2,
                'region' => 2,
                'genre' => json_encode([1]),
                'publisher' => 4,
                'developer' => json_encode([14]),
                'description' => 'Osomatsu-kun Hachamecha Gekijou (おそ松くん はちゃめちゃ劇場) is a 1988 action game by Sega for the Sega Mega Drive tying into the Osomatsu-kun media franchise in Japan, which at the time saw a revival in the form of an anime series stared the same year by Studio Pierrot. It is one of the few Mega Drive games to never receive full support for TMSS, meaning it will only work on most Model 1 Mega Drives.',
                'cover' => 'https://images.igdb.com/igdb/image/upload/t_cover_small_2x/pgz24m1gpcsladqokvj2.jpg',
                'video' => 'https://www.youtube.com/watch?v=Kc1DocJ7knk',
                'price' => '',
                'release_date' => '1989-Jan-24'
            ],
            [
                'name' => 'Shougi no Hoshi',
                'slug' => 'shougi_no_hoshi',
                'platform' => 2,
                'region' => 2,
                'genre' => json_encode([41]),
                'publisher' => 10,
                'developer' => json_encode([16]),
                'description' => 'Shougi no Hoshi (将棋の星) is a 1991 game for the Sega Mega Drive by Home Data. The game is an implementation of the Japanese board game Shogi.',
                'cover' => 'http://williamharpleydev.com/img/collectorsDojo/covers/shougi_no_hoshi.jpg',
                'video' => 'https://www.youtube.com/watch?v=E6xofbTSMWA',
                'price' => 'https://www.pricecharting.com/game/jp-sega-mega-drive/shougi-no-hoshi?q=shougi+no+hoshi',
                'release_date' => '1991-Dec-01'
            ],
            [
                'name' => 'Brian Lara Cricket \'96',
                'slug' => 'brian_lara_cricket_96',
                'platform' => 2,
                'region' => 3,
                'genre' => json_encode([38]),
                'publisher' => 9,
                'developer' => json_encode([15]),
                'description' => 'The style and method of game play is almost identical to previous versions of the game. Lara \96 featured the updated player names and statistics of the 1997 cricket season. Notable additional features include the capability to play as English county sides and a player editor.',
                'cover' => 'https://images.igdb.com/igdb/image/upload/t_cover_small_2x/ifca1mw300to34diiaov.jpg',
                'video' => 'https://www.youtube.com/watch?v=e0F0Ez4aFfA&t=5s',
                'price' => 'https://www.pricecharting.com/game/pal-sega-mega-drive/brian-lara-cricket-96?q=brian+lara+cricket+%2796',
                'release_date' => '1996'
            ],
            [
                'name' => 'Dino Land',
                'slug' => 'dino_land',
                'platform' => 2,
                'region' => 2,
                'genre' => json_encode([57]),
                'publisher' => 3,
                'developer' => json_encode([3]),
                'description' => 'Dino Land is a dinosaur themed pinball machine. You basically have the shoot your pinball at dinosaur targets. As you go along, you get more points after you have hit all the dinosaur targets in the board. There are 4 pinball boards, one on ground with ground creatures, an air one that represents flying creatures, a sea level which has sea creatures, and a boss level where you are trying to save your girlfriend from the boss.',
                'cover' => 'http://williamharpleydev.com/img/collectorsDojo/covers/dino_land_jp.jpg',
                'video' => 'https://www.youtube.com/watch?v=vwKtuhgjhMU',
                'price' => 'https://www.pricecharting.com/game/sega-genesis/dino-land',
                'release_date' => '1991'
            ],
            [
                'name' => 'Elemental Master',
                'slug' => 'elemental_master',
                'platform' => 2,
                'region' => 2,
                'genre' => json_encode([2]),
                'publisher' => 3,
                'developer' => json_encode([12]),
                'description' => 'Gyra has usurped the throne, and his minions are pillaging and plundering throughout the countryside. The kingdom is doomed unless someone can stop this madness and restore order to the land. You are the ELEMENTAL MASTER, and you\'re the only person with the power to put an end to Gyra\'s reign of terror. Harnessing the power of the elements fire, water, wind, and the earth you use them as your very own weapons to fight all that is evil in the world.',
                'cover' => 'http://williamharpleydev.com/img/collectorsDojo/covers/elemental_master_jp.jpg', 
                'video' => 'https://www.youtube.com/watch?v=0-nQvlZu0bg',
                'price' => 'https://www.pricecharting.com/game/sega-genesis/elemental-master',
                'release_date' => '1991-Jan-14'
            ],
            [
                'name' => 'Final Zone',
                'slug' => 'final_zone',
                'platform' => 2,
                'region' => 2,
                'genre' => json_encode([2]),
                'publisher' => 3,
                'developer' => json_encode([3]),
                'description' => 'It is 100 years into the future. Nuclear weapons, missiles and other weapons of mass destruction are banned, but a new piece of military hardware is about to shape the future. The N.A.P. (New Age Power-Suit), is the newest weapon, a mechanical tank, able to destroy anything in its path. You play as a soldier of the El Shiria Military\'s "Undead" unit named Howie Bowie (no joke) as you are about to go on a urgent mission to destroy your enemies, The Bloody Axis, before they can strike at your nation.',
                'cover' => 'http://williamharpleydev.com/img/collectorsDojo/covers/final_zone_jp.jpg',
                'video' => 'https://www.youtube.com/watch?v=r9_pmxVgnPM',
                'price' => 'https://www.pricecharting.com/game/sega-genesis/final-zone',
                'release_date' => '1990-Feb-01'
            ],
            
            [
                'name' => 'IMG International Tour Tennis',
                'slug' => 'img_international_tour_tennis',
                'platform' => 2,
                'region' => 3,
                'genre' => json_encode([38]),
                'publisher' => 6,
                'developer' => json_encode([7]),
                'description' => 'Licensed by the International Management Group (IMG), this rare Electronic Arts venture into Tennis features 32 professional players (all male and licensed by the IMG) including Bjorn Borg, Marcelo Rios, Patrick Rafter and Yevgeni Kafelnikov in 15 tournaments with different surfaces.',
                'cover' => 'http://williamharpleydev.com/img/collectorsDojo/covers/img_tennis_md.jpg',
                'video' => 'https://www.youtube.com/watch?v=AYDsQPmq3xw',
                'price' => 'https://www.pricecharting.com/game/sega-genesis/img-international-tour-tennis',
                'release_date' => '1994-Jun-21'
            ]
        ]);
    }
}
