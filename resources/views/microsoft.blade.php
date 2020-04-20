@extends('layouts.app')

@section('content')

<div class="container">
    @extends('layouts.search')
    <h1 class="company-name" hidden>microsoft</h1>
    <div class="row main-content-body">
        <div class="col-md-4">
            @include('layouts.platform-menu')
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