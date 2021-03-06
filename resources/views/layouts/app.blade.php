<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Collector's Dojo - This is an app where you can research you favorite video games, and then build out your own detailed collection.</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}" type="text/javascript"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/462bd259d98d98460d6767edbdcdac70?family=Foobar+Pro" rel="stylesheet" type="text/css"/>

    <!-- Styles -->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/collectors-dojo-logo-phos.jpg') }}" class="logo-header">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <div class="navbar-links">
                        <a href="{{ route('games', ['sega', 'sega_saturn', 'north_america']) }}"><img src="{{ asset('assets/img/sega-logo.jpg') }}" class="sega-logo"></a>
                        <a href="{{ route('games', ['nintendo', 'nintendo_entertainment_system', 'north_america']) }}"><img src="{{ asset('assets/img/nintendo-logo.jpg') }}" class="nintendo-logo"></a>
                        <a href="{{ route('games', ['sony', 'playstation', 'north_america']) }}"><img src="{{ asset('assets/img/sony-logo.jpg') }}" class="playstation-logo"></a>
                        <a href="{{ route('games', ['microsoft', 'original_xbox', 'north_america']) }}"><img src="{{ asset('assets/img/xbox-logo.png') }}" class="xbox-logo"></a>
                    </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('my-collection') }}">My Collection</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        <main class="py-4">
        @yield('content')
        </main>
    </div>
</body>
</html>

