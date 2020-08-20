<!DOCTYPE html>
<html  >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  @include('header.header')

</head>
<body class="has-background-white" style="margin:0;padding:0;"  >

  <div id="app">
    <div style="height:60vh; ">

      <div class="container " >
        @include('navbar.navbar0')
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
              @foreach($h as $val)
              <tr>
                <td>{{$val->hotelName}}</td>
                <td>{{$val->roomCategory}}</td>
                <td>{{$val->typePrice}}</td>
                <td><i class="fas fa-euro-sign"></i>&nbsp;{{$val->price}}</td>
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

              @endforeach
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


  @foreach($h as $val)
  <input id="amount" hidden value="{{$val->price }}">
  <input id="idH"    hidden value="{{$val->idHotel }}">
  <input id="idP"    hidden value="{{$val->idPrice }}">
  @endforeach





  </div>
</div>

@include('scripts.script')
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
