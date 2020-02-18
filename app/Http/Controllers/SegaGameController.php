<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\SegaGame;
use App\Http\Resources\SegaGame as SegaGameResource;

class SegaGameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $segaGames = SegaGame::all();

        return SegaGameResource::collection($segaGames);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $segaGame = $request->isMethod('put') ? SegaGame::findOrFail($request->sega_game_id) : new SegaGame;

        $segaGame->id = $request->input('sega_game_id');
        $segaGame->name = $request->input('name');
        $segaGame->slug = $request->input('slug');
        $segaGame->platform = $request->input('platform');
        $segaGame->region = $request->input('region');
        $segaGame->genre = $request->input('genre');
        $segaGame->publisher = $request->input('publisher');
        $segaGame->developer = $request->input('developer');
        $segaGame->description = $request->input('description');
        $segaGame->cover_na = $request->input('cover_na');
        $segaGame->cover_jp = $request->input('cover_jp');
        $segaGame->cover_pal = $request->input('cover_pal');
        $segaGame->video = $request->input('video');
        $segaGame->price = $request->input('price');
        $segaGame->release_date = $request->input('release_date');
        $segaGame->rating = $request->input('rating');

        if ($segaGame->save()) {
            return new SegaGameResource($segaGame);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $segaGame = SegaGame::findOrFail($id);

        return new SegaGameResource($segaGame);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $segaGame = SegaGame::findOrFail($id);

        if ($segaGame->delete()) {
            return new SegaGameResource($segaGame);
        }
    }
}
