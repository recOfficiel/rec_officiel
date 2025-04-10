<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

         <!-- Libraries Stylesheet -->
        <link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{ asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style.css')}}" rel="stylesheet">

        <!-- Favicon -->
        <link href="{{ asset('img/LOGO.png')}}" rel="icon">

        <title> {{ config('app.name')}} | @yield('title') </title>

    </head>
    <body>
        {{--<x-spinner /> --}}
        <x-spinner />

        {{-- <x-navbar /> --}}
        <x-navbar />

                @yield('content')

        {{-- footer --}}
        <x-footer/>

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('lib/wow/wow.min.js')}}"></script>
        <script src="{{ asset('lib/easing/easing.min.js')}}"></script>
        <script src="{{ asset('lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('lib/lightbox/js/lightbox.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('js/main.js')}}"></script>
    </body>
</html>
