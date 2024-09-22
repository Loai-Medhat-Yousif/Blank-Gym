<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gym | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("assets/css/font-awesome.min.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("assets/css/flaticon.css")}} " type="text/css">
    <link rel="stylesheet" href="{{asset("assets/css/owl.carousel.min.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("assets/css/barfiller.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("assets/css/magnific-popup.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("assets/css/slicknav.min.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}" type="text/css">
     <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    @yield('styles')
</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Section Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
        <i class="fa fa-close"></i>
    </div>
    <div class="canvas-search search-switch">
        <i class="fa fa-search"></i>
    </div>
    <nav class="canvas-menu mobile-menu">
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('about')}}">About Us</a></li>
            <li><a href="{{route('class.index')}}">Classes</a></li>
            <li><a href="{{route('service.index')}}">Services</a></li>
            <li><a href="{{route('trainers.index')}}">Our Team</a></li>

            <li><a href="./contact.html">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="canvas-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube-play"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
</div>
<!-- Offcanvas Menu Section End -->

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset('assets/img/logo.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="nav-menu">
                    <ul>
                        <li class="active"><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('class.index')}}">Classes</a></li>
                        <li><a href="{{route('service.index')}}">Services</a></li>
                        <li><a href="{{route('trainers.index')}}">Our Team</a></li>

                        <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="top-option">
                    <div class="to-search search-switch">
                        <i class="fa fa-search"></i>
                    </div>
                    <div class="to-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="canvas-open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header End -->
