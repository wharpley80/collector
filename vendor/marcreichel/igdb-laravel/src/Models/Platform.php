<?php

namespace MarcReichel\IGDBLaravel\Models;

/* Platforms 
Sega Master System = 64
Sega Mega Drive/Genesis = 29
Sega CD = 78
Sega 32X = 30
Sega Saturn = 32
Dreamcast = 23
Sega Game Gear = 35

Nintendo Entertainment System (NES) = 18
SNES = 19
Super Famicom = 58
Nintendo 64 = 4
Nintendo GameCube = 21
Wii = 5
Wii U = 41
Nintendo Switch = 130
Game Boy = 33
Game Boy Color = 22
Gameboy Advance = 24
Nintendo DS = 20
New Nintendo 3DS = 137
Nintendo 3DS = 37
Virtual Boy = 87
Nintendo eShop = 160

Playstation = 7
Playstation 2 = 8
Playstation 3 = 9
Playstation Portable = 38
Playstation Vita = 46
Playstation 4 = 48
PlayStation 5 = 167
Playstation VR = 165

XBOX = 11
XBOX 360 = 12
XBOX One = 49

Atari 2600 = 59
Atari 5200 = 66
Atari 7800 = 60
Atari Jaguar = 62
Atari Lynx = 61

Turbografx-16/PC Engine CD = 150
NEO GEO CD = 136

PC/Steam = 92
*/

class Platform extends Model
{
    protected $casts = [
        'websites' => PlatformWebsite::class,
    ];

    /**
     * Returns the display info for a platform.
     * 
     * @return Array
     */
    public function getPlatformDisplayInfo()
    {
        $displayArray         = [];
        $displayArray['id']   = $this->id;
        $displayArray['name'] = $this->name;
        $displayArray['logo'] = $this->getPlatformLogo();

        return $displayArray;
    }

    /** 
     * Returns the platform logo.
     * 
     * @return String
     */
    public function getPlatformLogo()
    {
        $platformLogo = PlatformLogo::where('id', $this['platform_logo'])->get();

        if (isset($platformLogo[0])) {
            $platformLogoUrl = 'https:' . $platformLogo[0]['url'];
        }

        return $platformLogoUrl ?? '';
    }
}
