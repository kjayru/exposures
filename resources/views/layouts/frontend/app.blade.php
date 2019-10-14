<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
     
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="/js/vendor/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="/js/vendor/slick/slick-theme.css"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/images/logo.jpg" width="150" alt="Exposure.mx" srcset="/images/logo.jpg">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="/empresa" class="nav-link">Empresa</a>
                        </li>
                        <li class="nav-item">
                            <a href="/productos" class="nav-link">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/videos" class="nav-link">Videos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/distribuidores" class="nav-link">Distribuidores</a>
                        </li>
                        <li class="nav-item">
                            <a href="/outlet/" class="nav-link">Outlet</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contacto" class="nav-link">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a href="/exposure-team/" class="nav-link">Exposure Team</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                  
                </div>
            </div>
        </nav>

       
            @yield('content')
       
    </div>
    <script src="{{ asset('js/app.js') }}" ></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
 
    
  
    <script type="text/javascript" src="/js/vendor/slick/slick.min.js"></script>
    <script src="/js/main/main.js"> </script>
    
  
</body>
</html>
