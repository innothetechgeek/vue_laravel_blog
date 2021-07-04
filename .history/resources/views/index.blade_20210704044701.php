<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Katen - Minimal Blog & Magazine HTML Theme</title>
        <meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

        <!-- STYLES -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" media="all">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" type="text/css" media="all">
        <link rel="stylesheet" href="{{ asset('css/slick.css') }}" type="text/css" media="all">
        <link rel="stylesheet" href="{{ asset('css/simple-line-icons.css') }}" type="text/css" media="all">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all">
    </head>
    <body class="antialiased">

        <div id="app">
            
        </div>
        <!-- JAVA SCRIPTS -->
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
