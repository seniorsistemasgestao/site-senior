<!doctype html>
<!--
 Solution by GetTemplates.co
 URL: https://gettemplates.co
-->
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- awesone fonts css-->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <!-- owl carousel css-->
    <link rel="stylesheet" href="{{ asset('owl-carousel/assets/owl.carousel.min.css') }}" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title> @yield('title')

    </title>
    <style>

    </style>
</head>

<body>

    @include('Tamplate.nav')

    @yield('content')

    @include('Tamplate.footer')

    @stack('javascript')
    <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- owl carousel js-->
    <script src="{{ asset('owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
