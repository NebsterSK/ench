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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2">
            <a class="navbar-brand" href="#">Dashboard</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Crafts</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Statistics</a>
                    </li>
                </ul>
            </div>
        </nav>
    @show

    @yield('content')

    @section('js')
        <script src="{{ mix('js/app.js') }}" defer></script>
    @show
</body>
</html>
