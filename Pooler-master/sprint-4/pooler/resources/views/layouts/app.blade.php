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
                        <ul class="col-xs-10 col-md-6 menu">
                            @if (Auth::guest() || Request::path() == '/')
                            <li><a class="nav-link" href="#">¿Qué es?</a></li>
                            <li><a class="nav-link" href="#">¿Cómo funciona?</a></li>
                            <li><a class="nav-link" href="#">Faq</a></li>
                                @endif
                        </ul>
                        <div class="col-xs-12 col-md-4 nav-buttons{{(!Auth::guest() ? ' logout' : "")}}">
                            @if (Auth::guest())
                            <a href="{{ route('register') }}"><button class="btn-principal register-btn">Registrate</button></a>
                                @else
                                <p class="welcome-message">Hola <span>{{ucfirst (Auth::user()->name)}}</span></p>
                            @endif

                            @if (Auth::guest())
                                <a href="{{ route('login') }}"><button class="btn-secondary">Ingresa</button></a>
                            @else
                                <a href="{{ url('/logout') }}"><button class="btn-secondary">Salir</button></a>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>
        </header>   
        @yield('content')
        {{-- If current page is index, footer is relative. Otherway add class footer-bottom--}}
        <footer class="{{(Request::path() == '/') ? "": "footer-bottom"}}">
            <div class="container-fluid">
                <div class="row">
                     <div class="col-xs-12 footer">
                         <h4 class="copyright">&#9400 2017 <span class="logo-color-principal">Pooler</span></h4>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="{{ asset ('js/app.js') }}"></script>
</body>
</html>
