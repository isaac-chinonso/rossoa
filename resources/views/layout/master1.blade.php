<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title')</title>

    <meta name="description" content="Promoting the spirit of fellowship, mutual love, and cooperation among all members." />
    <meta name="keywords" content="Remo Secondary School" />
    <meta name="author" content="Rssosa" />
    <meta name="image" content="assets/img/favicon.png">

    <!-- twitter card starts from here, if you don't need remove this section -->
    <meta name="twitter:card" content="Promoting the spirit of fellowship, mutual love, and cooperation among all members." />
    <meta name="twitter:site" content="Rssosa" />
    <meta name="twitter:creator" content="Rssosa" />
    <meta name="twitter:url" content="http://twitter.com/" />
    <meta name="twitter:title" content="Remo Secondary School" />
    <meta name="twitter:image" content="assets/img/favicon.png">
    <!-- maximum 140 char -->
    <meta name="twitter:description" content="Promoting the spirit of fellowship, mutual love, and cooperation among all members. " />

    <!-- icons & favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon/favicon.png" />
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.png" />
    <link rel="manifest" href="assets/img/favicon/manifest.json">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <link rel="manifest" href="../assets/img/favicon/manifest.json">

    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet" />

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/vendor/navbar/bootstrap-4-navbar.css" />

    <!--Animate css -->
    <link rel="stylesheet" href="../assets/vendor/animate/animate.css" media="all" />

    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="../assets/vendor/fontawesome/css/font-awesome.min.css" />

    <!--owl carousel css -->
    <link rel="stylesheet" href="../assets/vendor/owl-carousel/owl.carousel.css" media="all" />

    <!--Magnific Popup css -->
    <link rel="stylesheet" href="../assets/vendor/magnific/magnific-popup.css" media="all" />

    <!--Nice Select css -->
    <link rel="stylesheet" href="../assets/vendor/nice-select/nice-select.css" media="all" />

    <!--Offcanvas css -->
    <link rel="stylesheet" href="../assets/vendor/js-offcanvas/css/js-offcanvas.css" media="all" />

    <!-- MODERNIZER  -->
    <script src="../assets/vendor/modernizr/modernizr-custom.js"></script>

    <!-- Main Master Style  CSS  -->
    <link id="cbx-style" data-layout="1" rel="stylesheet" href="../assets/css/style-default.min.css" media="all" />
    <link rel="stylesheet" href="../assets/css/style.min.css">
</head>

<body>

    <!--== Header Area Start ==-->
    <header id="header-area">
        <div class="preheader-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-7 col-7">
                        <div class="preheader-left">
                            <a href="mailto:info@rssosa.com"><strong>Email:</strong> info@rssosa.com</a>
                            <a href="#"><strong>Hotline:</strong> +2348132693259</a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-5 col-5 text-right">
                        <div class="preheader-right">
                            @if(!Auth::check())
                            <a title="Register" class="btn-auth btn-auth" href="{{ url('login') }}">Login</a>
                            @else
                            <a title="Dashboard" class="btn-auth btn-auth" href="{{ url('user/dashboard') }}">Dashboard</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom-area" id="fixheader">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="main-menu navbar navbar-expand-lg navbar-light">
                            <a class="" href="{{ url('/') }}">
                                <img src="../assets/img/445.png" alt="Logo" />
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menucontent" aria-controls="menucontent" aria-expanded="false">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="menucontent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item {{ request()->is('/*') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                                    <li class="nav-item {{ request()->is('about*') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                                    <li class="nav-item {{ request()->is('events*') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/events') }}">Event</a></li>
                                    <li class="nav-item {{ request()->is('galleries*') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/galleries') }}">Gallery</a></li>
                                    <li class="nav-item {{ request()->is('products*') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/market-place') }}">Market Place</a></li>
                                    <li class="nav-item dropdown {{ request()->is('dues*') ? 'active' : '' }}{{ request()->is('donate*') ? 'active' : '' }}">
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button">Payment</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="nav-link" href="{{ url('/donate') }}">Donate</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ url('/dues') }}">Dues</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown {{ request()->is('committee*') ? 'active' : '' }}{{ request()->is('members-directory*') ? 'active' : '' }}{{ request()->is('career*') ? 'active' : '' }}{{ request()->is('election*') ? 'active' : '' }}{{ request()->is('news*') ? 'active' : '' }}{{ request()->is('contact*') ? 'active' : '' }}">
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="nav-link" href="{{ url('/committee') }}">Meet the Excos</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ url('/members-directory') }}">Database of current members</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ url('/career') }}">Jobs</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ url('/election') }}">Election</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ url('/birthday-celebrants') }}">Celebrants</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ url('/news') }}">Blog News</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                                        </ul>
                                    </li>


                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--== Header Area End ==-->
    @yield('content')

    <!--== Footer Area Start ==-->
    <footer id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget section-padding">
            <div class="container">
                <div class="row">
                    <!-- Single Widget Start -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-widget-wrap">
                            <div class="widgei-body">
                                <div class="footer-about">
                                    <h4 class="widget-title">About RSSOSA</h4>
                                    <p style="text-align: justify;color:#fff;">Remo Secondary School Old Students Association was birthed from Remo Secondary School (The first co-educational school in West Africa). The Association officially came into existence 13 years after the first set of students graduated.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Widget End -->

                    <!-- Single Widget Start -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-widget-wrap">
                            <h4 class="widget-title">Get In Touch</h4>
                            <div class="widgei-body">
                                <a href="#"><i class="fa fa-phone"></i> &nbsp;&nbsp;&nbsp; +2348132693259</a> <br>
                                <a href="#"><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp; info@rssosa.com</a>
                                <div class="footer-social-icons">
                                    <a href="https://www.facebook.com/NationalRssOsa?mibextid=ZbWKwL" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/NationalRssosa?t=-TTxYQlOCY9ejpeu6Mk8Yw&s=09" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="https://instagram.com/nationalrssosa?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Widget End -->

                    <!-- Single Widget Start -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-widget-wrap">
                            <h4 class="widget-title">Useful Link</h4>
                            <div class="widgei-body">
                                <ul class="double-list footer-list clearfix">
                                    <li><a href="{{ url('/career') }}">Jobs</a></li>
                                    <li><a href="{{ url('/about') }}">About us</a></li>
                                    <li><a href="{{ url('/events') }}">Event</a></li>
                                    <li><a href="{{ url('/galleries') }}">gallery</a></li>
                                    <li><a href="{{ url('/news') }}">Blog news</a></li>
                                    <li><a href="{{ url('/contact') }}">Contact us</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Widget End -->

                    <!-- Single Widget Start -->
                    <div class="col-lg-2 col-sm-6">
                        <div class="single-widget-wrap">
                            <h4 class="widget-title">Pages</h4>
                            <div class="widgei-body">
                                <ul class="footer-list clearfix">
                                    <li><a href="{{ url('/committee') }}">Meet the Excos</a></li>
                                    <li><a href="{{ url('/members-directory') }}">Database of current members</a></li>
                                    <li><a href="{{ url('/election') }}">Election</a></li>
                                    <li><a href="{{ url('/donate') }}">Donate</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="footer-bottom-text">
                            <p>© 2022 RSSOSA, All Rights Reserved.</p>
                            <P> by <a href="https://donereadydigital.com" target="_blank"> Doneready Digital</a></P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>
    <!--== Footer Area End ==-->

    <!--== Scroll Top ==-->
    <a href="#" class="scroll-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--== Scroll Top ==-->

    <!-- SITE SCRIPT  -->

    <!-- Jquery JS  -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>

    <!-- POPPER JS -->
    <script src="../assets/vendor/bootstrap/js/popper.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/vendor/navbar/bootstrap-4-navbar.js"></script>

    <!--owl-->
    <script src="../assets/vendor/owl-carousel/owl.carousel.min.js"></script>

    <!--Waypoint-->
    <script src="../assets/vendor/waypoint/waypoints.min.js"></script>

    <!--CounterUp-->
    <script src="../assets/vendor/counterup/jquery.counterup.min.js"></script>

    <!--isotope-->
    <script src="../assets/vendor/isotope/isotope.pkgd.min.js"></script>

    <!--magnific-->
    <script src="../assets/vendor/magnific/jquery.magnific-popup.min.js"></script>

    <!--Smooth Scroll-->
    <script src="../assets/vendor/smooth-scroll/jquery.smooth-scroll.min.js"></script>

    <!--Jquery Easing-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.1.3.min.js"></script>

    <!--Nice Select -->
    <script src="../assets/vendor/nice-select/jquery.nice-select.js"></script>

    <!--Jquery Valadation -->
    <script src="../assets/vendor/validation/jquery.validate.min.js"></script>
    <script src="../assets/vendor/validation/additional-methods.min.js"></script>

    <!--off-canvas js -->
    <script src="../assets/vendor/js-offcanvas/js/js-offcanvas.pkgd.min.js"></script>

    <!-- Countdown -->
    <script src="../assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>

    <!-- custom js: main custom theme js file  -->
    <script src="../assets/js/theme.min.js"></script>

    <!-- custom js: custom js file is added for easy custom js code  -->
    <script src="../assets/js/custom.js"></script>

    <script src="../assets/js/jqueryCustom.js"></script>

</body>

</html>