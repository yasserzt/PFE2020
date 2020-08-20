<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Admin</title>
  @include('../header.header')
  <style>
  .p-1 {
    padding: 1em;
  }
  </style>

</head>
<body class="bg-vue" style="height:100vh;">
  <div id="app">

    <div class="container ">

      @include('PanelHotel.navbar')
      <br><br>
      <div class="tabs ">
        <ul>
          <li class="is-active"><a class="noDeco color-four"><span class="icon"><i class="fas fa-info-circle"></i></span>Informations</a></li>
          <li><a class="noDeco color-four"><span class="icon"><i class="fas fa-history"></i></span>Reservation History</a></li>
           <li><a class="noDeco color-four"><span class="icon"><i class="fas fa-credit-card"></i></span>Payment</a></li>
        </ul>
      </div>
    </div>

  </div>
  @include('../scripts.script')
  <script>
  $('table').cardtable();
  </script>
</body>
</html>
