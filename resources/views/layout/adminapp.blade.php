<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Rssosa ADMIN DASHBOARD HOMEPAGE" name="description" />
    <meta content="Rssosa" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assetsadmin/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assetsadmin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assetsadmin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assetsadmin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="{{ url('admin/') }}" class="logo logo-dark">
                            <span class="logo-sm">
                                <h3 class="text-white">RSSOSA</h3>
                            </span>
                            <span class="logo-lg">
                                <h3 class="text-white" style="padding-top: 20px;">RSSOSA</h3>
                            </span>
                        </a>

                        <a href="{{ url('admin/') }}" class="logo logo-light">
                            <span class="logo-sm">
                                <h3 class="text-white pt-20">RSSOSA</h3>
                            </span>
                            <span class="logo-lg">
                                <h3 class="text-white" style="padding-top: 20px;">RSSOSA</h3>
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>


                    <div class="d-flex">

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="../assetsadmin/images/users/avatar-1.jpg" alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ Auth::user()->profile->first()->fname }}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="{{ url('logout') }}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </div>
                        </div>

                    </div>
                </div>
        </header>
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">Menu</li>

                        <li>
                            <a href="{{ url('admin/') }}">
                                <i class="bx bx-home-circle"></i>
                                <span key="t-dashboards">Dashboard</span>
                            </a>

                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-detail"></i>
                                <span key="t-blog">Blog</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ url('admin/blog-category') }}" key="t-blog-details">Category</a></li>
                                <li><a href="{{ url('admin/blog') }}" key="t-blog-grid">All Post</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fa fa-tasks"></i>
                                <span key="t-ecommerce">Application</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ url('admin/jobs') }}" key="t-products">Jobs</a></li>
                                <li><a href="{{ url('admin/scholarship') }}" key="t-add-product">Schorlarship</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fas fa-vote-yea"></i>
                                <span key="t-contacts">Vote</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">

                                <li><a href="{{ url('admin/national-voting') }}" key="t-user-list">National Voting</a></li>
                                <li><a href="{{ url('admin/batch-voting') }}" key="t-profile">Class Set Voting</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fas fa-file-image"></i>
                                <span key="t-blog">Gallery</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ url('admin/gallery-category') }}" key="t-blog-details">Category</a></li>
                                <li><a href="{{ url('admin/gallery') }}" key="t-blog-grid">Gallery</a></li>
                                <li><a href="{{ url('admin/project') }}" key="t-blog-grid">Projects Done</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('admin/members') }}">
                                <i class="bx bxs-user-detail"></i>
                                <span key="t-contacts">Members List</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('admin/product') }}">
                                <i class="bx bx-store"></i>
                                <span key="t-ecommerce">Products</span>
                            </a>

                        </li>

                        <li>
                            <a href="{{ url('admin/event') }}">
                                <i class="bx bx-calendar"></i>
                                <span key="t-dashboards">Event</span>
                            </a>

                        </li>

                        <li>
                            <a href="{{ url('admin/forum') }}">
                                <i class="bx bx-chat"></i>
                                <span key="t-chat">Forum</span>
                            </a>

                        </li>
                        <li>
                            <a href="{{ url('admin/dues') }}">
                                <i class="fa fa-credit-card"></i>
                                <span key="t-contacts">Dues </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/notice-board') }}">
                                <i class="fas fa-chalkboard"></i>
                                <span key="t-contacts">Notice Board </span>
                            </a>
                        </li>

                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        @yield('content')
    </div>

    </div>
    <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assetsadmin/libs/jquery/jquery.min.js"></script>
    <script src="assetsadmin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assetsadmin/libs/metismenu/metisMenu.min.js"></script>
    <script src="assetsadmin/libs/simplebar/simplebar.min.js"></script>
    <script src="assetsadmin/libs/node-waves/waves.min.js"></script>

    <!-- apexcharts -->
    <script src="assetsadmin/libs/apexcharts/apexcharts.min.js"></script>

    <!-- dashboard init -->
    <script src="assetsadmin/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="assetsadmin/js/app.js"></script>
</body>


</html>