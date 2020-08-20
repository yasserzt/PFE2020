<?php $__env->startSection('customers'); ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Customers</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <!-- <div class="btn-group mr-2">
      <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
      <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
    </div> -->
    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
      <span data-feather="calendar"></span>
      This week
    </button>
  </div>
</div>

<div class="columns">
  <div class="column is-12">
    <table class="table table-dark table-sm  table-bordered text-white">
     <thead>
       <tr>
         <th class='text-center text-white'>Client Name</th>
         <th class='text-center text-white'>Room Category</th>
         <th class='text-center text-white'>Room Number</th>
         <th class='text-center text-white'>Start Date</th>
         <th class='text-center text-white'>End Date</th>
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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('NewPanelHotel.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ziita/Documents/New/LastOne/resources/views/NewPanelHotel/customers.blade.php ENDPATH**/ ?>