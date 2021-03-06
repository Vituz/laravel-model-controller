<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Movies')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="css/app.css">
</head>

<body>

    <!-- header -->
    @include('partials.header')
    <!-- /header -->

    <!-- main -->
    <main id="site_main">
        @yield('content')
    </main>
    <!-- /main -->

    <!-- footer -->
    @include('partials.footer')
    <!-- /footer -->
</body>

</html>