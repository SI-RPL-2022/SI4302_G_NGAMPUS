<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ngampus | {{ $title }} </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('Logo/logo.png')}}" rel="icon">
    <link href="{{asset('Logo/logo.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    
    <link href="{{asset('Template/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('Template/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('Template/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('Template/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('Template/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('Template/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('Template/css/style.css')}}" rel="stylesheet">
    

    <!-- =======================================================
    * Template Name: Ninestars - v4.7.0
    * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    </head>

    <body>
    @include('partials.navbar') 
    
    <div class="container mt-5 pt-5">
        @yield('content')
    </div>

    @include('partials.footer')

    