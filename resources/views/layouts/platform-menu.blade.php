<div class="platform-menu" role="group" aria-label="Basic example">
    @foreach ($companyPlatforms as $companyPlatform)
        <a type="button" class="platform-{{ $companyPlatform->slug }} btn btn-secondary" href="{{ route('games', [$company->slug, $companyPlatform->slug, 'north_america']) }}">{{ $companyPlatform->name }}</a>
    @endforeach
</div>