<aside class="main-sidebar  sidebar-dark-primary elevation-4" style="background: #014516">
  <!-- Brand Logo -->
    <a href="/modMonitor" class="brand-link">
      <img src= "{{asset("assets/img/logoCorhuila.jpg")}}" class="brand-image img-rounded">
      <span class="brand-text font-weight-light">CORHUILA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header" style="text-align:center; font-size:25px">MONITOR</li>                  
          <hr style="width:90%; background-color: green; height: 1px">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                Control
                <i class="right fas fa-angle-left"></i>
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
              <i class="fas fa-user-cog"></i>
              <p>
                Reportar
                <i class="right fas fa-angle-left"></i>              
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
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>