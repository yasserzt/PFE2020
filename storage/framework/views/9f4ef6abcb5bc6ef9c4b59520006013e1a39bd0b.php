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
        <form  method="POST" id="form" action="<?php echo e(route('registerHotel')); ?>">
          <?php echo csrf_field(); ?>

          <input type="text" name="typeAccount" id="type" value="hotel" hidden>
          <!-- Hotel Name -->
          <div class="field">
            <label for="email" class="label"><?php echo e(__(' Hotel Name')); ?></label>
            <p class="control has-icons-left">
              <input
              class="input is-large <?php $__errorArgs = ['hotelName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
              type="text"
              name="hotelName"
              placeholder=" Hotel Name"
              value="<?php echo e(old('hotelName')); ?>">
              <span class="icon is-large is-left">
                <i class="fas fa-hotel"></i>
              </span>
            </p>

            <?php $__errorArgs = ['hotelName'];
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
          <!-- end  Hotel Name -->
          <!-- username -->
          <div class="field">
            <label for="email" class="label"><?php echo e(__('Username')); ?></label>
            <p class="control has-icons-left">
              <input
              class="input is-large <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
              type="text"
              name="username"
              placeholder="Username"
              value="<?php echo e(old('username')); ?>">
              <span class="icon is-large is-left">
                <i class="fas fa-user"></i>
              </span>
            </p>
            <?php $__errorArgs = ['username'];
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
          <!-- end username -->
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

          <div class="notification is-info">
            <span>Note : Enter your email and Hotel name . <br> We will send you your login infromations</span>
          </div>


          <button   id="register" class="button is-medium is-fullwidth has-text-white bg-four color-two">
            <?php echo e(__('Registre')); ?>

          </button>
          <br>

        </form>

        <?php if(Route::has('login')): ?>
        <p class="has-text-centered ">You have an account ? <a href="<?php echo e(route('login')); ?>"class="noDeco color-four" ><?php echo e(__('Login Now')); ?></a>.</p>
        <?php endif; ?>
        <?php if(Route::has('password.request')): ?>
        <p class="has-text-centered ">Forgot your password? <a href="<?php echo e(route('password.request')); ?>"  class="noDeco color-four"><?php echo e(__('Reset Now')); ?></a>.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<?php echo $__env->make('scripts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
// $(document).ready(function(){
//   $.ajaxSetup({
//     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
//   });
//
//
//
//   $("#register").click(function(e){
//     e.preventDefault();
//
//     $.ajax({
//       url:"registerTest",
//       type:"POST",
//       data:{
//         'email'          :  $('input[name="email"]').val(),
//         'hotelName'      : $('input[name="hotelName"]').val(),
//         'type'           : $($('input[name="type"]')).val()
//       },
//       success:function(data){
//         if(data.ok != ''){
//           console.log(data.ok);
//         }else{
//           console.log(data.errors);
//         }
//       },
//       error: function (errors) {
//
//                    // $.each(, function (key, val) {
//                       alert(errors.responseText['errors']);
//                    // });
//
//            }
//     });
//   });
//
//
// });
</script>
</body>
</html>
<?php /**PATH /home/ziita/Documents/New/LastOne/resources/views/auth/registerHotel.blade.php ENDPATH**/ ?>