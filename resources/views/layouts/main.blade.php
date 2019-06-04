<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Mīlulis</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/app.css') }}">
        <script src="{{ secure_asset('js/app.js') }}"></script>
    </head>
    <body class="{{ Route::currentRouteName() != 'home' ? 'subpage' : '' }}">
        @include('layouts.partials.header')
        <div class="container-fluid p-0">
            @yield('content')
        </div>
        @include('layouts.partials.footer')
    </body>
</html>
