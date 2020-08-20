<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  @include('header.header')
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
              <p class="title is-4 has-text-centered">Thank you for your payment . <br>Enjoy your Holidays</p>
            </div>

            <a href="{{url('/')}}" class="noDeco color-four is-size-3"><p class="has-text-centered">Back to Home</p></a>
        </div>
      </div>
    </div>
  </div>
  @include('scripts.script')
  <script>

  </script>
</body>
</html>
