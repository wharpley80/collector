@extends('layouts.app')

@section('content')

<div class="container">
    @extends('layouts.search')
    <div class="row main-content-body">
        <div class="col-md-4">
            <div class="publisher-menu" role="group" aria-label="Basic example">
            @foreach ($allPublishers as $allPublisher)
                <a type="button" class="publisher-{{ $allPublisher->slug }} btn btn-secondary" href="{{ route('publishers', [$allPublisher->slug, 'north_america']) }}">{{ $allPublisher->name }}</a>
            @endforeach
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header platform-header">
                    <div class="row my-auto">
                        <div class="col-md-3 my-auto">
                            @if ($logo)
                                <img src="{{ $logo }}">
                            @endif
                        </div>
                        <div class="col-md-9">
                            <p class="publisher-slug" hidden>{{ $publisher->slug }}</p>
                            <h1>{{ $publisher->name }}</h1>
                        </div>
                    </div>
                </div>
                <div class="btn-group region-menu" role="group" aria-label="Basic example">
                    <a type="button" class="region-north_america btn btn-secondary active" 
                        href="{{ route('publishers', [$publisher->slug, 'north_america']) }}" 
                        data-toggle="tooltip" data-placement="bottom" title="Region - North America">NA
                    </a>
                    <a type="button" class="region-japan btn btn-secondary" 
                        href="{{ route('publishers', [$publisher->slug, 'japan']) }}"
                        data-toggle="tooltip" data-placement="bottom" title="Region - Japan">JP
                    </a>
                    <a type="button" class="region-europe btn btn-secondary" 
                        href="{{ route('publishers', [$publisher->slug, 'europe']) }}"
                        data-toggle="tooltip" data-placement="bottom" title="Region - PAL/Europe">PAL
                    </a>
                </div>    
                <div class="card-body">
                    @include('layouts.game-loop')
                    <div class="pagination-cont">
                        {{ $games->links() }}
                        <p class="pagination-info">{{ $paginationInfo }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection