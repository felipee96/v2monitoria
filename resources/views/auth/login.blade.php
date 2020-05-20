<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset("css/login.css")}}">
  <title>Iniciar sesion</title>
</head>

<body>
  
  <div class="container">
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active"> INICIAR SESIÓN </h2>

        <!-- Icon -->
        <div class="login">
          <img src="imagenes/login.png" id="icon" alt="User Icon" />
        </div>

        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <label for="email" class="input">{{ __('E-Mail Address') }}</label>
          <input type="email" id="email" class="fadeIn second" name="email" placeholder="Email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          <label for="password" class="input">{{ __('Password') }}</label>
          <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          <input type="submit" class="fadeIn fourth" value="Iniciar sesión">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
          @if (Route::has('password.request'))
          <a class="underlineHover" href="{{ route('password.request') }}">
            {{ __('Olvidaste tu contraseña?') }}
          </a>
          @endif
        </div>

      </div>
    </div>
  </div>
</body>

</html>