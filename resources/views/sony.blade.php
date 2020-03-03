@extends('layouts.app')

@section('content')

<div class="container">
    @extends('layouts.search')
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
                    <img src="{{ asset('assets/img/sony/kratos-mascot.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/sony/ratchet-mascot.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/sony/nathan-drake-mascot.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/sony/mhw-mascot.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/sony/aloy-mascot.jpg') }}" >
                </div>
            </div>
        </div>
        @include('layouts.game-list')
    </div>
</div>
@endsection