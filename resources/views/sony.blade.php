@extends('layouts.app')

@extends('layouts.search')

@section('content')

<div class="container">
    <h1 class="company-name" hidden>sony</h1>
    <div class="row main-content-body">
        <div class="col-md-4">
            <div class="platform-menu" role="group" aria-label="Basic example">
                <a type="button" class="platform-playstation btn btn-secondary" href="{{ URL::to('') }}/sony/playstation/north_america">Playstation 1</a>
                <a type="button" class="platform-playstation_2 btn btn-secondary" href="{{ URL::to('') }}/sony/playstation_2/north_america">Playstation 2</a>
                <a type="button" class="platform-playstation_3 btn btn-secondary" href="{{ URL::to('') }}/sony/playstation_3/north_america">Playstation 3</a>
                <a type="button" class="platform-playstation_4 btn btn-secondary active" href="{{ URL::to('') }}/sony/playstation_4/north_america">Playstation 4</a>
                <a type="button" class="platform-playstation_5 btn btn-secondary" href="{{ URL::to('') }}/sony/playstation_5/north_america">Playstation 5</a>
                <a type="button" class="platform-playstation_portable btn btn-secondary" href="{{ URL::to('') }}/sony/playstation_portable/north_america">Playstation Portable</a>
                <a type="button" class="platform-playstation_vita btn btn-secondary" href="{{ URL::to('') }}/sony/playstation_vita/north_america">Playstation Vita</a>
                <a type="button" class="platform-playstation_vr btn btn-secondary" href="{{ URL::to('') }}/sony/playstation_vr/north_america">Playstation VR</a>
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