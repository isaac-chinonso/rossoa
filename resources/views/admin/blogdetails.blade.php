<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>{{ $blogdetails->title }}</title>
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $blogdetails->short_desc }}">
    <meta name="keywords" content="Digital, Media, Creative, Agency">
    <meta name="author" content="DoneReady">

    <meta property="og:url" content="https://www.donreadydigital.com/{{ $blogdetails->title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $blogdetails->title }}" />
    <meta property="og:description" content="Digital, Media, Creative, Agency" />
    <meta property="og:image" content="https://donereadydigital.com/assets/images/logo-dark.png" />

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/fav.png">
    <link itemprop="image" href="../assets/images/fav.png" />
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="../assets/fonts/flaticon.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/owl.carousel.css">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/off-canvas.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/magnific-popup.css">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="../assets/css/rsmenu-main.css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/rs-spacing.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <script src="//code.tidio.co/gnbej2b5qdduk5ifqynjrdvogqehidly.js" async></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HY9EB8T0C0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HY9EB8T0C0');
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7181223875010351" crossorigin="anonymous"></script>
    <style>
        #social-links li {
            display: inline-block;
            padding: 4px;
            text-align: center;
            list-style: none;
        }

    </style>
</head>

<body class="defult-home">

    <!-- Main content Start -->
    <div class="main-content">

        <!--Full width header Start-->
        <div class="full-width-header">
            <!--Header Start-->
            <header id="rs-header" class="rs-header style2">
                <!-- Topbar Area Start -->
                <div class="topbar-area style2">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-lg-8">
                                <ul class="topbar-contact">
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <a href="mailto:wecare@donereadydigital.com">wecare@donereadydigital.com</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-call"></i>
                                        <a href="tel:+2349020356786"> +2349020356786</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-location"></i>108 GRA road, Sabo Sagamu
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4 text-right">
                                <div class="toolbar-sl-share">
                                    <ul>
                                        <li class="opening"> <em><i class="flaticon-clock"></i>8˸00-18˸00</em> </li>
                                        <li><a href="https://www.facebook.com/donereadyhub"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.linkedin.com/company/doneready-digital-media-solutions/"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="https://instagram.com/donereadyhub?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="https://twitter.com/donereadyhub?t=NgXkSunjEMTYvO3VvFjXhw&s=09"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Topbar Area End -->
                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="logo-part">
                                    <a href="{{ url('/') }}"><img src="../assets/images/logo-dark.png" alt=""></a>
                                </div>
                                <div class="mobile-menu">
                                    <a href="#" class="rs-menu-toggle rs-menu-toggle-close secondary">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-9 text-right">
                                <div class="rs-menu-area">
                                    <div class="main-menu">
                                        <nav class="rs-menu pr-100 md-pr-0">
                                            <ul id="onepage-menu" class="nav-menu">
                                                <li> <a href="{{ url('/') }}">Home</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">About us</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ url('about') }}">Who we are</a> </li>
                                                        <li><a href="{{ url('about') }}#rs-team">Our Team</a> </li>
                                                        <li><a href="{{ url('jobs') }}">jobs</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ url('services') }}">Services</a></li>
                                                <li><a href="{{ url('academic') }}">Academy</a></li>
                                                <li><a href="{{ url('/') }}#rs-portfolio">Our Works</a></li>
                                                <li><a href="{{ url('blog') }}">Blog</a></li>
                                            </ul>
                                            <!-- //.nav-menu -->
                                        </nav>
                                    </div>
                                    <!-- //.main-menu -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->
            </header>
            <!--Header End-->
            <!-- Canvas Menu start -->
            <nav class="right_menu_togle hidden-md">
                <div class="close-btn"><span id="nav-close" class="text-center"><i class="fa fa-close"></i></span></div>
                <div class="canvas-logo">
                    <a href="{{ url('/') }}"><img src="../assets/images/logo-dark.png" alt="logo"></a>
                </div>
                <div class="offcanvas-text">
                    <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making it look like readable English.</p>
                </div>
                <div class="canvas-contact">
                    <h5 class="canvas-contact-title">Contact Info</h5>
                    <ul class="contact">
                        <li><i class="fa fa-globe"></i>108 GRA road, Sabo Sagamu.</li>
                        <li><i class="fa fa-phone"></i>+234 902 0356 786</li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:wecare@donereadydigital.com">wecare@donereadydigital.com</a></li>
                        <li><i class="fa fa-clock-o"></i>8:00 AM - 6:00 PM</li>
                    </ul>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/donereadyhub" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/donereadyhub?t=NgXkSunjEMTYvO3VvFjXhw&s=09" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/doneready-digital-media-solutions/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://instagram.com/donereadyhub?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </nav>
            <!-- Canvas Menu end -->
        </div>
        <!--Full width header End-->

        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img11111">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">{{ $blogdetails->title }}</h1>
                <ul>
                    <li>
                        <a class="active" href="#">Home</a>
                    </li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Blog Section Start -->
        <div class="rs-inner-blog pt-120 pb-120 md-pt-90 md-pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 order-last">
                        <div class="widget-area">
                            <div class="recent-posts mb-50">
                                <div class="widget-title">
                                    <h3 class="title">Latest Posts</h3>
                                </div>
                                @foreach($blogpost as $blog)
                                <div class="recent-post-widget">
                                    <div class="post-img">
                                        <a href="{{ route('blogdetails', $blog->slug) }}"><img src="../{{ $blog->blog_image }}" alt=""></a>
                                    </div>
                                    <div class="post-desc">
                                        <a href="{{ route('blogdetails', $blog->slug) }}">{{ $blog->title }} </a>
                                        <span class="date">
                                            <i class="fa fa-calendar"></i>
                                            {{ $blog->created_at->format('d M Y ') }}
                                        </span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="categories mb-50">
                                <div class="widget-title">
                                    <h3 class="title">Categories</h3>
                                </div>
                                <ul>
                                    @foreach($categories as $cat)
                                    <li><a href="#">{{ $cat->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 md-pr-15">
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-details">
                                    <div class="bs-img mb-35">
                                        <a href="#"><img src="../{{ $blogdetails->blog_image }}" alt=""></a>
                                    </div>
                                    <div class="blog-full">
                                        <ul class="single-post-meta">
                                            <li>
                                                <span class="p-date"><i class="fa fa-calendar-check-o"></i> {{ $blogdetails->created_at->format('d M Y ') }} </span>
                                            </li>
                                            <li>
                                                <span class="p-date"> <i class="fa fa-user-o"></i> admin </span>
                                            </li>
                                            <li class="Post-cate">
                                                <div class="tag-line">
                                                    <i class="fa fa-book"></i>
                                                    <a href="#">{{ $blogdetails->category->name }}</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <h2>{{ $blogdetails->title }}</h2>
                                        <h6>{{ $blogdetails->short_desc }}</h6>
                                        <p style="text-align: justify;">
                                            {!! $blogdetails->long_desc !!}
                                        </p>

                                        <h4 align="right">Share Post: {!! Share::page(url('/blog-post/'. $blogdetails->slug))->facebook()->twitter()->whatsapp()->linkedin() !!}</h4>

                                        <h3 class="comment-title">Comments</h3>
                                        @foreach($comment as $com)
                                        <div class="comment-body">
                                            <div class="rstheme-logo">
                                                <img src="../assets/images/rstheme.png" alt="">
                                            </div>
                                            <div class="comment-meta">
                                                <span><a href="#">{{ $com->name }}</a></span>
                                                <a href="#">{{ $com->created_at->format('d M Y ') }}</a>
                                                <p class="mb-15">
                                                    {{ $com->comments }}
                                                </p>
                                            </div>
                                        </div>
                                        @endforeach
                                        @include('include.success')
                                        @include('include.warning')
                                        @include('include.error')
                                        <h3 class="comment-title">Leave a Reply</h3>
                                        <p>Your email address will not be published. Required fields are marked *</p>
                                        <div class="comment-note">
                                            <form method="POST" action="{{ url('/save-blog-comments') }}">
                                                @csrf
                                                <input type="text" name="blog_id" value="{{ $blogdetails->id }}" hidden="hidden">
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                            <input class="from-control" type="text" id="name" name="name" placeholder="Name*" required="">
                                                        </div>
                                                        <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                            <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail*" required="">
                                                        </div>
                                                        <div class="col-lg-12 mb-30">
                                                            <textarea class="from-control" id="message" name="comments" placeholder="Your message Here" required=""></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="btn-part">
                                                        <button type="submit" class="readon learn-more post">Post Comment</button>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section End -->

    </div>
    <!-- Main content End -->

    <!-- Footer Start -->
    <footer id="rs-footer" class="rs-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
                        <h3 class="widget-title">Quick Link</h3>
                        <ul class="site-map">
                            <li><a href="{{ url('jobs') }}">Jobs</a></li>
                            <li><a href="{{ url('intership-application-form') }}">Internship</a></li>
                            <li><a href="{{ url('services') }}">Services</a></li>
                            <li><a href="{{ url('academic') }}">Academy</a></li>
                        </ul>
                        <ul class="footer-social md-mb-30">
                            <li>
                                <a href="https://www.facebook.com/donereadyhub" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/donereadyhub?t=NgXkSunjEMTYvO3VvFjXhw&s=09" target="_blank"><span><i class="fa fa-twitter"></i></span></a>
                            </li>

                            <li>
                                <a href="https://www.linkedin.com/company/doneready-digital-media-solutions/" target="_blank"><span><i class="fa fa-linkedin"></i></span></a>
                            </li>
                            <li>
                                <a href="https://instagram.com/donereadyhub?igshid=YmMyMTA2M2Y=" target="_blank"><span><i class="fa fa-instagram"></i></span></a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 md-mb-30">
                        <h3 class="widget-title">Contact Info</h3>
                        <ul class="address-widget">
                            <li>
                                <i class="flaticon-location"></i>
                                <div class="desc">108 GRA road, Sabo Sagamu.</div>
                            </li>
                            <li>
                                <i class="flaticon-call"></i>
                                <div class="desc">
                                    <a href="#"> +2349020356786; +2348145659883 </a>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-email"></i>
                                <div class="desc">
                                    <a href="mailto:wecare@donereadydigital.com">wecare@donereadydigital.com </a>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-clock-1"></i>
                                <div class="desc">
                                    Opening Hours: 8˸00-18˸00
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <h3 class="widget-title">Newsletter</h3>
                        <p class="widget-desc">Get updates on how to grow your business by subscribing to our newsletter</p>
                        <p>
                            <input type="email" name="EMAIL" placeholder="Your email address" required="">
                            <em class="paper-plane"><input type="submit" value="Sign up"></em>
                            <i class="flaticon-send"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="copyright text-center">
                            <p>Powered By <a href="#">DoneReady Digital</a></p>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- start scrollUp  -->
    <div id="scrollUp" class="orange-color">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->

    
    <!-- modernizr js -->
    <script src="../assets/js/modernizr-2.8.3.min.js"></script>
    <!-- jquery latest version -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="{{ asset('js/share.js') }}"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Menu js -->
    <script src="../assets/js/rsmenu-main.js"></script>
    <!-- op nav js -->
    <script src="../assets/js/jquery.nav.js"></script>
    <!-- owl.carousel js -->
    <script src="../assets/js/owl.carousel.min.js"></script>
    <!-- wow js -->
    <script src="../assets/js/wow.min.js"></script>
    <!-- Skill bar js -->
    <script src="../assets/js/skill.bars.jquery.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <!-- counter top js -->
    <script src="../assets/js/waypoints.min.js"></script>
    <!-- swiper js -->
    <script src="../assets/js/swiper.min.js"></script>
    <!-- particles js -->
    <script src="../assets/js/particles.min.js"></script>
    <!-- magnific popup js -->
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <!-- plugins js -->
    <script src="../assets/js/plugins.js"></script>
    <!-- pointer js -->
    <script src="../assets/js/pointer.js"></script>
    <!-- contact form js -->
    <script src="../assets/js/contact.form.js"></script>
    <!-- main js -->
    <script src="../assets/js/main.js"></script>
</body>

</html>