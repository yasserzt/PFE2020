<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <?php echo $__env->make('header.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <style media="screen">

  .parent-div   {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  </style>
</head>
<body class="bg-vue" style="height:100vh;">

  <!-- Login -->
  <div class="container ">

    <div class="columns  parent-div is-paddingless is-marginless   is-mobile" style="height:80vh;width:40%;position: absolute;left:30%;">



      <div class="column is-12 " >
        <p class="has-text-centered title is-1"><i class="fas fa-h-square color-four is-large "></i> </p>
        <br>
        <div class="     ">
          <!-- Form -->
          <form method="POST" class="" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <!-- Email -->
            <div class="field">
              <label for="email" class="label"><?php echo e(__('E-Mail Address')); ?></label>
              <p class="control has-icons-left">
                <input
                class="input is-large <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                type="email"
                name="email"
                placeholder="E-mail"
                value="<?php echo e(old('email')); ?>">
                <span class="icon is-large is-left">
                  <i class="fas fa-at"></i>
                </span>
              </p>
              <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <p class="has-text-danger"><?php echo e($message); ?></p>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <!-- end Email -->

            <!-- password -->
            <div class="field">
              <label for="email" class="label"><?php echo e(__('Password')); ?></label>
              <p class="control has-icons-left">
                <input
                class="input is-large <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                type="password"
                name="password"
                placeholder="Password"
                >
                <span class="icon is-large is-left">
                  <i class="fas fa-lock"></i>
                </span>
              </p>
              <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <p class="has-text-danger"><?php echo e($message); ?></p>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <!-- end password -->

            <button type="submit" class="button is-medium is-fullwidth has-text-white bg-four color-two">
              <?php echo e(__('Login')); ?>

            </button>
            <br>
          </form>
          <!-- Form -->
          <?php if(Route::has('register')): ?>
          <p class="has-text-centered ">Don't have an account ? <a href="<?php echo e(route('register')); ?>"class="noDeco color-four" ><?php echo e(__('Register Now')); ?></a>.</p>
          <?php endif; ?>
          <?php if(Route::has('password.request')): ?>
          <p class="has-text-centered ">Forgot your password? <a href="<?php echo e(route('password.request')); ?>"  class="noDeco color-four"><?php echo e(__('Reset Now')); ?></a>.</p>
          <?php endif; ?>
        </div>
      </div>

    </div>
  </div>


  <?php echo $__env->make('scripts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH /home/ziita/Documents/New/LastOne/resources/views/auth/login.blade.php ENDPATH**/ ?>