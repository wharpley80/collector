<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Game;
use App\Http\Resources\Game as GameResource;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();

        return GameResource::collection($games);
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
        $game = $request->isMethod('put') ? Game::findOrFail($request->game_id) : new Game;

        $game->id = $request->input('game_id');
        $game->name = $request->input('name');
        $game->slug = $request->input('slug');
        $game->company_id = $request->input('company_id');
        $game->platform_id = $request->input('platform_id');
        $game->region_id = $request->input('region_id');
        $game->genre = $request->input('genre');
        $game->publisher_id = $request->input('publisher_id');
        $game->developer = $request->input('developer');
        $game->description = $request->input('description');
        $game->cover = $request->input('cover');
        $game->video = $request->input('video');
        $game->price = $request->input('price');
        $game->release_date = $request->input('release_date');
        $game->rating = $request->input('rating');

        if ($game->save()) {
            return new GameResource($game);
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
        $game = Game::findOrFail($id);

        return new GameResource($game);
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
        $game = Game::findOrFail($id);

        if ($game->delete()) {
            return new GameResource($game);
        }
    }
}
