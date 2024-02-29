<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a class="brand-link">
      <img src="/img/logo.png" alt="Sidumasari"
          class="brand-image img-circle elevation-3" style="opacity: .8" style="width: 50px">
      <span class="brand-text font-weight-light d-xs-none text-uppercase">ADMIN</span>
      <span class="brand-text font-weight-light d-sm-none">Starter Kit
      </span>
  </a>

  <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
          data-accordion="false">

          <li class="nav-item mt-1">
              <a href="{{ '/dashboard' }}" class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                      Dashboard
                  </p>
              </a>
          </li>

          <li class="nav-header fw-bold mt-2">MASTER DATA</li>

          <li class="nav-item {{ Request::is('user*') |
                 Request::is('menudua') ? 'menu-open' : '' }}">
              <a href="#" class="nav-link {{ Request::is('user*') |
                     Request::is('menudua') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    DATA-DATA
                    <i class="right fas fa-angle-left"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{ route('user.index') }}" class="nav-link {{ Request::is('user*') ? 'active' : '' }}">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Data User</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('user.index') }}" class="nav-link {{ Request::is('menudua*') ? 'active' : '' }}">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Menu Dua</p>
                      </a>
                  </li>
              </ul>
          </li>


          <li class="nav-header mt-2 fw-bold">SAYA</li>

          <li class="nav-item mb-3">
              <a href="/profil" class="nav-link {{ Request::is('profil*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Profil</p>
              </a>
          </li>

      </ul>
    </nav>
  </div>
</aside>
