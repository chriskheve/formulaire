 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light" >
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
        
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
    </li>
  </ul>


  <!-- Right navbar links -->

              <div class="collapse navbar-collapse " id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto navbar-right-top">
                      <li class="nav-item dropdown nav-user">
                          <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('images/bceco.jpg')}}" alt="" class="direct-chat-img elevation-2" alt="User Image"></a>
                          <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                              <div class="nav-user-info">
                                  <h5 class="mb-0 text-white nav-user-name">snoopyLAB </h5>
                              </div>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        <i class="zmdi zmdi-power"></i>{{ __('Deconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                          </div>
                      </li>
                  </ul>
              </div>
</nav>
      <!-- /.navbar -->