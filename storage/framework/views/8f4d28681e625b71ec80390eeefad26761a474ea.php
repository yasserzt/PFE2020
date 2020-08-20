
<nav class="navbar navbar-expand-md bg-transparent">

  <button class="navbar-toggler bg-vue" type="button" class="" data-toggle="collapse" data-target="#navbarNav">
    <span class="navbar-toggler-icon bg-vue"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a  class="nav-link has-text-dark" href="<?php echo e(url('/')); ?>"> <i class="fab fa-hire-a-helper"></i>&nbsp; Hoteru</a>
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

      <?php if(auth()->guard()->guest()): ?>
          <li class="nav-item">
              <a class="nav-link has-text-dark" href="<?php echo e(route('login')); ?>"><i class="fas fa-user "></i></a>
          </li>


      <?php else: ?>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle has-text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle "></i>&nbsp;  <?php echo e(Auth::user()->username); ?>

      </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a  class="dropdown-item has-text-dark" href="dash"><i class="fas fa-tachometer-alt"></i>&nbsp; Dashboard</a>
          <a  class="dropdown-item has-text-dark" href="<?php echo e(url('profil')); ?>"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp; Profil</a>
          <a  class="dropdown-item has-text-dark" href="<?php echo e(route('logout')); ?>"
          onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt "></i>&nbsp;&nbsp;&nbsp; <?php echo e(__('Logout')); ?>

        </a>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </form>
      </div>
    </li>

      <?php endif; ?>
  </ul>
</div>
</nav>
<?php /**PATH /home/ziita/Documents/New/LastOne/resources/views/navbar/navbar.blade.php ENDPATH**/ ?>