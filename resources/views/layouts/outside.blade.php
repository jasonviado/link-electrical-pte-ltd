<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Feels Like Home - @yield('title')</title>
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css">-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap/1/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/fontawesome/1/font-awesome.min.css"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/stylesO.css">
    @stack('styles')
    <script src="js/jquery/1/jquery-3.2.1.slim.min.js"></script>
    <script src="js/bootstrap/1/bootstrap.js"></script>
    @stack('scripts')
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="container">
        @include('components.outsideHeader')

        @yield('content')

    </div>
    <footer>
        @include('components.outsideFooter')
    </footer>

</body>
</html>
