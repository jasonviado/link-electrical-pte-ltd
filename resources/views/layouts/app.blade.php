<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Feels Like Home - @yield('title')</title>
    <link rel="stylesheet" href="css/bootstrap/1/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/fontawesome/1/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/navbar-fixed-right.min.css">
    <link rel="stylesheet" href="css/navbar-fixed-left.min.css">
    <link rel="stylesheet" href="css/styles.css">
    @stack('styles')
    <script src="js/jquery/1/jquery-3.2.1.slim.min.js"></script>
    <script src="js/bootstrap/1/bootstrap.js"></script>
    <script src="js/scripts.js"></script>
    <script async defer src="js/buttons/1/buttons.js"></script>
    @stack('scripts')
</head>

<body>

    @include('components.sidemenu')

    @yield('content')

</body>
</html>
