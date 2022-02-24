<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <!-- <title>{{ config('app.name', 'Laravel') }}</title>Token -->

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{asset('js/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}" defer></script>
    <script src="{{ asset('js/assets/vendor/glightbox/js/glightbox.min.js') }}" defer></script>
    <script src="{{ asset('js/assets/vendor/php-email-form/validate.js') }}" defer></script>
    <script src="{{asset('js/assets/vendor/purecounter/purecounter.js')}}" defer></script>
    <script src="{{asset('js/assets/vendor/swiper/swiper-bundle.min.js')}}" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="{{ asset('js/prom.js') }}" defer></script>

    <!-- Template Main JS File -->
    <script src="{{asset('js/assets/main.js')}}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="http://www.mundoradiologico.com/wp-content/uploads/2017/11/LogoWeb-50x50.png">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{asset('css/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/style.css')}}"rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
        <main class="py-4">
            @yield('content')
        </main>

</body>
</html>

