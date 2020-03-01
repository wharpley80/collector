@extends('layouts.app')

@extends('layouts.search-my-collection')

@section('content')

<div class="container my-collection-cont">
    <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>My Collection</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @if (empty($myGames))
                                <div class="empty-collection">
                                    <h3>Start adding games to your collection!</h3>
                                </div>
                            @endif
                            @foreach ($myGames as $game)
                                <div class="col-md-2 collection-cover-cont">
                                    <a href="{{ URL::to('') }}/collection-single/{{ $game->id }}"><img src="{{ $game->cover }}" class="collection-game-cover"></a>
                                    <p>{{ $game->name }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection