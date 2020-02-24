@extends('layouts.app')

@section('content')

<div class="container">

    @extends('layouts.search')

    <h1 class="company-name" hidden>sega</h1>
    <div class="row main-content-body">
        <div class="col-md-4">
            <div class="platform-menu" role="group" aria-label="Basic example">
                <a type="button" class="platform-sega_master_system btn btn-secondary active" href="{{ URL::to('') }}/sega/sega_master_system/north_america">Sega Master System</a>
                <a type="button" class="platform-sega_genesis_mega_drive btn btn-secondary" href="{{ URL::to('') }}/sega/sega_genesis_mega_drive/north_america">Sega Mega Drive/Genesis</a>
                <a type="button" class="platform-sega_cd btn btn-secondary" href="{{ URL::to('') }}/sega/sega_cd/north_america">Sega CD</a>
                <a type="button" class="platform-sega_32x btn btn-secondary" href="{{ URL::to('') }}/sega/sega_32x/north_america">Sega 32X</a>
                <a type="button" class="platform-sega_saturn btn btn-secondary" href="{{ URL::to('') }}/sega/sega_saturn/north_america">Sega Saturn</a>
                <a type="button" class="platform-sega_dreamcast btn btn-secondary" href="{{ URL::to('') }}/sega/sega_dreamcast/north_america">Sega Dreamcast</a>
                <a type="button" class="platform-sega_game_gear btn btn-secondary" href="{{ URL::to('') }}/sega/sega_game_gear/north_america">Sega Game Gear</a>
            </div>
            <div class="left-sidebar-cont d-none d-md-block">
                <div class="company-mascot">
                    <img src="{{ asset('img/sega/sonic-finger-wag.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('img/sega/axel-stone.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('img/sega/nights-mascot.png') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('img/sega/falcon-powerstone.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('img/sega/outrun-car.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('img/sega/golden-axe-mascot.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('img/sega/shinobi-3.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('img/sega/jet-grind-radio.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('img/sega/alex-kidd.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('img/sega/sega-sports.png') }}" >
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header platform-header">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ $logo }}">
                        </div>
                        <div class="col-md-9">
                            <h1>{{ $platform->name }}</h1>
                        </div>
                    </div>
                </div>
                <div class="btn-group region-menu" role="group" aria-label="Basic example">
                    <a type="button" class="region-north_america btn btn-secondary active" href="{{ URL::to('') }}/sega/{{ $platform->slug }}/north_america">NA</a>
                    <a type="button" class="region-japan btn btn-secondary" href="{{ URL::to('') }}/sega/{{ $platform->slug }}/japan">JP</a>
                    <a type="button" class="region-europe btn btn-secondary" href="{{ URL::to('') }}/sega/{{ $platform->slug }}/europe">PAL</a>
                    <a type="button" class="region-worldwide btn btn-secondary" href="{{ URL::to('') }}/sega/{{ $platform->slug }}/worldwide">WW</a>
                </div>
                <div class="card-body">
                    <p class="pagination-info">{{ $paginationInfo }}</p>
                    @foreach ($games as $game)
                        <div class="game-wrapper">
                            <div class="container game-cont">
                                <div class="row" id="{{ $game->id }}">
                                    <div class="col-sm-12 col-md-4 ">
                                        <img src="{{ $game->cover }}" class="game-cover">
                                    </div>
                                    <div class="col-md-8">
                                        <h3 class="game-name">{{ $game->name }}</h3>
                                        <div class="row game-cont-top-row">
                                            <div class="col-md-6 release-cont">
                                            <label>Release Date:</label>
                                            <p class="game-release">{{ $game->release_date }}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <a type="button" class="view-more btn btn-secondary" href="{{ URL::to('') }}/single-game/{{ $platform->slug }}/{{ $game->id }}">View More</a>
                                            </div>
                                        </div>
                                        <div class="row game-cont-bottom">
                                            <p class="game-summary">{{ $game->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="pagination-cont">
                        {{ $games->links() }}
                        <p class="pagination-info">{{ $paginationInfo }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
