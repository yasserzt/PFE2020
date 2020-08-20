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

    <div class="container ">

      <?php echo $__env->make('PanelHotel.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <br><br>
      <div class="tabs ">
        <ul>
          <li class="is-active"><a class="noDeco color-four"><span class="icon"><i class="fas fa-info-circle"></i></span>Informations</a></li>
          <li><a class="noDeco color-four"><span class="icon"><i class="fas fa-history"></i></span>Reservation History</a></li>
           <li><a class="noDeco color-four"><span class="icon"><i class="fas fa-credit-card"></i></span>Payment</a></li>
        </ul>
      </div>
    </div>

  </div>
  <?php echo $__env->make('../scripts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <script>
  $('table').cardtable();
  </script>
</body>
</html>
<?php /**PATH /home/ziita/Documents/New/LastOne/resources/views/client/profil.blade.php ENDPATH**/ ?>