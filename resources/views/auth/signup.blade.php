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

.form-signup {
  max-width: 330px;
  padding: 15px;
}

.form-signup .form-floating:focus-within {
  z-index: 2;
}

.form-signup input[type="text"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signup input[type="email"] {
  margin-bottom: -1px;
  border-radius: 0;
}

.form-signup input[type="password"] {
  border-radius: 0;
}
.form-signup input#cpassword {
    border-radius: 0px 0px 5px 5px;
}

    </style>
  </head>
  <body class="bg-dark">
    
<main class="form-signup w-100 m-auto">
            <form action="/signup" method="POST" class="needs-validation" novalidate>
                @csrf
                <center>
                  <a href="/">
                    <img class="mb-4" src="/logo.png" alt="n--img" width="110" height="80">
                  </a>
                </center>

                <h1 class="h3 mb-3 fw-normal text-white">Sign Up</h1>
                    <div class="form-floating">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" required>
                        <label for="name">Name</label>
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required>
                        <label for="email">Email</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password_confirmation" id="cpassword" class="form-control @error('password_confirmation') is-invalid @enderror" id="cpassword" placeholder="Confirm Password" required>
                        <label for="password_confirmation">Confirm Password</label>
                        @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <p class="text-left text-muted small p-0 m-0 my-2">
                        If you already have account?<a href="/signin" class="ps-2">Sign in</a>
                    </p>
                    <button class="w-100 btn btn-sm py-2 btn-primary" type="submit">Sign Up</button>
            </form>
        </main>
    
    </body>
  </html>
  