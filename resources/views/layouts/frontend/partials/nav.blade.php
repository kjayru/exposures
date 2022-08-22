<header>

<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/images/logo.jpg" width="150" alt="Exposure.mx" srcset="/images/logo.jpg">
            </a>


            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                    <li class="d-block d-sm-none buscador">


                            <div class="container-2">
                                <span class="icon"><i class="fa fa-search"></i></span>
                                <form action="/buscar" method="post">
                                    @csrf
                                    <input type="search" id="search" name="search" placeholder="buscar..." />
                                </form>
                            </div>


                      </li>

                    <li class="nav-item mov">
                        <a href="/" class="nav-link {{{ (Request::is('/') ? 'active' : '') }}}">Inicio</a>
                    </li>
                    <li class="nav-item mov">
                        <a href="/empresa" class="nav-link {{{ (Request::is('empresa') ? 'active' : '') }}}">Empresa</a>
                    </li>


                    <li  class="nav-item dropdown mov">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Productos
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                @foreach($menus as $k => $item)

                                    @if ($item['parent_id'] != 0)
                                        @break
                                    @endif
                                    @include('layouts.frontend.partials.menu-item', ['item' => $item])

                                @endforeach
                          </ul>



                    </li>

                    <li  class="nav-item dropdown mov">

                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Marcas </a>

                          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">

                                @foreach($menusmarca as $k => $item)

                                    @if ($item['parent_id'] != 0)
                                        @break
                                    @endif
                                    @include('layouts.frontend.partials.menumarca-item', ['item' => $item])

                                @endforeach
                          </ul>

                    </li>


                    <li class="nav-item d-none d-sm-block">
                        <a href="/videos" class="nav-link {{{ (Request::is('videos') ? 'active' : '') }}} d-none d-sm-block">Videos</a>
                    </li>
                    <li class="nav-item mov">
                        <a href="/distribuidores" class="nav-link {{{ (Request::is('distribuidores') ? 'active' : '') }}}">Distribuidores</a>
                    </li>
                    <li class="nav-item mov">
                        <a href="/outlet/" class="nav-link {{{ (Request::is('outlet') ? 'active' : '') }}}">Outlet</a>
                    </li>
                    <li class="nav-item mov">
                        <a href="/contacto" class="nav-link {{{ (Request::is('contacto') ? 'active' : '') }}}">Contacto</a>
                    </li>


                    @guest
                    @else
                    <li class="nav-item mov">
                        <a href="/usuario" class="nav-link {{{ (Request::is('usuario') ? 'active' : '') }}}">Mi cuenta</a>
                    </li>
                    @endguest
                      <li class="posrelative d-none d-sm-block">
                          <a href="/carrito" class="nav-cart">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                            <span class="quantity-icon quantity-icon-notification" id="cart-counter">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>

                            </a>
                      </li>

                      <li class="posrelative d-none d-sm-block">

                        <div class="box">
                            <div class="container-2">
                                <span class="icon"><i class="fa fa-search"></i></span>
                                <form action="/buscar" method="post">
                                    @csrf
                                    <input type="search" id="search" name="search" placeholder="buscar..." />
                                </form>
                            </div>
                          </div>

                      </li>
                </ul>

                <!-- Right Side Of Navbar -->

            </div>
        </div>
</nav>
</header>
