<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--metas-->

    <meta property="og:title" itemprop="headline" content="Titulo" />
    <meta property="og:description" itemprop="description" content="Titulo" />
    <meta property="og:image" itemprop="image" content="https://exposure.kjayru.com/imgshare.jpg" />
    <meta property="og:url" itemprop="url" content="https://exposure.kjayru.com" />

    <!-- fin Twitter Card -->    <!-- fin Dublin Core -->
    <meta name="googlebot" content="index,follow" />
    <meta http-equiv="Content-Language" name="language" content="es" />
    <meta name="distribution" content="Global" />
    <meta property="fb:app_id" content="255968652401344" />

    <meta name="lang" content="es" itemprop="inLanguage" />


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel='stylesheet'   href='//fonts.googleapis.com/css?family=Lato%3A400%2C700%2C300%7CSource+Sans+Pro%3A400&#038;subset=latin&#038;ver=1500921649' type='text/css' media='all' />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/js/vendor/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/js/vendor/slick/slick-theme.css"/>

    <link rel="stylesheet" href="/vendor/nivo/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/vendor/nivo/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/vendor/nivo/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/vendor/nivo/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/vendor/nivo/nivo-slider.css" type="text/css" media="screen" />
    <link href="/vendor/fontawesome/css/all.css" rel="stylesheet">
    <link href="/css/app.css?v={{ uniqid() }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        @include('layouts.frontend.partials.nav')
        <main role="main">
            @yield('content')
        </main>



        <footer id="footer" >
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <ul class="nav justify-content-center">
                            <li class="nav-item copy">
                                Copyright © 2019 - Exposure
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/empresa">Empresa</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/productos">Productos</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/distribuidores">Distribuidores</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/contacto">Contacto</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="http://www.exposure.com.mx/pedidosonline/">Acceso a distruidores</a>
                            </li>
                            <li class="designed">
                                <a class="nav-link" href="#" target="_blank">Design by: COBO's</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script type="text/javascript" src="/js/vendor/slick/slick.min.js"></script>

    <script src="/vendor/nivo/jquery.nivo.slider.js"></script>
    <script src="/js/main/main.js?v={{uniqid()}}"> </script>


</body>
</html>
