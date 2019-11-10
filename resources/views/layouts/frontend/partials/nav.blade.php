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
                        <a href="/" class="nav-link active">Inicio</a>
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

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Exposure Team
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="/exposure-team/">Team</a>
                          <a class="dropdown-item" href="/exposure-team/conoce-al-equipo">exposure-team</a>

                        </div>
                      </li>
                </ul>

                <!-- Right Side Of Navbar -->

            </div>
        </div>
</nav>
</header>
