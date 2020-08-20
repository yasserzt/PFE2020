<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Hotel Dashboard </title>



  @include('header.header')

  <style>

  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
  </style>
</head>
<body>

  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap  p-0    shadow">
    @foreach($hotel as $val)
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="{{url('/')}}"><i class="fas fa-hotel"></i>&nbsp;&nbsp;{{$val->hotelName}}</a>
    @endforeach
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="{{ route('logout') }}"
        onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign out</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </li>
    </ul>
  </nav>

  <div class="container-fluid has-background-white">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse ">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="{{url('dashboard')}}">
                <i class="fas fa-home"></i>
                Dashboard
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{url('customers')}}">
                <i class="fas fa-users"></i>
                Customers
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('rooms')}}">
                <i class="fas fa-door-closed"></i>
                Rooms
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('event')}}">
                <i class="fas fa-calendar-plus"></i>
                Events
              </a>
            </li>

          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Subscription</span>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-credit-card"></i>
                Current subscription
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Account Management</span>
          </h6>

          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="{{url('profil')}}">
                <i class="fas fa-user"></i>
                Profil
              </a>
            </li>
          </ul>

        </div>

      </nav>

      <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 has-background-white">
        <div id="app">
          @yield('customers')
          @yield('dash')
          @yield('profil')
          @yield('rooms')
          @yield('event')
        </div>



      </main>



    </div>
  </div>

  @include('scripts.script')

  <script type="text/javascript">
  $('table').cardtable();
  $('#tab2').cardtable();
  $('#tab1').cardtable();

  </script>
</body>
</html>
