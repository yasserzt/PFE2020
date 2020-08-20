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
            <li class="is-active"><a href="#" aria-current="page">Checkout</a></li>
          </ul>
        </nav>


    </div>
    <div class="container-fluid">


      <div class="row m-5" style='height:50vh;'>
        <div class="col-md-9   ">

          <table class="table  ">
            <thead>
              <th>Hotel Name</th>
              <th>Romm Category</th>
              <th>Type Reservation</th>
              <th>Price</th>
              <th>Rooms</th>
              <th>Days</th>
              <th>Start Date</th>
              <th></th>
            </thead>
            <tbody>
              <?php $__currentLoopData = $h; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($val->hotelName); ?></td>
                <td><?php echo e($val->roomCategory); ?></td>
                <td><?php echo e($val->typePrice); ?></td>
                <td><i class="fas fa-euro-sign"></i>&nbsp;<?php echo e($val->price); ?></td>
                <td style="width:8%;"><input class="input" type="number" placeholder="number" min="1" id="nbr"   value="1"></td>
                <td style="width:8%;"><input class="input" type="number" placeholder="Days"   min="1" id="days"  value="1"></td>
                <td style="width:20%;">
                  <div class="field has-addons">

                    <p class="control">
                      <input type="date" class="input start"  id="startDate" >
                    </p>
                  </div>
                </td>
                <td></td>
              </tr>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>

        </div>
        <div class="col-md-3  ">

            <span class="title is-5 has-text-weight-bold">Checkout with :</span><br>
           <div id="paypal-button-container"></div>
         </div>

      </div>
    </div>
  </div>


  <?php $__currentLoopData = $h; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <input id="amount" hidden value="<?php echo e($val->price); ?>">
  <input id="idH"    hidden value="<?php echo e($val->idHotel); ?>">
  <input id="idP"    hidden value="<?php echo e($val->idPrice); ?>">
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





  </div>
</div>

<?php echo $__env->make('scripts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script
src="https://www.paypal.com/sdk/js?client-id=Af8QPbOmZBIA-N_rKzNDEOqaiDLxFRPOlTJGvD2JRaNc-vmT4meOqnhHdZD0oS9RuIWX_xMJY5PNFKK-"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
</script>
<script>
$('table').cardtable();

$(document).ready(function(){
  // $('.start').datepicker();
  $.ajaxSetup({
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
  });
});
function Create(){
  $.ajax({
    url:'/create',
    data: {
      idHotel    : $('#idH').val(),
      idPrice    : $('#idP').val(),
      startDate  : $('.start').val() ,
      // startDate  : $('input[type="date"]').val(),
      roomNumber : $('#nbr').val(),
      days       : $('#days').val(),
    }
    ,
    method:'POST',

  });
};

paypal.Buttons({
  createOrder: function(data, actions) {
    let val =    ($('#nbr').val()*$('#amount').val())*$('#days').val();
    alert($('#startDate').val());
    // This function sets up the details of the transaction, including the amount and line item details.
    return actions.order.create({

      purchase_units: [{
        amount: {
          value: val
        }
      }]
    });
  },
  onApprove: function(data, actions) {
    // This function captures the funds from the transaction.
    Create();
    return actions.order.capture().then(function(details) {
      // This function shows a transaction success message to your buyer.
      // alert('Transaction completed by ' + details.payer.name.given_name);
      // window.location = '/paymentSuccess';
    });
  },
  style: {
    color: 'blue'
  }
}).render( '#paypal-button-container');
</script>

</body>
</html>
<?php /**PATH /home/ziita/Documents/New/LastOne/resources/views/checkout/checkout.blade.php ENDPATH**/ ?>