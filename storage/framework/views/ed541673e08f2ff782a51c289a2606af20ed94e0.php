 <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Admin</title>
  <?php echo $__env->make('../header.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <style>
  .p-1 {
    padding: 1em;
  }
  </style>

</head>
<body class="bg-vue" style="height:100vh;">
  <div id="app">

    <div class="container">

      <?php echo $__env->make('PanelHotel.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <br><br>
      <div class="box ">

        <!-- <router-view :room="<?php echo e($room); ?>" :price="<?php echo e($price); ?>" :booking=<?php echo e($booking); ?> ></router-view> -->



      </div>
    </div>

  </div>
  <?php echo $__env->make('../scripts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <script>
  $('table').cardtable();

  </script>
</body>
</html>
<?php /**PATH /home/ziita/Documents/New/LastOne/resources/views/PanelHotel/panel.blade.php ENDPATH**/ ?>