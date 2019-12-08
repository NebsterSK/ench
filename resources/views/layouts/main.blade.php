<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ mix('images/logo/favicon.png') }}">
    @section('head')
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="{{ mix('css/xs.css') }}" rel="stylesheet">
        <link href="{{ mix('css/sm.css') }}" rel="stylesheet" media="(min-width:576px)">
        <link href="{{ mix('css/md.css') }}" rel="stylesheet" media="(min-width:768px)">
        <link href="{{ mix('css/lg.css') }}" rel="stylesheet" media="(min-width:992px)">
        <link href="{{ mix('css/xl.css') }}" rel="stylesheet" media="(min-width:1200px)">
    @show
    <title>@yield('title', 'Enchanting') - Classic Enchanter</title>
</head>

<body>
    @section('nav')
        <nav id="navbar-app" class="navbar navbar-expand-lg mb-2">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <img src="{{ mix('images/logo/favicon.png') }}" alt=""> Classic Enchanter
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link disabled" href="">Crafts</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" href="">Statistics</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item disabled" href="">Profile</a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    @show

    @yield('content')

    @section('js')
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ mix('js/main.js') }}" defer></script>
        @include('sweetalert::alert')
    @show
</body>
</html>
