<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>EXPOSURE MX</title>

    <!--metas-->

    @include('layouts.frontend.partials.metas')

    <meta property="og:image:height"  content="200" />
    <meta property="og:image:width"  content="200" />
    <meta name="googlebot" content="index,follow" />
    <meta http-equiv="Content-Language" name="language" content="es" />
    <meta name="distribution" content="Global" />
    <meta property="fb:app_id" content="255968652401344" />

    <meta name="lang" content="es" itemprop="inLanguage" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
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

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-552B6XT');</script>

    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-166304248-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-166304248-1');
</script>

</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-552B6XT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <!-- End Google Tag Manager (noscript) -->
      <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>
       window.fbAsyncInit = function() {
    FB.init({
      appId      : '255968652401344',
      xfbml      : true,
      version    : 'v7.0'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
  </script>

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
                                <a class="nav-link" href="/distribuidores">Distribuidores</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/contacto">Contacto</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="http://www.exposure.com.mx/pedidosonline/">Acceso a distruidores</a>
                            </li>
                            <li class="designed">
                                <a class="nav-link" href="https://cobos.com.mx" target="_blank">Design by: COBO's</a>
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


    <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/59cfc3d5c28eca75e4623518/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</body>
</html>
