<?php $__env->startSection('profil'); ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Profil</h1>
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

<div id="app">
  <profil :hotel="<?php echo e($hotel); ?>"></profil>

</div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('NewPanelHotel.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ziita/Documents/New/LastOne/resources/views/NewPanelHotel/profil.blade.php ENDPATH**/ ?>