<html lang="pt-BR">
    <head>
        <title>Sistema de Tickets</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Laravel Stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Bootstrap Stylesheets -->
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap/dist/css/bootstrap.min.css') }}">

        <!-- Personal Stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        @include('layouts.top-navbar')
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    @include('layouts.left-navbar')
                </div>

                <div class="col-lg-9">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>

    <!-- Laravel Script -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Bootstrap Scripts -->
    <script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Fontawesome Script -->
    <script src="{{ asset('plugins/fontawesome/svg-with-js/js/fontawesome-all.min.js') }}"></script>
</html>