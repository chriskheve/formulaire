
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link" style="height:58px;">
          <img src="{{ asset('images/obama.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
               style="opacity: .8; width: 45px;">
          <span class="brand-text font-weight-light"><input  type="hidden" value="Obama"></span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            {{-- <div class="image">
              <img src="{{ asset('images/snoopy_PNG90.png')}}" class="img-circle elevation-2" alt="User Image">
            </div> --}}
            <div class="info">
              <a href="{{route('root_path')}}" class="d-block"><i class="nav-icon fas fa-tachometer-alt"></i>  Tableau de bord</a>
              {{-- <a href="#" class="d-block"><i class="nav-icon fas fa-tachometer-alt"></i>  Tableau de bord</a> --}}
              {{-- @if (Route::is('root_path'))
                <a href="#" class="d-block">Accueil</a>
              @elseif(Route::is('docRef')) 
                <a href="#" class="d-block">Document & Reference</a>
              @elseif(Route::is('etat')) 
                  <a href="#" class="d-block">Etat de decaissement</a>
              @elseif(Route::is('controle')) 
                    <a href="#" class="d-block">Controle technique</a>
              @elseif(Route::is('traitement')) 
                      <a href="#" class="d-block">Traitement a priori</a>
              @endif --}}
            </div>
          </div>
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                   {{-- <li class="nav-item">
                    <a href="{{route('root_path')}}" class="nav-link {{ set_active_route('root_path') }}">
                      <i class="fa fa-home"></i>
                      <p>Accueil</p>
                    </a>
                  </li> --}}
                  <li class="nav-item">
                    <a href="{{route('docRef')}}" class="nav-link {{ set_active_route('docRef') }}">
                      {{-- <i class="far fa-chart-bar"></i> --}}
                      <i class="far fa-copy"></i>
                      <p>Traitement</p>
                    </a>
                  </li>
              {{-- <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link {{ set_active_route('root_path') }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Administration
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('root_path')}}" class="nav-link {{ set_active_route('root_path') }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Accueil</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('docRef')}}" class="nav-link {{ set_active_route('docRef') }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Traitement</p>
                    </a>
                  </li>
                </ul>
              </li> --}}
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    