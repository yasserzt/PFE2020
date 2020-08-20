


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
        <a  class="nav-link color-four" href="<?php echo e(url('/')); ?>">&nbsp; Home</a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link color-four" href="<?php echo e(url('customer')); ?>"><i class="fas fa-users"></i> &nbsp;Customers </a>
      </li>
      <li class="nav-item">
        <a class="nav-link color-four" href="<?php echo e(url('rooms')); ?>"><i class="fas fa-person-booth"></i> &nbsp;Rooms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link color-four" href="<?php echo e(url('subscription')); ?>"><i class="fas fa-credit-card "></i>&nbsp;Subscription</a>
      </li>



      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle color-four" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle "></i>&nbsp;  <?php echo e(Auth::user()->username); ?>

      </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a  class="dropdown-item color-four" href="<?php echo e(url('dash')); ?>"><i class="fas fa-cogs"></i>&nbsp; Settings</a>
          <a  class="dropdown-item color-four" href="<?php echo e(url('profil')); ?>"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp; Profil</a>
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
<?php /**PATH /home/ziita/Documents/New/LastOne/resources/views/PanelHotel/navbar.blade.php ENDPATH**/ ?>