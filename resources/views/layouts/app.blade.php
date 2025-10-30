<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title', 'SUNFEST - World Festival')</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    
    {{-- SEMUA CSS MENGGUNAKAN asset() DENGAN PATH DARI FOLDER PUBLIC --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>

<body>
    <header class="site-header">
        <div class="header-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-10 col-lg-4">
                        <h1 class="site-branding flex">
                            <a href="#">Admixe</a>
                        </h1>
                    </div>
                    <div class="col-2 col-lg-8">
                        <nav class="site-navigation">
                            <div class="hamburger-menu d-lg-none">
                                <span></span><span></span><span></span><span></span>
                            </div>
                            <ul>
                                <li><a href="#">HOME</a></li>
                                <li><a href="#">Admixe 2018</a></li>
                                <li><a href="#">ARTISTS</a></li>
                                <li><a href="#">BLOG</a></li>
                                <li><a href="#">CONTACT</a></li>
                                <li><a href="#"><i class="fas fa-search"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content') 

    <footer class="site-footer">
        <div class="footer-cover-title flex justify-content-center align-items-center">
            <h2>SUNFEST</h2>
        </div>
        <div class="footer-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="entry-title">
                            <a href="#">Admixe</a>
                        </div>
                        <div class="entry-mail">
                            <a href="#">SAYHELLO@SUNFEST.COM</a>
                        </div>
                        <div class="copyright-info">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </div>
                        <div class="footer-social">
                            <ul class="flex justify-content-center align-items-center">
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    {{-- SEMUA JAVASCRIPT MENGGUNAKAN asset() DENGAN PATH DARI FOLDER PUBLIC/js --}}
    <script type='text/javascript' src='{{ asset("js/jquery.js") }}'></script>
    <script type='text/javascript' src='{{ asset("js/masonry.pkgd.min.js") }}'></script>
    <script type='text/javascript' src='{{ asset("js/jquery.collapsible.min.js") }}'></script>
    <script type='text/javascript' src='{{ asset("js/swiper.min.js") }}'></script>
    <script type='text/javascript' src='{{ asset("js/jquery.countdown.min.js") }}'></script>
    <script type='text/javascript' src='{{ asset("js/circle-progress.min.js") }}'></script>
    <script type='text/javascript' src='{{ asset("js/jquery.countTo.min.js") }}'></script>
    <script type='text/javascript' src='{{ asset("js/custom.js") }}'></script>
</body>
</html>