@extends('layouts.app')

@extends('layouts.search')

@section('content')

<div class="container single-game-cont">
    <div class="alert alert-success" role="alert" hidden></div>
    <div class="alert alert-danger" role="alert" hidden></div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header single-game-title">
                    <h1>{{ $game->name }}</h1>
                </div>
                <div class="card-body single-game-body">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ $game->cover }}" class="single-game-cover">
                        </div>
                        <div class="col-md-8 single-game-detail-cont">
                            <div class="row text-center" >
                                <div class="col-md-6">
                                    <label>Release Date:</label>
                                    <p class="game-release">{{ $game->release_date }}</p>
                                </div>
                                <div class="col-md-6">
                                    <label>Publisher:</label>
                                    <p class="game-release">{{ $publisherName }}</p>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-md-6">
                                    <label>Developer:</label>
                                    <p class="game-release">{{ $developers }}</p>
                                </div>
                                <div class="col-md-6">
                                    <label>Genre:</label>
                                    <p class="game-release">{{ $genres }}</p>
                                </div>
                            </div>
                            <p class="single-game-description">{{ $game->description }}</p>
                            <div class="row">
                                <div class="col-md-3">
                                    <a type="button" class="view-more btn btn-secondary" href="{{ $game->video }}" target="_blank">Review/Gameplay</a>
                                </div>
                                <div class="col-md-3">
                                    <a type="button" class="view-more btn btn-secondary" href="{{ $game->price }}" target="_blank">Price Charting</a>
                                </div>
                                <div class="col-md-3">
                                    <a type="button" class="view-more btn btn-secondary" href="">Add to Wishlist</a>
                                </div>
                                <div class="col-md-3">
                                    <a type="button" class="view-more btn btn-secondary" data-toggle="modal" data-target="#addGameModal">Add to Collection</a>
                                </div>
                            </div>         
                        </div>
                    </div>
                    @extends('modals.add-game')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection