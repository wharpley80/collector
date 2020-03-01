@extends('layouts.app')

@extends('layouts.search')

@section('content')

<div class="container">
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
        @include('layouts.game-list')
    </div>
</div>
@endsection
