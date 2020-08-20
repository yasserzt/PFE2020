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

    <div class="container">

      @include('PanelHotel.navbar')
      <br><br>
      <div class="box ">

        <!-- <customers :booking="'{{ $booking }}'" ></customers> -->

        <div class="columns">
          <div class="column is-12">
            <table class="table is-fullwidth is-narrowed is-bordered">
             <thead>
               <tr>
                 <th class='text-center'>Client Name</th>
                 <th class='text-center'>Room Category</th>
                 <th class='text-center'>Room Number</th>
                 <th class='text-center'>Start Date</th>
                 <th class='text-center'>End Date</th>
               </tr>
             </thead>
             <tbody>
               @foreach($booking as $val)
               <tr>
                 <td class='text-center'>{{$val->client->first_name}} {{$val->client->last_name}}</td>
                 <td class='text-center'>{{$val->price->roomCategory}}</td>
                 <td class='text-center'>{{$val->roomNumber}}</td>
                 <td class='text-center'><span class="tag is-info is-medium">{{ $val->startDate->format('d M Y ')  }}</span></td>
                 <td class='text-center'><span class="tag is-danger is-medium">{{ $val->endDate->format('d M Y ')   }}</span></td>
               </tr>
               @endforeach
             </tbody>
           </table>
          </div>
        </div>


      </div>
    </div>

  </div>
  @include('../scripts.script')
  <script>
  $('table').cardtable();
  </script>
</body>
</html>
