<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('dashboard/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('dashboard/img/favicon.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, name='viewport' />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link href="{{ asset('dashboard/css/material-dashboard.css?v=2.1.1') }}" rel="stylesheet" />
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      
      <div class="logo">
        <a href="{{ url('/') }}" class="simple-text logo-normal">
          Car 5ell
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{ Request::is('admin/cars*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('cars.index') }}">
              <i class="material-icons">directions_car</i>
              <p>Cars</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('admin/news*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('news.index') }}">
              <i class="material-icons">event</i>
              <p>News</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('admin/forms*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('admin/forms') }}">
              <i class="material-icons">list_alt</i>
              <p>Forms</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="{{ url('/') }}" target="_blank">To site</a>
          </div>
          <hr>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <form action="{{ route('logout') }}" method="POST" style="display: none;" id="logoutForm">
                    {{ csrf_field() }}
                </form>
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" onclick="document.getElementById('logoutForm').submit()">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      

      <div class="content">
        <div class="container-fluid">
          <div class="row">
              @yield('content')
          </div>
        </div>
      </div>
      
    </div>
  </div>
  

  <script src="{{ asset('dashboard/js/jquery.min.js') }}"></script>
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  @yield('js')
</body>

</html>
