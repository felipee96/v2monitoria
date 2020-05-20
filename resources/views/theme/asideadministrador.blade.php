<aside class="main-sidebar  sidebar-dark-primary elevation-4" style="background: #31A05E">
  <!-- Brand Logo -->
    <a href="/modAdministrador" class="brand-link">
      <img src= "{{asset("assets/img/logoCorhuila.jpg")}}" class="brand-image img-rounded">
      <span class="brand-text font-weight">CORHUILA</span>
    </a>

    <!-- Sidebar -->  
    <div class="sidebar">      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header" style="text-align:center; font-size:25px;">ADMINISTRADOR</li>                  
          <hr style="width:90%; background-color: white; height: 1px">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-user-lock"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
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
              <i class="fas fa-users"></i>
              <p>
                Monitores
                <i class="right fas fa-angle-left"></i>
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
              <i class="fas fa-folder-open"></i>
              <p>
                Reportes
                <i class="right fas fa-angle-left"></i>              
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" style="background: #369b56">
                <a href="/Ver_Reportes" class="nav-link">
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
              <i class="fas fa-desktop "></i>
              <p>Ver fallas en equipos</p>
            </a>
            
          </li> 
          <li class="nav-item has-treeview">
            <a href="/Ver_Perdidas" class="nav-link">
              <i class="fas fa-book-dead "></i>
              <p>Ver perdidas en salas</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>