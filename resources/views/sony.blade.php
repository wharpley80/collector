@extends('layouts.app')

@section('content')

<div class="container">
    @extends('layouts.search')
    <h1 class="company-name" hidden>sony</h1>
    <div class="row main-content-body">
        <div class="col-md-4">
            @include('layouts.platform-menu')
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