<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pooler') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <nav class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-md-12 nav-wrapper">
                        <div class="col-xs-2 logo"><a href="{{url ('/')}}"><img src={{asset ('assets/logo-pooler.png')}} alt="logo"></a></div>
                        <ul class="col-xs-10 col-sm-6 col-md-6 menu">
                            <li><a class="nav-link" href="#">¿Qué es?</a></li>
                            <li><a class="nav-link" href="#how-works">¿Cómo funciona?</a></li>
                            <li><a class="nav-link" href="#">Faq</a></li>
                        </ul>
                        <div class="col-xs-12 col-md-4 nav-buttons">
                            <a href="{{ route('register') }}"><button class="btn-principal register-btn">Registrate</button></a>
                            <a href="{{ route('login') }}"><button class="btn-secondary">Ingresa</button></a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>   
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset ('js/app.js') }}"></script>
</body>
</html>
