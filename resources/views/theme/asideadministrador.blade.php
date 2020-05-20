<aside class="main-sidebar  sidebar-dark-primary elevation-4" style="background: #31A05E">
  <!-- Brand Logo -->
    <!-- Sidebar -->  
    <div class="sidebar">      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item" style="display: block; margin-left: auto; margin-right: auto">
            <a class="nav-link" href="/modAdministrador">
              <i class="fas fa-home" style="color: rgb(88, 219, 88);"></i>
            </a>
          </li>
          <li class="nav-header">
            <img src="{{asset("imagenes/adminprofile.png")}}"
              style="width: 200px; display: block; margin-left: auto; margin-right: auto; margin-top: -60px">
              <div style="text-align: center; margin-top: -20px; color:rgb(27, 26, 26); display: block; margin-left: auto; margin-right: auto">
                <h5 style="color: rgb(12, 102, 12)">HOLA</h5><h5 style="text-align: center;">{{ Auth::user()->name }}</h5>
              </div>
            <hr style="width:90%; background-color: green; height: 1px">
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-user-lock" style="color: rgb(219, 160, 49)"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left" style="color: black"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/Ver_Usuarios" class="nav-link">
                  <i class="fas fa-user-edit nav-icon"></i>
                  <p>Ver usuarios registrados</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-users" style="color: rgb(219, 160, 49)"></i>
              <p>
                Monitores
                <i class="right fas fa-angle-left" style="color: black"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/Ver_Monitores" class="nav-link">
                  <i class="fas fa-user-edit nav-icon"></i>
                  <p>Ver monitores</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-folder-open" style="color: rgb(219, 160, 49)"></i>
              <p>
                Generar Reportes
                <i class="right fas fa-angle-left" style="color: black"></i>              
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" style="background: #369b56">
                <a href="/Ver_ReporteUsuarios" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p>Reporte usuarios</p>
                </a>
              </li>
              <li class="nav-item" style="background: #369b56">
                <a href="/Ver_ReporteMonitores" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p>Reporte monitores</p>
                </a>
              </li>
              <li class="nav-item" style="background: #369b56">
                <a href="/Ver_ReporteFalla" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p>Reporte fallas</p>
                </a>
              </li>
              <li class="nav-item" style="background: #369b56">
                <a href="/Ver_ReportePerdida" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p>Reporte pérdidas</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="/Ver_Fallas" class="nav-link">
              <i class="fas fa-desktop" style="color: rgb(219, 160, 49)"></i>
              <p>Ver fallas en equipos</p>
            </a>
            
          </li> 
          <li class="nav-item has-treeview">
            <a href="/Ver_Perdidas" class="nav-link">
              <i class="fas fa-book-dead" style="color: rgb(219, 160, 49)"></i>
              <p>Ver perdidas en salas</p>
            </a>
          </li>
          <div style="display: block; margin-left: auto; margin-right: auto">
            <li class="nav-header">
              <img src="{{asset("imagenes/logout.png")}}" style="width: 50px;display: block; margin-top: 20px">
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