  <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <?php echo $__env->make('header.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



</head>
<body class="has-background-white" style="height:100vh;">

  <div class="container">
    <?php echo $__env->make('navbar.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
  <!-- Navbar End -->
  <br>
  <div class="container">

    <div class="level">

      <div class="level-left">
        <nav class="breadcrumb has-background-white" aria-label="breadcrumbs">
          <ul>
            <li><a class="noDeco color-four" href="#">Home</a></li>
            <li class="is-active"><a href="#" aria-current="page">Search</a></li>
            <li class="is-active">
              <a href="#" aria-current="page">
                <?php $__currentLoopData = $price; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($val->hotel->hotelName); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </a>
            </li>
          </ul>
        </nav>
      </div>

      <div class="level-right">
        <div class="field has-addons">
          <div class="control has-icons-left">
            <input class="input" type="text" placeholder="Place or Hotel Name">
            <span class="icon is-small is-left">
              <i class="fas fa-map-marker-alt"></i>
            </span>
          </div>
          <div class="control">
            <a class="button bg-four text-white">
              Search
            </a>
          </div>
        </div>
      </div>

    </div>

    <!-- End  breadcrumbs-->
    <hr>
    <a href="<?php echo e(url('search')); ?>" class="button noDeco bg-vue"><i class="color-four fas fa-chevron-left"></i>&nbsp; Back</a>
    <br>
    <?php echo e($price); ?>


    <?php echo $__env->make('scripts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </body>
  </html>
<?php /**PATH /home/ziita/Documents/New/LastOne/resources/views/search/hotelPage.blade.php ENDPATH**/ ?>