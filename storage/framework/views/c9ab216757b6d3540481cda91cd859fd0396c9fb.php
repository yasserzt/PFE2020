
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
        <i class="fas fa-user-circle "></i>&nbsp;  <?php echo e(Auth::user()->username); ?>

      </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <router-link  class="dropdown-item color-four" to="dash"><i class="fas fa-cogs"></i>&nbsp; Settings</router-link>
          <a  class="dropdown-item color-four" href="#"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp; Profil</a>
          <a  class="dropdown-item color-four" href="<?php echo e(route('logout')); ?>"
          onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt "></i>&nbsp;&nbsp;&nbsp; <?php echo e(__('Logout')); ?>

        </a>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </form>
      </div>
    </li>


  </ul>
</div>
</nav>
<?php /**PATH /home/ziita/Documents/New/LastOne/resources/views/PanelAdmin/navbar.blade.php ENDPATH**/ ?>