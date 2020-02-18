<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SegaGame;
use App\Platform;

class SingleGameController extends Controller
{
    public function index($platform, $gameId)
    {
        $selectedPlatform = Platform::where('slug', '=', $platform)->get()[0];

        if ($selectedPlatform->slug == 'sega_genesis_mega_drive') {
            $game = SegaGame::where('id', '=', $gameId)->get()[0];
        }

        return view('single-game')->with(['game' => $game]);
    }
}
