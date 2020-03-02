@extends('layouts.app')

@section('content')

@extends('layouts.search')

<div class="home-carousel-cont">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('assets/img/gow_carosel_playstation.jpg') }}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h1>SONY</h1>
                <p>Start Storing Your Collection Today</p>
            </div>
        </div>
        <div class="carousel-item">
            <a href="{{ URL::to('') }}/sega/sega_genesis_mega_drive/north_america">
                <img class="d-block w-100" src="{{ asset('assets/img/sonic_carosel_sega.jpeg') }}" alt="Second slide">
            </a>
            <div class="carousel-caption d-none d-md-block">
                <h1>SEGA</h1>
                <p>Start Storing Your Collection Today</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('assets/img/botw_carosel_nintendo.jpg') }}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h1>NINTENDO</h1>
                <p>Start Storing Your Collection Today</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('assets/img/halo_carosel_xbox.jpg') }}" alt="Fourth slide">
            <div class="carousel-caption d-none d-md-block">
                <h1>XBOX</h1>
                <p>Start Storing Your Collection Today</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>
@endsection
