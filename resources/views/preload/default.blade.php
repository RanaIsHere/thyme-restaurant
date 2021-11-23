<!DOCTYPE html>
<html data-theme="forest" lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/global.css') }}">
        <title>The Thyme Restaurant</title>
    </head>
    <body>
        <div class="section">
            @yield('container')
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/landing.js') }}"></script>
        <script src="{{ asset('js/systems.js') }}"></script>
    </body>
</html>