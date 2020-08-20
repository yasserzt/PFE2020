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

  <!-- Login -->
  <div class="container ">
    <div class="columns  parent-div is-paddingless is-marginless   is-mobile" style="height:80vh;width:80%;position: absolute;left:10%;">
      <div class="column is-12 " >
        <p class="has-text-centered title is-1"><i class="fas fa-h-square color-four is-large "></i> </p>
        <br>

        <div class="columns box">
          <div class="column has-text-centered" style="border-right:0.1px solid #f1f1f1;">
            <i class="fas fa-user color-four is-size-2 "></i>
            <br>
            <br>
            <span class="title is-5 color-four">Sing up as a Simple <br> customer</span>
            <br>
            <br>
            <a href="{{url('registerClient')}}" class="button bg-vue noDeco ">Choose</a>
          </div>
          <div class="column has-text-centered">
            <i class="fas fa-hotel color-four is-size-2 "></i>
            <br>
            <br>
            <span class="title is-5 color-four">Sing up as a Hotel <br> owner</span>
            <br>
            <br>
            <a href="{{url('registerHotel')}}" class="button bg-vue noDeco ">Choose</a>
          </div>
        </div>

        @if (Route::has('login'))
        <p class="has-text-centered ">You have an account ? <a href="{{ route('login') }}"class="noDeco color-four" >{{ __('Login Now') }}</a>.</p>
        @endif
        @if (Route::has('password.request'))
        <p class="has-text-centered ">Forgot your password? <a href="{{ route('password.request') }}"  class="noDeco color-four">{{ __('Reset Now') }}</a>.</p>
        @endif
      </div>
    </div>
  </div>
</div>
@include('scripts.script')

</body>
</html>
