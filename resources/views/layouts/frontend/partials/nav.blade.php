<header>
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
                    <li class="nav-item ">
                        <a href="/" class="nav-link {{{ (Request::is('/') ? 'active' : '') }}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="/empresa" class="nav-link {{{ (Request::is('empresa') ? 'active' : '') }}}">Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a href="/productos" class="nav-link {{{ (Request::is('productos') ? 'active' : '') }}}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/videos" class="nav-link {{{ (Request::is('videos') ? 'active' : '') }}}">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/distribuidores" class="nav-link {{{ (Request::is('distribuidores') ? 'active' : '') }}}">Distribuidores</a>
                    </li>
                    <li class="nav-item">
                        <a href="/outlet/" class="nav-link {{{ (Request::is('outlet') ? 'active' : '') }}}">Outlet</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contacto" class="nav-link {{{ (Request::is('contacto') ? 'active' : '') }}}">Contacto</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link {{{ (Request::is('exposure-team') ? 'active' : '') }}}" href="/exposure-team" >
                            Exposure Team
                        </a>
                    </li>
                    @guest
                    @else
                    <li class="nav-item">
                        <a href="/usuario" class="nav-link {{{ (Request::is('contacto') ? 'active' : '') }}}">Mi cuenta</a>
                    </li>
                    @endguest
                      <li>
                          <a href="/carrito" class="nav-cart">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <span class="quantity-icon quantity-icon-notification" id="cart-counter">1</span>
                            </a>
                      </li>
                </ul>

                <!-- Right Side Of Navbar -->

            </div>
        </div>
</nav>
</header>
