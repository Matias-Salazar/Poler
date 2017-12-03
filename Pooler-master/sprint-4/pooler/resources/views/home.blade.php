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
                        <div class="col-xs-12 col-md-4 nav-buttons">
                            <a href="">Nombre del usuario</a>
                            <a href="{{ route('login') }}"><button class="btn-secondary">Log Out</button></a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>   
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>

                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            You are logged in!
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Scripts -->
    <script src="{{ asset ('js/app.js') }}"></script>
</body>
</html>
