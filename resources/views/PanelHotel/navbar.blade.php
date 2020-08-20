


<nav class="navbar navbar-expand-md navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a  class="nav-link color-four" href="dash">  <i class="fas fa-home noDeco "></i>&nbsp; Dashboard</a>
      </li>
      <li class="nav-item ">
        <a  class="nav-link color-four" href="{{url('/')}}">&nbsp; Home</a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link color-four" href="{{url('customer')}}"><i class="fas fa-users"></i> &nbsp;Customers </a>
      </li>
      <li class="nav-item">
        <a class="nav-link color-four" href="{{url('rooms')}}"><i class="fas fa-person-booth"></i> &nbsp;Rooms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link color-four" href="{{url('subscription')}}"><i class="fas fa-credit-card "></i>&nbsp;Subscription</a>
      </li>



      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle color-four" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle "></i>&nbsp;  {{ Auth::user()->username }}
      </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a  class="dropdown-item color-four" href="{{url('dash')}}"><i class="fas fa-cogs"></i>&nbsp; Settings</a>
          <a  class="dropdown-item color-four" href="{{url('profil')}}"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp; Profil</a>
          <a  class="dropdown-item color-four" href="{{ route('logout') }}"
          onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt "></i>&nbsp;&nbsp;&nbsp; {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </div>
    </li>


  </ul>
</div>
</nav>
