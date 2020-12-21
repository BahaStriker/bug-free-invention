<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="TechyDevs" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Bitcon - Bitcoin HTML5 Template</title>

    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" />

    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,500,600,700,800&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body>
    @include('partials.loader')
    @include('partials.header')
    @yield('content')
    @include('partials.footer')

    <div id="back-to-top">
        <i class="fas fa-angle-up" title="Go top"></i>
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoint.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/smooth-scrolling.js') }}"></script>
    <script src="{{ asset('assets/js/calculate-script.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
