
<nav class="navbar navbar-expand-md navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <router-link  class="nav-link color-four" to="dashboard">  <i class="fas fa-home noDeco "></i>&nbsp; Dashboard</router-link>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
        <router-link class="nav-link color-four" to="clients"><i class="fas fa-users"></i> &nbsp;Customers </router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link color-four" to="hotels"><i class="fas fa-hotel"></i> &nbsp;Hotels</router-link>
      </li>



      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle color-four" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle "></i>&nbsp;  {{ Auth::user()->username }}
      </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <router-link  class="dropdown-item color-four" to="dash"><i class="fas fa-cogs"></i>&nbsp; Settings</router-link>
          <a  class="dropdown-item color-four" href="#"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp; Profil</a>
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
