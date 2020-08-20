<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  @include('header.header')



</head>
<body class="bg-vue" style="height:100vh;">
  <div class="container">
    <div id="app">


      <my-search :us="{{$us}}"></my-search>

    </div>
  </div>
</div>


@include('scripts.script')
<script>

</script>
</body>
</html>
