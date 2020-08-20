<!DOCTYPE html>
<html  >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <?php echo $__env->make('header.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>
<body class="has-background-white" style="margin:0;padding:0;"  >

  <div id="app">
    <div style="height:60vh; ">

      <div class="container " >
        <?php echo $__env->make('navbar.navbar0', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <nav class="breadcrumb has-background-white" aria-label="breadcrumbs">
          <ul>
            <li><a class="noDeco color-four" href="#">Home</a></li>
            <li class="is-active"><a href="#" aria-current="page">Event</a></li>
          </ul>
        </nav>


        <eventregistre :event="<?php echo e($event); ?>"  ></eventregistre>
    </div>

  </div>





  </div>
</div>

<?php echo $__env->make('scripts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
  $('table').cardtable();
</script>

</body>
</html>
<?php /**PATH /home/ziita/Documents/New/LastOne/resources/views/event/eventregistre.blade.php ENDPATH**/ ?>