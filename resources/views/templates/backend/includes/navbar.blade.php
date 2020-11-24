  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- User actions Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user-circle fa-lg"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Manager account</span>
          <div class="dropdown-divider"></div>
          <a href="" class="dropdown-item text-center">
            <i class="far fa-id-badge"></i>
            {{ __('Profile') }}
          </a>
          <div class="dropdown-divider"></div>
          <div class="dropdown-item">
            <a href="{{ route('logout') }}" class="btn btn-danger btn-block" onclick="event.preventDefault(); 
            document.getElementById('logout-form').submit();" >
              <i class="fas fa-sign-out-alt"></i>
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none">
              @csrf
            </form>
          </div>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->