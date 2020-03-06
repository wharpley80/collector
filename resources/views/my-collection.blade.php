@extends('layouts.app')

@extends('layouts.search-my-collection')

@section('content')

<div class="container my-collection-cont">
    <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header my-collection-header">
                        <h1 class="my-collection-title">My
                        @if (!empty($selectedPlatform))
                            {{ $selectedPlatform->name }}
                        @endif
                         Collection</h1>
                        <select class="selectpicker my-platform-sort float-right" onChange="window.location.href=this.value">
                            <option>Select Platform</option>
                            <option value="{{ URL::to('') }}/my-collection">All Platforms</option>
                            @foreach($platforms as $platform)
                                <option value="{{ URL::to('') }}/my-collection/{{ $platform->slug }}">{{ $platform->name }}</option>
                            @endforeach
                        </select>
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