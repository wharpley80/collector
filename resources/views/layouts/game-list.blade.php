<div class="col-md-8">
    <div class="card">
        <div class="card-header platform-header">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ $logo }}">
                </div>
                <div class="col-md-8">
                    <h1>{{ $platform->name }}</h1>
                </div>
            </div>
        </div>
        <div class="btn-group region-menu" role="group" aria-label="Basic example">
            <a type="button" class="region-north_america btn btn-secondary active" href="{{ URL::to('') }}/sega/{{ $platform->slug }}/north_america">NA</a>
            <a type="button" class="region-japan btn btn-secondary" href="{{ URL::to('') }}/sega/{{ $platform->slug }}/japan">JP</a>
            <a type="button" class="region-europe btn btn-secondary" href="{{ URL::to('') }}/sega/{{ $platform->slug }}/europe">PAL</a>
        </div>    
        <div class="card-body">
            <p class="pagination-info">{{ $paginationInfo }}</p>
            @foreach ($games as $game)
                <div class="game-wrapper">
                    <div class="container game-cont">
                        <div class="row" id="{{ $game->id }}">
                            <div class="col-sm-12 col-md-4 ">
                                <img src="{{ $game->cover }}" class="game-cover">
                            </div>
                            <div class="col-md-8">
                                <h3 class="game-name">{{ $game->name }}</h3>
                                <div class="row game-cont-top-row">
                                    <div class="col-md-6 release-cont">
                                    <label>Release Date:</label>
                                    <p class="game-release">{{ $game->release_date }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <a type="button" class="view-more btn btn-secondary" href="{{ URL::to('') }}/single-game/{{ $platform->slug }}/{{ $game->id }}">View More</a>
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
            <div class="pagination-cont">
                {{ $games->links() }}
                <p class="pagination-info">{{ $paginationInfo }}</p>
            </div>
        </div>
    </div>
</div>
