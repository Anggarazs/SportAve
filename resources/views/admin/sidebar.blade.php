<aside class="main-sidebar sidebar-dark-primary elevation-4 bg-primary">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <img src="{{ asset('lte/dist/img/futsal.png') }}" alt="beach" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SportAve</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/users" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Users
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/datalapangan" class="nav-link">
              <i class="nav-icon fas fa-clipboard check"></i>
              <p>
                 Data Lapangan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/boking" class="nav-link">
              <i class="nav-icon fas fa fa-list"></i>
              <p>
                Daftar Booking
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/home') }}" class="nav-link">
              <i class="nav-icon fas fa-clipboard-check"></i>
              <p>
                Lihat Lapangan
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>