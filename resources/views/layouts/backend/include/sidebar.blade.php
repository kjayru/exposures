 <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <section class="sidebar">

          <div class="user-panel">
            <div class="pull-left image">
              <img src="/backend/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Administrador</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>
            <li {{{ (Request::is('admin') ? 'class=active' : '') }}}>
              <a href="/admin">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>

              </a>

            </li>

            <li class="treeview menu-open">
                    <a href="#">
                      <i class="fa fa-tags fa-fw"></i> <span>Catálogo</span>
                      <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>

                    </a>
                    <ul class="treeview-menu" style="display:block">
                            <li {{{ (Request::is('admin/categories') ? 'class=active' : '') }}}>
                                <a href="/admin/categories">
                                    <i class="fa fa-cubes" aria-hidden="true"></i><span>Categorias</span>

                                </a>
                              </li>

                            <li {{{ (Request::is('admin/products') ? 'class=active' : '') }}}>
                                <a href="/admin/products">
                                    <i class="fa fa-cube" aria-hidden="true"></i> <span>Productos</span>

                                </a>
                            </li>


                    </ul>
            </li>

            <li class="treeview menu-open">
                    <a href="/admin/blog">
                      <i class="fa fa-shopping-cart fa-fw"></i> <span>Ventas</span>
                      <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>

                    </a>
                    <ul class="treeview-menu" style="display:block">

                            <li {{{ (Request::is('admin/orders') ? 'class=active' : '') }}}>
                                <a href="/admin/orders">
                                    <i class="fa fa-tasks" aria-hidden="true"></i> <span>Ordenes</span>

                                </a>
                            </li>

                            <li {{{ (Request::is('admin/invoices') ? 'class=active' : '') }}}>
                                <a href="/admin/invoices">
                                    <i class="fa fa-ticket" aria-hidden="true"></i><span>Facturas</span>

                                </a>
                            </li>

                    </ul>
            </li>

              <li class="treeview menu-open">
                    <a href="/admin/blog">
                        <i class="fa fa-newspaper-o" aria-hidden="true"></i> <span>CMS</span>
                      <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>

                    </a>
                    <ul class="treeview-menu" style="display:block">

                            <li {{{ (Request::is('admin/media') ? 'class=active' : '') }}}>
                                <a href="/admin/media">
                                  <i class="fa fa-th"></i> <span>Media</span>

                                </a>
                              </li>
                              <li {{{ (Request::is('admin/testimonials') ? 'class=active' : '') }}}>
                                  <a href="/admin/testimonials">
                                      <i class="fa fa-users" aria-hidden="true"></i> <span>Testimonio</span>

                                  </a>
                                </li>
                              <li  {{{ (Request::is('admin/pages') ? 'class=active' : '') }}}>
                                <a href="/admin/pages">
                                  <i class="fa fa-file-text" aria-hidden="true"></i> <span>Paginas</span>

                                </a>
                              </li>

                            <li {{{ (Request::is('admin/banners') ? 'class=active' : '') }}}>
                                    <a href="/admin/banners">
                                      <i class="fa fa-users" aria-hidden="true"></i> <span>Banners</span>
                                   </a>
                            </li>

                            <li {{{ (Request::is('admin/dealers') ? 'class=active' : '') }}}>
                                <a href="/admin/dealers">
                                  <i class="fa fa-users" aria-hidden="true"></i> <span>Distribuidores</span>
                               </a>
                        </li>

                        <li {{{ (Request::is('admin/videos') ? 'class=active' : '') }}}>
                            <a href="/admin/videos">
                              <i class="fa fa-users" aria-hidden="true"></i> <span>Videos</span>
                           </a>
                    </li>

                    </ul>
                  </li>

            <!--<li class="treeview menu-open">
              <a href="/admin/blog">
                <i class="fa fa-binoculars" aria-hidden="true"></i><span>Team explore</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>

              </a>
              <ul class="treeview-menu" style="display:block">
                <li {{{ (Request::is('admin/category-blog') ? 'class=active' : '') }}}>  <a href="/admin/category-blog" > <i class="fa fa-archive" aria-hidden="true"></i>Categorias</a><li>
                <li {{{ (Request::is('admin/posts') ? 'class=active' : '') }}}>  <a href="/admin/posts" > <i class="fa fa-file-text" aria-hidden="true"></i>Equipo</a><li>
              </ul>
            </li>-->

          </ul>
        </section>

    </aside>
