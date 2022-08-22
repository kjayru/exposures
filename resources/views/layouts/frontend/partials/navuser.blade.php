<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">

      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">{{ $usuario->name}}
            <strong>{{ $usuario->lastname}}</strong>
          </span>
          <span class="user-role">Usuario</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>


      <div class="sidebar-menu">
        <ul>



          <li>
            <a href="/usuario">
              <i class="fa fa-book"></i>
              <span>Historial de compras</span>

            </a>
          </li>
          <li>
            <a href="/usuario/configuracion">
              <i class="fa fa-calendar"></i>
              <span>Configuración</span>
            </a>
          </li>
          <li>


            <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-folder"></i>
                <span>Salir</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>

</nav>
