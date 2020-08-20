<div class="row ">
  <?php $__currentLoopData = $card; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <div class="col-md-3 pb-2">
    <div class="card">
      <img class="card-img-top" src="<?php echo e(url('img/bg1.jpg')); ?>" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><?php echo e($val->hotel->hotelName); ?></h5>
        <h5 class="card-title"><i class="fas fa-map-pin"></i>   &nbsp;<?php echo e($val->hotel->region); ?></h5>

        <p class="card-text is-marginless">
          <?php if($val->roomCategory == 'single'): ?>
          <p class=" color-four is-size-7  " >1 night, 2 adults</p>
          <p class=" color-four is-size-7  " >Single Room</p>
          <?php elseif($val->roomCategory == 'double'): ?>
          <p class=" color-four is-size-7  " >1 night, 2 adults</p>
          <p class=" color-four is-size-7  " >Double Room</p>
          <?php elseif($val->roomCategory == 'communicatingRoom'): ?>
          <p class=" color-four is-size-7  " >1 night, 4 adults</p>
          <p class=" color-four is-size-7  " >Communicating Room</p>
          <?php endif; ?>

        </p>
        <div class="float-right">
        <a href='<?php echo e(url('hotelPage/'.$val->idPrice)); ?>' class="  noDeco color-four  is-small">More Info   &nbsp;<i class="fas fa-chevron-right "></i></a>
        </div>
      </div>
      <div class="card-footer">

        <small class="text-muted">

          <?php echo e($val->created_at->diffForHumans()); ?>


        </small>

      </div>
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <br>
</div>
<br>
<?php /**PATH /home/ziita/Documents/New/LastOne/resources/views/cards/card.blade.php ENDPATH**/ ?>