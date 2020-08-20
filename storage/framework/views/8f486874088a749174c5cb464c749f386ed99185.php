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
  <div id="">
    <!-- Login -->
    <div class="container ">
      <div class="columns  parent-div is-paddingless is-marginless   is-mobile" style="height:80vh;width:60%;position: absolute;left:20%;">
        <div class="column is-12 " >
          <p class="has-text-centered title is-1"><i class="fas fa-h-square color-four is-large "></i> </p>
          <br>

            <div class="box">
              <span class="title is-4">Thank you we will contact you as soon as possible.</span>
            </div>


        </div>
      </div>
    </div>
  </div>
  <?php echo $__env->make('scripts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <script>


  $(document).ready(function(e){

    $('#register').click(function(e){
       console.log($('#username').val());
    });

    $('#register').on('submit', function (event) {
        var $form = $(this);

        $.ajax({
            data: $form.serialize(),
            type: 'POST',
            url: 'registerTest',
            success: function (data) {
                console.log($('#username').val());
            },
            error: function (jqXHR) {
                console.log($('#username').val());
                event.preventDefault();
            }
        });
    });


  });
  </script>
</body>
</html>
<?php /**PATH /home/ziita/Documents/New/LastOne/resources/views/R.blade.php ENDPATH**/ ?>