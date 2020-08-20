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


       <rooms :room="{{$room}}" :price="{{$price}}"></rooms>

     </div>
   </div>

 </div>
 @include('../scripts.script')
 <script>
 
 </script>
</body>
</html>
