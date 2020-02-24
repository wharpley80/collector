<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\UserGame;
use App\Http\Resources\UserGame as UserGameResource;

class UserGameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userGames = UserGame::all();

        return UserGameResource::collection($userGames);
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
        $userGame = $request->isMethod('put') ? UserGame::findOrFail($request->user_game_id) : new UserGame;

        $userGame->id = $request->input('user_game_id');
        $userGame->user_id = $request->input('user_id');
        $userGame->company_id = $request->input('company_id');
        $userGame->game_id = $request->input('game_id');
        $userGame->purchase_date = $request->input('purchase_date');
        $userGame->purchase_price = $request->input('purchase_price');
        $userGame->purchase_location = $request->input('purchase_location');
        $userGame->purchase_new = $request->input('purchase_new');
        $userGame->cib = $request->input('cib');
        $userGame->cart_disc = $request->input('cart_disc');
        $userGame->manual = $request->input('manual');
        $userGame->box = $request->input('box');
        $userGame->condition = $request->input('condition');
        $userGame->comment = $request->input('comment');

        if ($userGame->save()) {
            return new UserGameResource($userGame);
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
        $userGame = UserGame::findOrFail($id);

        return new UserGameResource($userGame);
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
        $userGame = UserGame::findOrFail($id);

        if ($userGame->delete()) {
            return new UserGameResource($userGame);
        }
    }
}
