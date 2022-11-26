<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="waseem javed">
    <title>Signin</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <style>
      html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

    </style>
  </head>
  <body class="bg-dark">
    
<main class="form-signin w-100 m-auto">
  <form action="/signin" method="POST" class="needs-validation" novalidate>
    @csrf
    <center>
      <a href="/">
        <img class="mb-4" src="/logo.png" alt="n--img" width="110" height="80">
      </a>
    </center>
    <h1 class="h3 mb-3 fw-normal text-white">Sign In</h1>
    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
      @error('email')
        <div class="invalid-feedback">
            {{$message}}
        </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
      @error('password')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="checkbox">
      <label class="text-white">
        <input type="checkbox" value="remember-me"> Remember me
        <p class="text-muted fs-6">create new account..?<a href="/signup"> sign up</a></p>
      </label>
    </div>
    <button class="w-100 btn btn-sm py-2 btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted text-center">Meesaw &copy; {{date('d-M-Y')}}</p>
  </form>
</main>


    
  </body>
</html>
