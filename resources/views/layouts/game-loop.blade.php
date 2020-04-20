@foreach ($games as $game)
    <div class="game-wrapper">
        <div class="container game-cont">
            <div class="row" id="{{ $game->id }}">
                <div class="col-sm-12 col-md-4 ">
                    <a href="{{ route('single-game', [$game->id]) }}">
                        <img src="{{ $game->cover }}" class="game-cover">
                    </a>
                </div>
                <div class="col-md-8">
                    <h3 class="game-name">{{ $game->name }}</h3>
                    <div class="row game-cont-top-row">
                        <div class="col-md-6 release-cont">
                        <label>Release Date:</label>
                        <p class="game-release">{{ $game->release_date }}</p>
                        </div>
                        <div class="col-md-6">
                            <a type="button" class="view-more btn btn-secondary" href="{{ URL::to('') }}/single-game/{{ $game->id }}">View More</a>
                        </div>
                    </div>
                    <div class="row game-cont-bottom">
                        <p class="game-summary">{{ $game->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach