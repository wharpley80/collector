<?php
use MarcReichel\IGDBLaravel\Models\Game;
use MarcReichel\IGDBLaravel\Models\Cover;
use MarcReichel\IGDBLaravel\Models\Platform;
use MarcReichel\IGDBLaravel\Models\PlatformLogo;
use MarcReichel\IGDBLaravel\Models\Artwork;

//$games = Game::where('id', 5364)->get();

//var_dump($games[0]['aggregated_rating']);

//$games = Game::where('first_release_date', '>=', 1546297200)->get();
//$games = Game::select(['*'])->get();

//$games = Game::select(['name', 'first_release_date'])->get();
//$games = Game::where('platform', '>=', 'genesis')->get();
//$games = Game::select(['platform', 'genesis'])->get();
//var_dump($games);
//$games = Game::where('game', 45533)->get();

//$cover = Cover::where('id', 46537)->get();
//var_dump($cover[0]);
?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-4">
    <div class="platform-menu" role="group" aria-label="Basic example">
        <a type="button" id="platform-64" class="all-regions btn btn-secondary active" href="{{ URL::to('') }}/platform/64/worldwide">Sega Master System</a>
        <a type="button" id="platform-29" class="all-regions btn btn-secondary" href="{{ URL::to('') }}/platform/29/worldwide">Sega Mega Drive/Genesis</a>
        <a type="button" id="platform-78" class="na-regions btn btn-secondary" href="{{ URL::to('') }}/platform/78/worldwide">Sega CD</a>
        <a type="button" id="platform-30" class="na-regions btn btn-secondary" href="{{ URL::to('') }}/platform/30/worldwide">Sega 32X</a>
        <a type="button" id="platform-32" class="jp-regions btn btn-secondary" href="{{ URL::to('') }}/platform/32/worldwide">Sega Saturn</a>
        <a type="button" id="platform-23" class="pal-regions btn btn-secondary" href="{{ URL::to('') }}/platform/23/worldwide">Sega Dreamcast</a>
        <a type="button" id="platform-35" class="pal-regions btn btn-secondary" href="{{ URL::to('') }}/platform/35/worldwide">Sega Game Gear</a>
    </div>
    </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header platform-header">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ $platform[0]['logo'] }}">
                        </div>
                        <div class="col-md-9">
                            <h1>{{ $platform[0]['name'] }}</h1>
                        </div>
                    </div>
                </div>
                <div class="btn-group region-menu" role="group" aria-label="Basic example">
                    <a type="button" class="all-regions btn btn-secondary active" href="{{ URL::to('') }}/platform/{{ $platform[0]['id'] }}/worldwide">All</a>
                    <a type="button" class="na-regions btn btn-secondary" href="{{ URL::to('') }}/platform/{{ $platform[0]['id'] }}/north_america">NA</a>
                    <a type="button" class="jp-regions btn btn-secondary" href="{{ URL::to('') }}/platform/{{ $platform[0]['id'] }}/japan">JP</a>
                    <a type="button" class="pal-regions btn btn-secondary" href="{{ URL::to('') }}/platform/{{ $platform[0]['id'] }}/europe">PAL</a>
                </div>
                <div class="card-body">
                    <game-list-component v-bind:games="{{ json_encode($games) }}"></game-list-component>
                    <div class="pagination-cont">
                        <div class="pagination"> 
                            <a href="{{ URL::to('') }}/platform/{{ $platform[0]['id'] }}/{{ $region }}/page=" class="paginate-prev">«</a> 
                            <a href="{{ URL::to('') }}/platform/{{ $platform[0]['id'] }}/{{ $region }}/page=1" class="paginate-1 active">1</a> 
                            <a href="{{ URL::to('') }}/platform/{{ $platform[0]['id'] }}/{{ $region }}/page=2" class="paginate-2">2</a> 
                            <a href="{{ URL::to('') }}/platform/{{ $platform[0]['id'] }}/{{ $region }}/page=3" class="paginate-3">3</a> 
                            <a href="{{ URL::to('') }}/platform/{{ $platform[0]['id'] }}/{{ $region }}/page=4" class="paginate-4">4</a> 
                            <a href="{{ URL::to('') }}/platform/{{ $platform[0]['id'] }}/{{ $region }}/page=5" class="paginate-5">5</a> 
                            <a href="{{ URL::to('') }}/platform/{{ $platform[0]['id'] }}/{{ $region }}/page=" class="paginate-next">»</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
