<html>
    <head>
        <title>no name - @yield('title')</title>
        <link rel="stylesheet" href="{{ url('/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
    <script src="{{ url('/js/bootstrap.js') }}"></script>
    @yield('js')
</html>