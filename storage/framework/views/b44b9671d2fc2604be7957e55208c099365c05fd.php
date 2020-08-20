<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Hotel Dashboard </title>



  <?php echo $__env->make('header.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
    <?php $__currentLoopData = $hotel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="<?php echo e(url('/')); ?>"><i class="fas fa-hotel"></i>&nbsp;&nbsp;<?php echo e($val->hotelName); ?></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="<?php echo e(route('logout')); ?>"
        onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign out</a>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
          <?php echo csrf_field(); ?>
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
              <a class="nav-link " aria-current="page" href="<?php echo e(url('dashboard')); ?>">
                <i class="fas fa-home"></i>
                Dashboard
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('customers')); ?>">
                <i class="fas fa-users"></i>
                Customers
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('rooms')); ?>">
                <i class="fas fa-door-closed"></i>
                Rooms
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('event')); ?>">
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
              <a class="nav-link" href="<?php echo e(url('profil')); ?>">
                <i class="fas fa-user"></i>
                Profil
              </a>
            </li>
          </ul>

        </div>

      </nav>

      <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 has-background-white">
        <div id="app">
          <?php echo $__env->yieldContent('customers'); ?>
          <?php echo $__env->yieldContent('dash'); ?>
          <?php echo $__env->yieldContent('profil'); ?>
          <?php echo $__env->yieldContent('rooms'); ?>
          <?php echo $__env->yieldContent('event'); ?>
        </div>



      </main>



    </div>
  </div>

  <?php echo $__env->make('scripts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <script type="text/javascript">
  $('table').cardtable();
  $('#tab2').cardtable();
  $('#tab1').cardtable();

  </script>
</body>
</html>
<?php /**PATH /home/ziita/Documents/New/LastOne/resources/views/NewPanelHotel/dashboard.blade.php ENDPATH**/ ?>