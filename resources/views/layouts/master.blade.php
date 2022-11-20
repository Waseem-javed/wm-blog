<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meesaw-@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>

<body>
    <div class="container-fluid bg-light fixed-top row justify-content-around m-0 border-bottom">
        <nav class="navbar navbar-expand-sm bg-light navbar-white col-sm-8">
            <a class="navbar-brand text-primary fw-semibold" href="/">Meesaw</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav me-auto">
                    <a class="nav-item nav-link text-primary fw-normal" href="/blog">Blog</a>
                </ul>
                <ul class="navbar-nav">
                    <a class="nav-item nav-link text-primary fw-semibold" href="/signin">Sign in</a>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid mt-5 pt-2">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>