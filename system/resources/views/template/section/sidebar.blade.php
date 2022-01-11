@php
function checkrouteactive($route){
  if(Route::current()->uri == $route) return 'active';
}
@endphp
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ url('public/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIDAFA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('public/dist/img/avatar5.png')}}"class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('dhuha_berinfaq/beranda')}}" class="d-block">
            @if(Auth::check())
              {{request()->user()->username}}
            @else
              Silahkan Login
            @endif
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

          <!-- looping -->
          <li class="nav-item">
            <a href="{{url('admin/beranda')}}" class="nav-link {{checkrouteactive('admin/beranda')}}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <!-- end looping -->

          <!-- looping -->
          <li class="nav-item">
            <a href="{{url('admin/user')}}" class="nav-link {{checkrouteactive('admin/user')}}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
          <!-- end looping -->

           <!-- looping -->
          <li class="nav-item">
            <a href="{{url('admin/tpq')}}" class="nav-link {{checkrouteactive('admin/tpq')}}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Daftar TPQ
              </p>
            </a>
          </li>
          <!-- end looping -->

           <!-- looping -->
          <li class="nav-item">
            <a href="{{url('admin/artikel')}}" class="nav-link {{checkrouteactive('admin/artikel')}}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Artikel
              </p>
            </a>
          </li>
          <!-- end looping -->

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>