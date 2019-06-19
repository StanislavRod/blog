<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>Sinju Blogging Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/ico" href="{{asset('images/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('css/app.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7CPlayfair+Display:400,700"
          rel="stylesheet">
    @stack('header-css')
    @stack('header-js')
</head>
<body>
<!-- ==================== PRELOADER HERE ===================================== -->
<div class="overlay-loader">
    <div class="preloader">
        <div class="lines">
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>
        </div>
        <div class="loading-text">LOADING</div>
    </div>
</div>
<!-- ==================== PRELOADER END ===================================== -->
@include('partials.header')
<!-- =================== START MAIN CONTENT AREA HERE ========================-->
<main class="main-content-area section-padding-bottom">
    <div id="app">
        @yield('content')
    </div>
</main>
<!-- ======================== END MAIN CONTENT AREA HERE ========================-->
@include('partials.footer')

<!-- ====================ALL JS FILE HERE===================================== -->
<script src="{{asset('js/build.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
@stack('footer-js')
@stack('footer-css')
</body>
</html>