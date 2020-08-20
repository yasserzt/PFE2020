

<nav class="navbar navbar-expand-lg bg-transparent navbar-blue">
  <div class="container-fluid  ">

    <a class="  d-flex align-items-center	bg-transparent noDeco" href="<?php echo e(url('/')); ?>" >
      <img src="<?php echo e(asset('img/New/lg1.png')); ?>" width="30" height="30" class="bg-transparent" alt="Placeholder image">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <i class="fas fa-bars color-blue" style="  font-size:28px;"></i>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  mr-auto">

      </ul>
      <ul class="navbar-nav   ">
        <li class="nav-item">
          <a class="nav-link color-blue has-color-weight-semibold  " href="clients"> <i class="fas fa-hotel is-size-5"></i>  Hotels </a>
        </li>
        <li class="nav-item">
          <a class="nav-link color-blue has-color-weight-semibold  " href="hotels"><i class="fas fa-home is-size-5"></i> Guest house</a>
        </li>
        <li class="nav-item">
          <a class="nav-link color-blue has-color-weight-semibold  " href="hotels"> <i class="fas fa-paper-plane is-size-5"></i> Contact us</a>
        </li>
        <?php if(auth()->guard()->guest()): ?>
        <li class="nav-item">
            <a class="nav-link color-blue has-color-weight-semibold " href="<?php echo e(route('login')); ?>"><i class="fas fa-user is-size-5"></i> Login</a>
        </li>
          <?php else: ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle color-blue has-color-weight-semibold   " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="tr">
            <i class="fas fa-user is-size-5"></i>   <?php echo e(Auth::user()->username); ?>

          </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item color-blue" href="#"><i class="fas fa-tachometer-alt"></i>&nbsp; Dashboard</a></li>
            <li><a class="dropdown-item color-blue" href="#"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp; Profil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item color-blue" href="<?php echo e(route('logout')); ?>"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt "></i>&nbsp;&nbsp;&nbsp; <?php echo e(__('Logout')); ?>

          </a>
          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
              <?php echo csrf_field(); ?>
          </form>
          </ul>
        </li>
        <?php endif; ?>
      </ul>

    </div>
  </div>
</nav>
<?php /**PATH /home/ziita/Documents/New/LastOne/resources/views/navbar/navbar0.blade.php ENDPATH**/ ?>