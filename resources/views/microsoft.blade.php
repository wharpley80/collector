@extends('layouts.app')

@extends('layouts.search')

@section('content')

<div class="container">
    <h1 class="company-name" hidden>microsoft</h1>
    <div class="row main-content-body">
        <div class="col-md-4">
            <div class="platform-menu" role="group" aria-label="Basic example">
                <a type="button" class="platform-original_xbox btn btn-secondary active" href="{{ URL::to('') }}/microsoft/original_xbox/north_america">Original XBOX</a>
                <a type="button" class="platform-xbox_360 btn btn-secondary" href="{{ URL::to('') }}/microsoft/xbox_360/north_america">XBOX 360</a>
                <a type="button" class="platform-xbox_one btn btn-secondary" href="{{ URL::to('') }}/microsoft/xbox_one/north_america">XBOX One</a>
            </div>
            <div class="left-sidebar-cont d-none d-md-block">
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/microsoft/master-chief-mascot.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/microsoft/crackdown-mascot.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/microsoft/gears-mascot.jpg') }}" >
                </div>
                <div class="company-mascot">
                    <img src="{{ asset('assets/img/microsoft/forza-mascot.jpg') }}" >
                </div>
            </div>
        </div>
        @include('layouts.game-list')
    </div>
</div>
@endsection