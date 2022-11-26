<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meesaw-@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body class="d-flex text-bg-dark">

      <div class="d-flex w-100 h-100 p-3 mx-auto flex-column">

      <header class="row fixed-top text-bg-dark py-3">
        <div class="col-sm-8 mx-auto">
          <h3 class="float-md-start text-center mb-0">Cover</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link fw-bold py-1 px-0 {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
            <a class="nav-link fw-bold py-1 px-0 {{ Request::is('features') ? 'active' : '' }}" href="#">Features</a>
            <a class="nav-link fw-bold py-1 px-0 {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
            <a class="nav-link fw-bold py-1 px-0 {{ Request::is('blog') ? 'active' : '' }}" href="/blog">Blog</a>
            @if(Auth::check())
            <a class="nav-link fw-bold py-1 px-0" href="/logout">Logout</a>
            @else
            <a class="nav-link fw-bold py-1 px-0 {{ Request::is('signin') ? 'active' : '' }}" href="/signin">Sign In</a>
            @endif
          </nav>
        </div>
      </header>

    <div class="row py-5">
      <div class="col-sm-8 mx-auto">
        @yield('content')
      </div>
    </div>

    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>