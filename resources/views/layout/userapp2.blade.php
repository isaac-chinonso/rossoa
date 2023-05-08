<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <!-- Link Of CSS -->
    <link rel="stylesheet" href="../assetsuser/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assetsuser/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assetsuser/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assetsuser/css/animate.min.css">
    <link rel="stylesheet" href="../assetsuser/css/remixicon.css">
    <link rel="stylesheet" href="../assetsuser/css/boxicons.min.css">
    <link rel="stylesheet" href="../assetsuser/css/iconsax.css">
    <link rel="stylesheet" href="../assetsuser/css/metismenu.min.css">
    <link rel="stylesheet" href="../assetsuser/css/simplebar.min.css">
    <link rel="stylesheet" href="../assetsuser/css/calendar.css">
    <link rel="stylesheet" href="../assetsuser/css/sweetalert2.min.css">
    <link rel="stylesheet" href="../assetsuser/css/jbox.all.min.css">
    <link rel="stylesheet" href="../assetsuser/css/editor.css">
    <link rel="stylesheet" href="../assetsuser/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assetsuser/css/loaders.css">
    <link rel="stylesheet" href="../assetsuser/css/header.css">
    <link rel="stylesheet" href="../assetsuser/css/sidebar-menu.css">
    <link rel="stylesheet" href="../assetsuser/css/footer.css">
    <link rel="stylesheet" href="../assetsuser/css/style.css">
    <link rel="stylesheet" href="../assetsuser/css/responsive.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../assetsuser/images/favicon.svg">
    <!-- Title -->
    <title>@yield('title')</title>
</head>

<body class="body-bg-f8faff">
    <!-- Start Preloader Area -->
    <div class="preloader">
        <img src="../assetsuser/images/main-logo.svg" alt="main-logo">
    </div>
    <!-- End Preloader Area -->

    <!-- Start All Section Area -->
    <div class="all-section-area">
        <!-- Start Header Area -->
        <div class="header-area header-style-three">
            <div class="container-fluid">
                <div class="header-content-wrapper">
                    <div class="header-content d-flex justify-content-between align-items-center">
                        <div class="header-left-content d-flex">
                            <div class="responsive-burger-menu d-block d-lg-none">
                                <span class="top-bar"></span>
                                <span class="middle-bar"></span>
                                <span class="bottom-bar"></span>
                            </div>

                            <div class="main-logo">
                                <a href="#">
                                    <h3 class="text-white">RSSOSA</h3>
                                </a>
                            </div>
                        </div>

                        <div class="header-right-content d-flex align-items-center">
                            <div class="header-right-option">
                                <a href="#" class="dropdown-item fullscreen-btn" id="fullscreen-button">
                                    <img src="../assetsuser/images/icon/maximize.svg" alt="maximize">
                                </a>
                            </div>

                            <div class="header-right-option dropdown profile-nav-item pt-0 pb-0">
                                <a class="dropdown-item dropdown-toggle avatar d-flex align-items-center" href="#" id="navbarDropdown-4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../assetsuser/images/avatar/profile.jpg" alt="avatar">
                                    <div class="d-none d-lg-block d-md-block">
                                        <h3>{{ Auth::user()->profile->first()->fname }}</h3>
                                        <span>User</span>
                                    </div>
                                </a>

                                <div class="dropdown-menu">

                                    <div class="dropdown-footer">
                                        <ul class="profile-nav">
                                            <li class="nav-item">
                                                <a href="{{ url('logout' )}}" class="nav-link">
                                                    <i class="ri-login-circle-line"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Area -->
        <!-- Start Sidebar Area -->
        <nav class="side-menu-area style-two">
            <nav class="sidebar-nav" data-simplebar>
                <ul id="sidebar-menu" class="sidebar-menu">
                    <li>
                        <a href="{{ url('/') }}" class="box-style d-flex align-items-center">
                            <div class="icon">
                                <span class="bx bx-home text-dark" style="font-size: 30px;padding-top:9px;"></span>
                            </div>
                            <span class="menu-title">Main website</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </nav>
        <!-- End Sidebar Area -->


        @yield('content')

        <!-- Start Footer Area -->
        <div class="footer-area">
            <div class="container-fluid">
                <div class="footer-content">
                    <p>© RSSOSA Powered by <a href="https://donereadydigitals.com/" target="_blank">DoneReady Digital</a></p>
                </div>
            </div>
        </div>
        <!-- End Footer Area -->
        </main>
        <!-- End Main Content Area -->
    </div>
    <!-- End All Section Area -->


    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="ri-arrow-up-s-fill"></i>
        <i class="ri-arrow-up-s-fill"></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Jquery Min JS -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../assetsuser/js/jquery.min.js"></script>
    <script src="../assetsuser/js/bootstrap.bundle.min.js"></script>
    <script src="../assetsuser/js/owl.carousel.min.js"></script>
    <script src="../assetsuser/js/metismenu.min.js"></script>
    <script src="../assetsuser/js/simplebar.min.js"></script>
    <script src="../assetsuser/js/apexcharts/apexcharts.min.js"></script>
    <script src="../assetsuser/js/apexcharts/tutor-lms.js"></script>
    <script src="../assetsuser/js/geticons.js"></script>
    <script src="../assetsuser/js/calendar.js"></script>
    <script src="../assetsuser/js/calendar.min.js"></script>
    <script src="../assetsuser/js/editor.js"></script>
    <script src="../assetsuser/js/form-validator.min.js"></script>
    <script src="../assetsuser/js/contact-form-script.js"></script>
    <script src="../assetsuser/js/ajaxchimp.min.js"></script>
    <script src="../assetsuser/js/custom.js"></script>
</body>

</html>