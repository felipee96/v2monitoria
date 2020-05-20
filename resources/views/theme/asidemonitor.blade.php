<aside class="main-sidebar  sidebar-dark-primary elevation-4" style="background: #31A05E;">
  <!-- Brand Logo -->
 <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item" style="display: block; margin-left: auto; margin-right: auto">
          <a class="nav-link" href="/modMonitor">
            <i class="fas fa-home" style="color: rgb(88, 219, 88);"></i>
          </a>
        </li>
        <li class="nav-header">
          <img src="{{asset("imagenes/monitorprofile.png")}}"
            style="width: 200px; display: block; margin-left: auto; margin-right: auto; margin-top: -60px">
            <div style="margin-top: -20px; color:rgb(27, 26, 26); text-align: center">
              <h5 style="color: rgb(204, 202, 198)">BIENVENIDO</h5><h5>{{ Auth::user()->name }}</h5>
            </div>
          <hr style="width:90%; background-color: green; height: 1px">
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-users" style="color: rgb(219, 160, 49)"></i>
            <p>
              Control
              <i class="right fas fa-angle-left" style="color: black"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/control" class="nav-link">
                <i class="fas fa-user-plus nav-icon"></i>
                <p>Registrar estudiante</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/Ver_Estudiantes" class="nav-link">
                <i class="fas fa-user-edit nav-icon"></i>
                <p>Ver estudiantes</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-user-cog" style="color: rgb(219, 160, 49)"></i>
            <p>
              Reportar
              <i class="right fas fa-angle-left" style="color: black"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/fallas" class="nav-link">
                <i class="fas fa-desktop nav-icon"></i>
                <p>Fallas en equipo</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/perdidas" class="nav-link">
                <i class="fas fa-book-dead nav-icon"></i>
                <p>Pérdida</p>
              </a>
            </li>
          </ul>
        </li>
        <div style="display: block; margin-left: auto; margin-right: auto">
          <li class="nav-header">
            <img src="{{asset("imagenes/logout.png")}}" style="width: 50px;display: block; margin-top: 50px">
            <a style="font-size: 15px" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
              {{ __('Salir') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
        </div>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>