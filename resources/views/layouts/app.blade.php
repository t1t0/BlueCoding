<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/css/uikit.min.css" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="uk-position-relative">
            <div class="uk-position-top">
                    <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
                    <nav class="uk-navbar-container uk-navbar-default" uk-navbar>
                        <div class="uk-navbar-left">
                            <a class="uk-navbar-item uk-logo" href="/"><img src="{{ asset('images/logo.png') }}" width="40"/></a>
                        </div>
                        <div class="uk-navbar-right">
                            @auth
                            <div class="uk-navbar-item">
                                <a class="uk-button uk-button-default" uk-toggle="target: #profile-sidebar">{{ Auth::user()->name }}</a>
                            </div>
                            @endauth
                            @guest
                            <div class="uk-navbar-item">
                                <a href="{{ route('login') }}" class="uk-button uk-button-link">Login</a>
                            </div>
                            <div class="uk-navbar-item">
                                <a href="{{ route('register') }}" class="uk-button uk-button-link ml10">Register</a>
                            </div>
                            @endguest
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="pt100">
            @yield('content')
        </div>
        
        @auth
        <div id="profile-sidebar" uk-offcanvas="flip: true; overlay: true">
            <div class="uk-offcanvas-bar">
                <button class="uk-offcanvas-close" type="button" uk-close></button>
                <h3>{{ Auth::user()->name }}</h3>
                <ul class="uk-nav uk-nav-primary">
                    <li><a href="/favorites">Favorites <span class="uk-badge">{{ Auth::user()->favorites->count() }}</span></a></li>
                    <li><a href="/history">History <span class="uk-badge">{{ Auth::user()->searches->count() }}</span></a></li>
                    <li class="uk-nav-divider"></li>
                    <li><a href="/profile">Profile</a></li>
                </ul>
                <p>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="uk-button uk-button-default">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </p>
            </div>
        </div>
        @endauth
    </div>
    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/js/uikit-icons.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>