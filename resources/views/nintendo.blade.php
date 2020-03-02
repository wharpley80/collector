@extends('layouts.app')

@extends('layouts.search')

@section('content')

<div class="container">
    <h1 class="company-name" hidden>nintendo</h1>
    <div class="row main-content-body">
        <div class="col-md-4">
            <div class="platform-menu" role="group" aria-label="Basic example">
                <a type="button" class="platform-nintendo_entertainment_system btn btn-secondary active" href="{{ URL::to('') }}/nintendo/nintendo_entertainment_system/north_america">Nintendo Entertainment System</a>
                <a type="button" class="platform-super_nintendo_entertainment_system btn btn-secondary" href="{{ URL::to('') }}/nintendo/super_nintendo_entertainment_system/north_america">Super Nintnedo Entertainment System</a>
                <a type="button" class="platform-nintendo_64 btn btn-secondary" href="{{ URL::to('') }}/nintendo/nintendo_64/north_america">Nintendo 64</a>
                <a type="button" class="platform-nintendo_gamecube btn btn-secondary" href="{{ URL::to('') }}/nintendo/nintendo_gamecube/north_america">Nintendo GameCube</a>
                <a type="button" class="platform-nintendo_wii btn btn-secondary" href="{{ URL::to('') }}/nintendo/nintendo_wii/north_america">Nintendo Wii</a>
                <a type="button" class="platform-nintendo_wii_u btn btn-secondary" href="{{ URL::to('') }}/nintendo/nintendo_wii_u/north_america">Nintendo Wii U</a>
                <a type="button" class="platform-nintendo_switch btn btn-secondary" href="{{ URL::to('') }}/nintendo/nintendo_switch/north_america">Nintendo Switch</a>
                <a type="button" class="platform-game_boy btn btn-secondary" href="{{ URL::to('') }}/nintendo/game_boy/north_america">Game Boy</a>    
                <a type="button" class="platform-gameboy_color btn btn-secondary" href="{{ URL::to('') }}/nintendo/game_boy_color/north_america">Game Boy Color</a>
                <a type="button" class="platform-game_boy_advance btn btn-secondary" href="{{ URL::to('') }}/nintendo/game_boy_advance/north_america">Game Boy Advance</a>
                <a type="button" class="platform-nintendo_ds btn btn-secondary" href="{{ URL::to('') }}/nintendo/nintendo_ds/north_america">Nintendo DS</a>
                <a type="button" class="platform-nintendo_3ds btn btn-secondary" href="{{ URL::to('') }}/nintendo/nintendo_3ds/north_america">Nintendo 3DS</a>
                <a type="button" class="platform-nintendo_virtual_boy btn btn-secondary" href="{{ URL::to('') }}/nintendo/nintendo_virtual_boy/north_america">Virtual Boy</a>
            </div>
            <div class="left-sidebar-cont d-none d-md-block">
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/nintendo/mario-mascot.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/nintendo/link-mascot.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/nintendo/donkey-kong-mascot.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/nintendo/samus-mascot.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/nintendo/pikachu-mascot.jpg') }}" >
                </div>
            </div>
        </div>
        @include('layouts.game-list')
    </div>
</div>
@endsection
