@extends('layouts.app')

@section('content')

<div class="container">
    @extends('layouts.search')
    <h1 class="company-name" hidden>sega</h1>
    <div class="row main-content-body">
        <div class="col-md-4">
            @include('layouts.platform-menu')
            <div class="left-sidebar-cont d-none d-md-block">
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/sega/sonic-finger-wag.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/sega/axel-stone.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/sega/nights-mascot.png') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/sega/falcon-powerstone.jpg') }}" >
                </div>
                <!--
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/sega/outrun-car.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/sega/golden-axe-mascot.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/sega/shinobi-3.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/sega/jet-grind-radio.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/sega/alex-kidd.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/sega/sega-sports.png') }}" >
                </div>
                -->
            </div>
        </div>
        @include('layouts.game-list')
    </div>
</div>
@endsection
