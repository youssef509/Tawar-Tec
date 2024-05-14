<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Aila">
        <meta name="keywords" content="HTML,CSS,JavaScript">
        <meta name="author" content="HiBootstrap">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        @yield('page-title')
        <link rel="icon" href="{{ asset('assets/images/fav.ico')}}" type="image/ico" sizes="16x16">

       <!-- bootstrap css -->
       <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css')}}" type="text/css" media="all" />
       <!-- animate css -->
       <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}" type="text/css" media="all" />
       <!-- owl carousel css -->
       <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}"  type="text/css" media="all" />
       <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}"  type="text/css" media="all" />
       <!-- meanmenu css -->
       <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css')}}" type="text/css" media="all" />
       <!-- magnific popup css -->
       <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css')}}" type="text/css" media="all" />
       <!-- boxicons css -->
       <link rel='stylesheet' href="{{ asset('assets/css/boxicons.min.css')}}" type="text/css" media="all" />
       <!-- flaticon css -->
       <link rel='stylesheet' href="{{ asset('assets/css/flaticon.css')}}" type="text/css" media="all" />
       <!-- style css -->
       <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" type="text/css" media="all" />
       <!-- responsive css -->
       <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}" type="text/css" media="all" />
       <!-- rtl css -->
       <link rel="stylesheet" href="{{ asset('assets/css/rtl.css')}}" type="text/css" media="all" />
       
    </head>

    <body>
       
        <!-- topbar -->
        <div class="topbar bg-white">
            <div class="custom-container-fluid container-fluid">
                <div class="topbar-inner">
                    <div class="topbar-item">
                        <div class="topbar-item-list">
                            <div class="topbar-list-thumb">
                                <i class="flaticon-chat"></i>
                            </div>
                            <div class="topbar-list-content">
                                <a href="#">Chat With A Consultant</a>
                            </div>
                        </div>
                        <div class="topbar-item-list">
                            <div class="topbar-list-thumb">
                                <i class="flaticon-phone"></i>
                            </div>
                            <div class="topbar-list-content">
                                <a href="tel:678-215-7765">+678-215-7765</a>
                            </div>
                        </div>
                    </div>
                    <div class="topbar-item">
                        <div class="topbar-item-list">
                            <div class="topbar-list-thumb">
                                <i class="flaticon-chat"></i>
                            </div>
                            <div class="topbar-list-content">
                                <a href="mailto:info@blim.com">info@blim.com</a>
                            </div>
                        </div>
                        <div class="topbar-item-list">
                            <div class="topbar-list-thumb">
                                <i class="flaticon-news-paper"></i>
                            </div>
                            <div class="topbar-list-content">
                                <a href="news-default.html">News Feeds</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .end topbar -->
        <!-- header -->
        <!-- header -->
        <header class="header-banner header-bg-shape-two header-padding">
            <!-- navbar -->
            <div class="fixed-top">
                <div class="navbar-area">
                    <!-- mobile menu -->
                    <div class="mobile-nav mobile-nav-two">
                         <a href="index.html" class="mobile-logo">
                                <img src="assets/images/logo-tawar.png" alt="logo" class="Tawar-logo logo1">
                                <img src="assets/images/logo-tawar.png" alt="logo" class="Tawar-logo logo2">
                            </a>
                        <!-- mobile navbar-option -->
                        <div class="navbar-option">
                            <div class="navbar-option-item navbar-option-dots dropdown">
                                <button type="button" id="dot" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                </button>
                                <ul class="dropdown-menu navbar-dots-dropdown">
                                    <li class="dropdown-item">
                                        <div class="navbar-option-item dropdown">
                                            <button class="search navbar-option-icon dropdown-toggle" type="button" id="search1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="navbar-search-zoom"><i class="flaticon-zoom"></i></span>
                                                <span class="navbar-search-cancel"><i class="flaticon-cancel"></i></span>
                                            </button>
                                            <div class="navbar-search dropdown-menu" aria-labelledby="search1">
                                                <form>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Search...">
                                                        <button class="btn btn-gradient"><span><i class="flaticon-loupe"></i></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-item">
                                        <div class="navbar-option-item">
                                            <a href="cart.html" target="_blank" class="shopping-cart navbar-option-icon">
                                                <span><i class="flaticon-shopping-bags"></i></span>
                                                <span class="shopping-cart-tooltip">2</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="navbar-option-item navbar-option-search dropdown mobile-hide">
                                <button class="search navbar-option-icon dropdown-toggle" type="button" id="search3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="navbar-search-zoom"><i class="flaticon-zoom"></i></span>
                                    <span class="navbar-search-cancel"><i class="flaticon-cancel"></i></span>
                                </button>
                                <div class="navbar-search dropdown-menu" aria-labelledby="search3">
                                    <form>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Search...">
                                            <button class="btn btn-gradient"><span><i class="flaticon-loupe"></i></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="navbar-option-item navbar-option-cart mobile-hide">
                                <a href="cart.html" target="_blank" class="shopping-cart navbar-option-icon">
                                    <span><i class="flaticon-shopping-bags"></i></span>
                                    <span class="shopping-cart-tooltip">2</span>
                                </a>
                            </div>
                            <div class="navbar-option-item navbar-option-account">
                                <a href="authentication.html" target="_blank" class="navbar-option-icon">
                                    <span><i class='flaticon-user'></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- desktop menu -->
                    <div class="main-nav main-nav-two bg-white">
                        <div class="container">
                            <nav class="navbar navbar-expand-md navbar-light ">
                                <a class="navbar-brand" href="/">
                                    <img src="assets/images/logo-tawar.png" alt="logo" style="max-width: 120px" class="Tawar-logo logo1">
                                </a>
                                <a class="navbar-brand" href="/">
                                    <img src="assets/images/logo-tawar.png" alt="logo" style="max-width: 120px" class="Tawar-logo logo2">
                                </a>
                                <!-- nav-list -->
                                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a href="/" class="nav-link  {{ is_active('/') }}">الرئيسية</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/Hosting" class="nav-link  {{ is_active('Hosting') }}">الاستضافات</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/Services" class="nav-link  {{ is_active('Services') }}">الخدمات</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/Company" class="nav-link  {{ is_active('Company') }}">الشركة</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/Contact-us" class="nav-link {{ is_active('Contact-us') }}">اتصل بنا</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- navbar-option -->
                                <div class="navbar-option">
                                    <div class="navbar-option-item">
                                        <a href="cart.html" target="_blank" class="shopping-cart navbar-option-icon">
                                            <span><i class="flaticon-shopping-bags"></i></span>
                                            <span class="shopping-cart-tooltip">2</span>
                                        </a>
                                    </div>
                                    <div class="navbar-option-item dropdown">
                                        <button class="search navbar-option-icon dropdown-toggle" type="button" id="search2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="navbar-search-zoom"><i class="flaticon-zoom"></i></span>
                                            <span class="navbar-search-cancel"><i class="flaticon-cancel"></i></span>
                                        </button>
                                        <div class="navbar-search dropdown-menu" aria-labelledby="search2">
                                            <form>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Search...">
                                                    <button class="btn"><span><i class="flaticon-loupe"></i></span></button>
                                                  </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="navbar-option-item">
                                        <a href="authentication.html" class="btn btn-gradient text-nowrap">
                                            Login / Register
                                        </a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .end navbar -->
                @yield('page-content')


        <!-- footer -->
        <footer class="footer-bg">
            <!-- footer-upper -->
            <div class="footer-upper pt-100 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="footer-content-item">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{ asset('assets/images/logo-tawar.png')}}" alt="logo"></a>
                                </div>
                                <div class="footer-details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adiisicing elit, sed do eiusmod tempor inc Neque porro quisquam est, qui dolorem  magnam quaerat luptatemd do eiusmod tempor inc Neque porro quisquam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <div class="footer-right pl-80">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="footer-content-list footer-content-item">
                                            <div class="footer-content-title">
                                                <h3>Get Support</h3>
                                            </div>
                                            <ul class="footer-details footer-list">
                                                <li><a href="shared-hosting.html">Shared Hosting</a></li>
                                                <li><a href="wordpress-hosting.html">WordPress Hosting</a></li>
                                                <li><a href="cloud-hosting.html">Cloud Hosting</a></li>
                                                <li><a href="vps-hosting.html">VPS Hosting</a></li>
                                                <li><a href="dedicated-hosting.html">Dedicated Hosting</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="footer-content-list footer-content-item">
                                            <div class="footer-content-title">
                                                <h3>Company</h3>
                                            </div>
                                            <ul class="footer-details footer-list">
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="contact-us.html">Contact Us</a></li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li><a href="news-default.html">News</a></li>
                                                <li><a href="affiliate.html">Affiliate</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="footer-content-list footer-content-item">
                                            <div class="footer-content-title">
                                                <h3>Solutions</h3>
                                            </div>
                                            <ul class="footer-details footer-list">
                                                <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                <li><a href="authentication.html">Authentication</a></li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li><a href="faqs.html">FAQ's</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-lower -->
            <div class="footer-lower">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-12 col-lg-5 pt-10 pb-10">
                            <div class="footer-lower-item-inner footer-lower-item-left">
                                <!-- social link -->
                                <div class="footer-lower-content">
                                    <h3>@Blim</h3>
                                    <div class="footer-social-logo">
                                        <ul class="footer-social-list">
                                            <li class="social-btn social-btn-fb"><a href="#"><i class='bx bxl-facebook'></i></a></li>
                                            <li class="social-btn social-btn-tw"><a href="#"><i class='bx bxl-twitter' ></i></a></li>
                                            <li class="social-btn social-btn-ins"><a href="#"><i class='bx bxl-instagram' ></i></a></li>
                                            <li class="social-btn social-btn-pin"><a href="#"><i class='bx bxl-pinterest-alt' ></i></a></li>
                                            <li class="social-btn social-btn-yt"><a href="#"><i class='bx bxl-youtube' ></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-7 pt-10 pb-10">
                            <div class="footer-lower-item-inner footer-lower-item-right justify-content-lg-end">
                                <!-- info -->
                                <div class="footer-lower-text text-lg-end">
                                    <p class="footer-text-copy">Copyright @<script>document.write(new Date().getFullYear())</script> Design & Developed by <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
                                    <p class="footer-text-gen">Terms & Conditions May Apply. <a href="terms-conditions.html" target="_blank">Click Here</a></p>
                                </div>
                                <!-- refer button -->
                                <div class="footer-lower-button">
                                    <button class="btn btn-pill">Refer A Friend</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- .end footer -->
        <!-- scroll-top -->
        <div class="scroll-top" id="scrolltop">
            <div class="scroll-top-inner">
                <span><i class="flaticon-up-arrow"></i></span>
            </div>
        </div>
        <!-- .end scroll-top -->

       <!-- essential js -->
        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <!-- magnific popup js -->
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- owl carousel js -->
        <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
        <!-- form ajazchimp js -->
        <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
        <!-- form validator js  -->
        <script src="{{ asset('assets/js/form-validator.min.js')}}"></script>
        <!-- contact form js -->
        <script src="{{ asset('assets/js/contact-form-script.js')}}"></script>
        <!-- meanmenu js -->
        <script src="{{ asset('assets/js/jquery.meanmenu.min.js')}}"></script>
        <!-- main js -->
        <script src="{{ asset('assets/js/script.js')}}"></script>
    </body>
</html>