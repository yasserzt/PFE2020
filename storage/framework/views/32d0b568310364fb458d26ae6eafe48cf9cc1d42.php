<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <?php echo $__env->make('header.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



</head>
<body class="bg-vue" style="height:100vh;">
  <div class="container">
    <div id="app">


      <my-search :us="<?php echo e($us); ?>"></my-search>

    </div>
  </div>
</div>


<?php echo $__env->make('scripts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>

</script>
</body>
</html>
<?php /**PATH /home/ziita/Documents/New/LastOne/resources/views/exx.blade.php ENDPATH**/ ?>