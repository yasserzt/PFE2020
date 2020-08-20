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

        <form method="POST" id="form" action="{{ route('registerClient') }}">
          @csrf

          <input type="text" hidden name="typeAccount" value="client">
            <!-- username -->
            <div class="field">
              <label for="email" class="label">{{ __('Username') }}</label>
              <p class="control has-icons-left">
                <input
                class="input is-large @error('username') is-danger @enderror"
                type="text"
                name="username"
                placeholder="Username"
                value="{{ old('username') }}">
                <span class="icon is-large is-left">
                  <i class="fas fa-user"></i>
                </span>
              </p>
              @error('username')
              <p class="has-text-danger">{{ $message }}</p>
              @enderror
            </div>
            <!-- end username -->

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

            <!-- password -->
            <div class="field">
              <label for="email" class="label">{{ __('Confirm Password') }}</label>
              <p class="control has-icons-left">
                <input
                class="input is-large @error('password') is-danger @enderror"
                type="password"
                name="password_confirmation"
                placeholder="Confirm Password"
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
          <br>
          <button type="submit" id="register" class="button is-medium is-fullwidth has-text-white bg-four color-two">
            {{ __('Registre') }}
          </button>
          <br>
        </form>

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
