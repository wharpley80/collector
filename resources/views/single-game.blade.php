@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header platform-header">
                    <h1>{{ $game->name }}</h1>
                </div>
                <div class="card-body">
                    <div class="col-md-3">
                        <img src="{{ $game->cover }}" class="single-game-cover">
                    </div>
                    <div class="col-md-9">
                    <iframe width="420" height="315" src="//www.youtube.com/watch?v=5GI4kfYlylI" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection