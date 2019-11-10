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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="/vendor/fontawesome/css/all.css" rel="stylesheet">
    <!-- Styles -->
    <link rel='stylesheet'   href='http://fonts.googleapis.com/css?family=Lato%3A400%2C700%2C300%7CSource+Sans+Pro%3A400&#038;subset=latin&#038;ver=1500921649' type='text/css' media='all' />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/js/vendor/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/js/vendor/slick/slick-theme.css"/>

    <link rel="stylesheet" href="/vendor/nivo/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/vendor/nivo/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/vendor/nivo/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/vendor/nivo/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/vendor/nivo/nivo-slider.css" type="text/css" media="screen" />

    <link href="/css/app.css?v={{ uniqid() }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.frontend.partials.nav')
        <main role="main">
            @yield('content')
        </main>
        <footer-component></footer-component>
    </div>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script src="{{ asset('js/app.js') }}" ></script>
    <script type="text/javascript" src="/js/vendor/slick/slick.min.js"></script>
    
    <script src="/vendor/nivo/jquery.nivo.slider.js"></script>
    <script src="/js/main/main.js?v={{uniqid()}}"> </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.slider-team').slick({
          centerMode:true,
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          infinite: true,
          cssEase: 'linear',
          variableWidth: true,
          variableHeight: true,
          autoplay:true
        });
      });
    </script>

</body>
</html>
