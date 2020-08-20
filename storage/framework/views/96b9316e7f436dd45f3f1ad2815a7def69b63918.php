<?php echo $__env->make('header.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startComponent('mail::message'); ?>
<!-- # Introduction -->
Welcome  <?php echo e($username); ?> <br>
Thank you for the trust hope you enjoy the experience in our website .<br>

Your Login informations :<br>
<span class="has-text-weight-semibold">Username : <?php echo e($username); ?></span> <br>
<span class="has-text-weight-semibold">E-mail   : <?php echo e($email); ?></span> <br>
<span class="has-text-weight-semibold">Password : <?php echo e($password); ?></span> <br><br>

<span class="has-text-weight-semibold">Note:</span> you can login by username or email.<br>
<span class="has-text-weight-semibold">Note: </span>Please don't share your  informations to anyone else.</span><br>

<p class="has-text-centered"><a href="<?php echo e(url('login')); ?>" class="button bg-four is-large">Login</a></p>


Thanks,
<span class="has-text-weight-semibold"><?php echo e(config('app.name')); ?></span>
<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php echo $__env->make('scripts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/ziita/Documents/New/LastOne/resources/views/emails/welcome.blade.php ENDPATH**/ ?>