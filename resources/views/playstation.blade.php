@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="company-name" hidden>playstation</h1>
    <div class="row justify-content-center">
    <div class="col-md-4">
    <div class="platform-menu" role="group" aria-label="Basic example">
        <a type="button" id="platform-7" class="btn btn-secondary active" href="{{ URL::to('') }}/playstation/7/worldwide">Playstation 1</a>
        <a type="button" id="platform-8" class="btn btn-secondary" href="{{ URL::to('') }}/playstation/8/worldwide">Playstation 2</a>
        <a type="button" id="platform-9" class="btn btn-secondary" href="{{ URL::to('') }}/playstation/9/worldwide">Playstation 3</a>
        <a type="button" id="platform-48" class="btn btn-secondary" href="{{ URL::to('') }}/playstation/48/worldwide">Playstation 4</a>
        <a type="button" id="platform-167" class="btn btn-secondary" href="{{ URL::to('') }}/playstation/167/worldwide">Playstation 5</a>
        <a type="button" id="platform-165" class="btn btn-secondary" href="{{ URL::to('') }}/playstation/165/worldwide">Playstation VR</a>
        <a type="button" id="platform-38" class="btn btn-secondary" href="{{ URL::to('') }}/playstation/38/worldwide">Playstation Portable</a>
        <a type="button" id="platform-46" class="btn btn-secondary" href="{{ URL::to('') }}/playstation/46/worldwide">Playstation Vita</a>
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
                    <a type="button" class="all-regions btn btn-secondary active" href="{{ URL::to('') }}/playstation/{{ $platform[0]['id'] }}/worldwide">All</a>
                    <a type="button" class="na-regions btn btn-secondary" href="{{ URL::to('') }}/playstation/{{ $platform[0]['id'] }}/north_america">NA</a>
                    <a type="button" class="jp-regions btn btn-secondary" href="{{ URL::to('') }}/playstation/{{ $platform[0]['id'] }}/japan">JP</a>
                    <a type="button" class="pal-regions btn btn-secondary" href="{{ URL::to('') }}/playstation/{{ $platform[0]['id'] }}/europe">PAL</a>
                </div>
                <div class="card-body">
                    <game-list-component v-bind:games="{{ json_encode($games) }}"></game-list-component>
                    <div class="pagination-cont">
                        <div class="pagination"> 
                            <a href="{{ URL::to('') }}/playstation/{{ $platform[0]['id'] }}/{{ $region }}/page=" class="paginate-prev">«</a> 
                            <a href="{{ URL::to('') }}/playstation/{{ $platform[0]['id'] }}/{{ $region }}/page=1" class="paginate-1 active">1</a> 
                            <a href="{{ URL::to('') }}/playstation/{{ $platform[0]['id'] }}/{{ $region }}/page=2" class="paginate-2">2</a> 
                            <a href="{{ URL::to('') }}/playstation/{{ $platform[0]['id'] }}/{{ $region }}/page=3" class="paginate-3">3</a> 
                            <a href="{{ URL::to('') }}/playstation/{{ $platform[0]['id'] }}/{{ $region }}/page=4" class="paginate-4">4</a> 
                            <a href="{{ URL::to('') }}/playstation/{{ $platform[0]['id'] }}/{{ $region }}/page=5" class="paginate-5">5</a> 
                            <a href="{{ URL::to('') }}/playstation/{{ $platform[0]['id'] }}/{{ $region }}/page=" class="paginate-next">»</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
