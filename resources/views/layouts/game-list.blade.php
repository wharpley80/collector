<div class="col-md-8">
    <div class="card">
        <div class="card-header platform-header">
            <div class="row my-auto">
                <div class="col-md-3 my-auto">
                    <img src="{{ $logo }}">
                </div>
                <div class="col-md-9">
                    <h1>{{ $platform->name }}</h1>
                </div>
            </div>
        </div>
        <div class="btn-group region-menu" role="group" aria-label="Basic example">
            <a type="button" class="region-north_america btn btn-secondary active"
                href="{{ route('games', [$company->slug, $platform->slug, 'north_america']) }}" 
                data-toggle="tooltip" data-placement="bottom" title="Region - North America">NA
            </a>
            <a type="button" class="region-japan btn btn-secondary" 
                href="{{ route('games', [$company->slug, $platform->slug, 'japan']) }}" 
                data-toggle="tooltip" data-placement="bottom" title="Region - Japan">JP
            </a>
            <a type="button" class="region-europe btn btn-secondary" 
                href="{{ route('games', [$company->slug, $platform->slug, 'europe']) }}"
                data-toggle="tooltip" data-placement="bottom" title="Region - PAL/Europe">PAL
            </a>
        </div>    
        <div class="card-body">
            <select class="form-control" id="game-sort" onChange="window.location.href=this.value">
                <option>Sort</option>
                <option value="{{ route('games', [$company->slug, $platform->slug, $region->slug, 'name-asc']) }}">A - Z</option>
                <option value="{{ route('games', [$company->slug, $platform->slug, $region->slug, 'name-desc']) }}">Z - A</option>
            </select>
            <p class="pagination-info">{{ $paginationInfo }}</p>
            @include('layouts.game-loop')
            <div class="pagination-cont">
                {{ $games->links() }}
                <p class="pagination-info">{{ $paginationInfo }}</p>
            </div>
        </div>
    </div>
</div>
