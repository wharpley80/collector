@extends('layouts.app')

@extends('layouts.search-my-collection')

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
                                    <a type="button" class="view-more btn btn-secondary" href="" data-toggle="modal" data-target="#addGameModal">Edit My Info</a>
                                </div>
                                <div class="col-md-3">
                                    <a type="button" class="view-more btn btn-secondary" data-toggle="modal" data-target="#confirmDeleteModal">Delete/Sold</a>
                                </div>
                            </div>         
                        </div>
                    </div>
                    @extends('modals.confirm-delete')
                    <div class="my-game-details-cont">
                        <h2>My Game Details</h2>
                        <hr>
                        <div class="row text-center" >
                            <div class="col-md-4">
                                <label>Purchase Price:</label>
                                <p class="game-release">${{ $userGame->purchase_price }}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Purchase Date:</label>
                                <p class="game-release">{{ $userGame->purchase_date }}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Purchase Location:</label>
                                <p class="game-release">{{ $userGame->purchase_location }}</p>
                            </div>
                        </div>
                        <div class="row text-center" >
                            <div class="col-md-4">
                                <label>New:</label>
                                <p class="game-release">{{ $userGame->purchase_new == true ? 'Yes' : 'No' }}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Complete In Box:</label>
                                <p class="game-release">{{ $userGame->cib == true ? 'Yes' : 'No' }}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Cart/Disc:</label>
                                <p class="game-release">{{ $userGame->cart_disc == true ? 'Yes' : 'No' }}</p>
                            </div>
                        </div>
                        <div class="row text-center" >
                            <div class="col-md-4">
                                <label>Box:</label>
                                <p class="game-release">{{ $userGame->box == true ? 'Yes' : 'No' }}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Manual:</label>
                                <p class="game-release">{{ $userGame->manual == true ? 'Yes' : 'No' }}</p>
                            </div>
                            <div class="col-md-4">
                                <label>Game Condition:</label>
                                <p class="game-release">{{ $userGame->condition }}/10</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection