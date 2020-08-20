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
            <li class="is-active"><a href="#" aria-current="page">Event</a></li>
          </ul>
        </nav>


        <eventregistre :event="{{$event}}"  ></eventregistre>
    </div>

  </div>





  </div>
</div>

@include('scripts.script')
<script>
  $('table').cardtable();
</script>

</body>
</html>
