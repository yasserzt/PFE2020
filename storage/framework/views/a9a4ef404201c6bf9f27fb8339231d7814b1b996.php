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

        <!-- <customers :booking="'<?php echo e($booking); ?>'" ></customers> -->

        <div class="columns">
          <div class="column is-12">
            <table class="table is-fullwidth is-narrowed is-bordered">
             <thead>
               <tr>
                 <th class='text-center'>Client Name</th>
                 <th class='text-center'>Room Category</th>
                 <th class='text-center'>Room Number</th>
                 <th class='text-center'>Start Date</th>
                 <th class='text-center'>End Date</th>
               </tr>
             </thead>
             <tbody>
               <?php $__currentLoopData = $booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                 <td class='text-center'><?php echo e($val->client->first_name); ?> <?php echo e($val->client->last_name); ?></td>
                 <td class='text-center'><?php echo e($val->price->roomCategory); ?></td>
                 <td class='text-center'><?php echo e($val->roomNumber); ?></td>
                 <td class='text-center'><span class="tag is-info is-medium"><?php echo e($val->startDate->format('d M Y ')); ?></span></td>
                 <td class='text-center'><span class="tag is-danger is-medium"><?php echo e($val->endDate->format('d M Y ')); ?></span></td>
               </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </tbody>
           </table>
          </div>
        </div>


      </div>
    </div>

  </div>
  <?php echo $__env->make('../scripts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <script>
  $('table').cardtable();
  </script>
</body>
</html>
<?php /**PATH /home/ziita/Documents/New/LastOne/resources/views/PanelHotel/customers.blade.php ENDPATH**/ ?>