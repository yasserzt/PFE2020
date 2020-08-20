
<nav class="navbar navbar-expand-md bg-transparent">

  <button class="navbar-toggler bg-vue" type="button" class="" data-toggle="collapse" data-target="#navbarNav">
    <span class="navbar-toggler-icon bg-vue"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a  class="nav-link has-text-dark" href="{{url('/')}}"> <i class="fab fa-hire-a-helper"></i>&nbsp; Hoteru</a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link has-text-dark" href="clients"><i class="fas fa-hotel"></i> &nbsp;Hotels </a>
      </li>
      <li class="nav-item">
        <a class="nav-link has-text-dark" href="hotels"><i class="fas fa-tools"></i> &nbsp;Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link has-text-dark" href="hotels"><i class="fas fa-paper-plane"></i> &nbsp;Contact us</a>
      </li>

      @guest
          <li class="nav-item">
              <a class="nav-link has-text-dark" href="{{ route('login') }}"><i class="fas fa-user "></i></a>
          </li>


      @else

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle has-text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle "></i>&nbsp;  {{ Auth::user()->username }}
      </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a  class="dropdown-item has-text-dark" href="dash"><i class="fas fa-tachometer-alt"></i>&nbsp; Dashboard</a>
          <a  class="dropdown-item has-text-dark" href="{{url('profil')}}"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp; Profil</a>
          <a  class="dropdown-item has-text-dark" href="{{ route('logout') }}"
          onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt "></i>&nbsp;&nbsp;&nbsp; {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </div>
    </li>

      @endguest
  </ul>
</div>
</nav>
