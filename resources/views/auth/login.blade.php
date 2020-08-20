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

    <div class="columns  parent-div is-paddingless is-marginless   is-mobile" style="height:80vh;width:40%;position: absolute;left:30%;">



      <div class="column is-12 " >
        <p class="has-text-centered title is-1"><i class="fas fa-h-square color-four is-large "></i> </p>
        <br>
        <div class="     ">
          <!-- Form -->
          <form method="POST" class="" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="field">
              <label for="email" class="label">{{ __('E-Mail Address') }}</label>
              <p class="control has-icons-left">
                <input
                class="input is-large @error('email') is-danger @enderror"
                type="email"
                name="email"
                placeholder="E-mail"
                value="{{ old('email') }}">
                <span class="icon is-large is-left">
                  <i class="fas fa-at"></i>
                </span>
              </p>
              @error('email')
              <p class="has-text-danger">{{ $message }}</p>
              @enderror
            </div>
            <!-- end Email -->

            <!-- password -->
            <div class="field">
              <label for="email" class="label">{{ __('Password') }}</label>
              <p class="control has-icons-left">
                <input
                class="input is-large @error('password') is-danger @enderror"
                type="password"
                name="password"
                placeholder="Password"
                >
                <span class="icon is-large is-left">
                  <i class="fas fa-lock"></i>
                </span>
              </p>
              @error('password')
              <p class="has-text-danger">{{ $message }}</p>
              @enderror
            </div>
            <!-- end password -->

            <button type="submit" class="button is-medium is-fullwidth has-text-white bg-four color-two">
              {{ __('Login') }}
            </button>
            <br>
          </form>
          <!-- Form -->
          @if (Route::has('register'))
          <p class="has-text-centered ">Don't have an account ? <a href="{{ route('register') }}"class="noDeco color-four" >{{ __('Register Now') }}</a>.</p>
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
