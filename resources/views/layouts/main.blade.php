<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/kflow/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2024 02:49:25 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/swiper-min.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fancybox.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dark-theme.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <title>Kflow - Security & CCTV HTML Template</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<body>

<div class="preloader js-preloader">
    <img src="assets/img/preloader.gif" alt="Image">
</div>


<div class="switch-theme-mode">
    <label id="switch" class="switch">
        <input type="checkbox" onchange="toggleTheme()" id="slider">
        <span class="slider round"></span>
    </label>
</div>


<div class="page-wrapper ">

    <header class="header-wrap style1">
        <div class="header-top bg-russian">
            <div class="container">
                <div class="close-header-top xl-none">
                    <button type="button"><i class="las la-times"></i></button>
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-12">
                        <div class="header-top-left">
                            <div class="contact-item">
                                <i class="flaticon-call"></i>
                                Make A Call:
                                <a href="tel:12122555511">+1 (212) 255-5511</a>
                            </div>
                            <div class="contact-item">
                                <i class="flaticon-envelope-1"></i>
                                Send Message:
                                <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#8fece0e1fbeeecfbcfe4e9e3e0f8a1ece0e2"><span
                                        class="__cf_email__" data-cfemail="7c1f1312081d1f083c171a10130b521f1311">[email&#160;protected]</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="header-top-right">
                            <div class="user-login">
                                <a href="my-account.html"><i class="flaticon-user-3"></i> My Account</a>
                            </div>
{{--                            <div class="select-lang">--}}
{{--                                <i class="flaticon-planet-earth"></i>--}}
{{--                                <div class="navbar-option-item navbar-language dropdown language-option">--}}
{{--                                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"--}}
{{--                                            aria-haspopup="true" aria-expanded="false">--}}
{{--                                        <span class="lang-name"></span>--}}
{{--                                    </button>--}}
{{--                                    <div class="dropdown-menu language-dropdown-menu">--}}
{{--                                        <a class="dropdown-item" href="#">--}}
{{--                                            <img src="assets/img/uk.png" alt="flag">--}}
{{--                                            English--}}
{{--                                        </a>--}}
{{--                                        <a class="dropdown-item" href="#">--}}
{{--                                            <img src="assets/img/china.png" alt="flag">--}}
{{--                                            简体中文--}}
{{--                                        </a>--}}
{{--                                        <a class="dropdown-item" href="#">--}}
{{--                                            <img src="assets/img/uae.png" alt="flag">--}}
{{--                                            العربيّة--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="header-bottom">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-6 col-md-6 col-5">
                        <a href="index.html" class="logo">
                            <img class="logo-light" src="assets/img/logo.png" alt="Image">
                            <img class="logo-dark" src="assets/img/logo-white.png" alt="Image">
                        </a>
                    </div>
                    <div class="col-xl-10 col-lg-6 col-md-6 col-7">
                        <div class="header-bottom-right">
                            <div class="main-menu-wrap">
                                <div class="menu-close xl-none">
                                    <a href="javascript:void(0)"><i class="las la-times"></i></a>
                                </div>
                                <div id="menu">
                                    <ul class="main-menu list-style">
                                        <li class="has-children">
{{--                                            class="active"--}}
                                            <a href="/">Home</a>
{{--                                            <ul class="sub-menu list-style">--}}
{{--                                                <li>--}}
{{--                                                    <a class="active" href="index.html">Home 1</a>--}}
{{--                                                </li>--}}
{{--                                                <li><a href="index-2.html">Home 2</a></li>--}}
{{--                                                <li><a href="index-3.html">Home 3</a></li>--}}
{{--                                            </ul>--}}
                                        </li>
                                        <li class="has-children">
                                            <a href="{{ route('services') }}">Services</a>
{{--                                            <ul class="sub-menu list-style">--}}
{{--                                                <li>--}}
{{--                                                    <a href="services-one.html">Service Style One</a>--}}
{{--                                                </li>--}}

{{--                                                <li>--}}
{{--                                                    <a href="service-details.html">Service Single</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
                                        </li>
                                        <li class="has-children">
                                            <a href="{{route('projects')}}">Projects</a>
{{--                                            <ul class="sub-menu list-style">--}}
{{--                                                <li>--}}
{{--                                                    <a href="project-one.html">Project Style One</a>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <a href="project-two.html">Project Style Two</a>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <a href="project-details.html">Project Single</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
                                        </li>
{{--                                        <li class="has-children">--}}
{{--                                            <a href="#">Pages</a>--}}
{{--                                            <ul class="sub-menu list-style">--}}
{{--                                                <li><a href="about.html">About us</a></li>--}}
{{--                                                <li><a href="team.html">Team</a></li>--}}
{{--                                                <li><a href="testimonials.html">Testimonials</a></li>--}}
{{--                                                <li><a href="faq.html">FAQ</a></li>--}}
{{--                                                <li><a href="pricing-plan.html">Pricing Table</a></li>--}}
{{--                                                <li class="has-children"><a href="#">User</a>--}}
{{--                                                    <ul class="sub-menu list-style">--}}
{{--                                                        <li>--}}
{{--                                                            <a href="my-account.html">My Account</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="login.html">Login</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="register.html">Register</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="forgot-password.html">Forgot Password</a>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </li>--}}
{{--                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>--}}
{{--                                                <li><a href="terms-conditions.html">Terms &amp; Conditions</a></li>--}}
{{--                                                <li><a href="404.html">404 Error</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
                                        <li class="has-children">
                                            <a href="{{ route('shop') }}">Shop</a>
{{--                                            <a href="#">Shop</a>--}}
{{--                                            <ul class="sub-menu list-style">--}}
{{--                                                <li class="has-children"><a href="#">Shop Layout</a>--}}
{{--                                                    <ul class="sub-menu list-style">--}}
{{--                                                        <li><a href="shop-no-sidebar.html">Shop Grid </a></li>--}}
{{--                                                        <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <a href="shop-details.html">Shop Single</a>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <a href="cart.html">Cart</a>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <a href="wishlist.html">Wishlist</a>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <a href="checkout.html">Checkout</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
                                        </li>
{{--                                        <li class="has-children">--}}
{{--                                            <a href="#">Blog</a>--}}
{{--                                            <ul class="sub-menu list-style">--}}
{{--                                                <li class="has-children"><a href="#">Blog Layout</a>--}}
{{--                                                    <ul class="sub-menu list-style">--}}
{{--                                                        <li><a href="blog-no-sidebar.html">Blog Grid </a></li>--}}
{{--                                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </li>--}}
{{--                                                <li class="has-children"><a href="#">Blog Single</a>--}}
{{--                                                    <ul class="sub-menu list-style">--}}
{{--                                                        <li><a href="blog-details-no-sidebar.html">Blog Single No--}}
{{--                                                                Sidebar</a></li>--}}
{{--                                                        <li><a href="blog-details-left-sidebar.html">Blog Single--}}
{{--                                                                Left--}}
{{--                                                                Sidebar</a></li>--}}
{{--                                                        <li><a href="blog-details-right-sidebar.html">Blog Single--}}
{{--                                                                Right--}}
{{--                                                                Sidebar</a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
                                        <li>
                                            <a href="{{ route('contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

{{--                            <div class="searchbox lg-none">--}}
{{--                                <input type="search" placeholder="Search">--}}
{{--                                <button type="submit"><i class="flaticon-loupe"></i></button>--}}
{{--                            </div>--}}
                        </div>
                        <div class="mobile-bar-wrap">

                            <button class="searchbtn xl-none" type="button"><i class="flaticon-loupe"></i></button>
                            <div class="mobile-top-bar xl-none">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="mobile-menu xl-none">
                                <a href="javascript:void(0)"><i class="las la-bars"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="search-area">
        <div class="container pos-rel">
            <button type="button" class="close-searchbox">
                <i class="las la-times"></i>
            </button>
            <form action="#">
                <div class="form-group">
                    <input type="search" placeholder="Search Here" autofocus>
                </div>
            </form>
        </div>
    </div>

    @yield('content')

    <footer class="footer-wrap bg-f footer-bg-1">
        <div class="footer-top pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-widget-wrap">
                            <div class="footer-widget">
                                <a href="index.html" class="footer-logo"><img src="assets/img/logo-white.png"
                                                                              alt="Image"></a>
                                <p class="comp-desc">
                                    Lorem ipsum dolor elit amet, consetur quo elit, sed eiusmo tempor corporis
                                    itaque incidunt ut labore et dolore magna aliqua ipsum nostrum Lorem ipsum
                                    dolor
                                    sit suspend.
                                </p>
                                <ul class="social-profile style2 list-style">
                                    <li><a target="_blank" href="https://facebook.com/"><i
                                                class="flaticon-facebook-app-symbol"></i> </a></li>
                                    <li><a target="_blank" href="https://twitter.com/"> <i class="flaticon-twitter"></i>
                                        </a></li>
                                    <li><a target="_blank" href="https://linkedin.com/"> <i
                                                class="flaticon-linkedin-1"></i> </a></li>
                                    <li><a target="_blank" href="https://instagram.com/"> <i
                                                class="flaticon-instagram"></i> </a></li>
                                </ul>
                            </div>
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Useful Link</h4>
                                <ul class="footer-menu list-style">
                                    <li><a href="about.html" target="_blank"><i class="flaticon-right-arrow-1"></i>About
                                            Us</a></li>
                                    <li><a href="contact.html" target="_blank"><i class="flaticon-right-arrow-1"></i>Contact
                                            Us</a></li>
                                    <li><a href="contact.html" target="_blank"><i class="flaticon-right-arrow-1"></i>Help
                                            Desk</a></li>
                                    <li><a href="privacy-policy.html" target="_blank"><i
                                                class="flaticon-right-arrow-1"></i>Privacy Policy</a></li>
                                    <li><a href="terms-conditions.html" target="_blank"><i
                                                class="flaticon-right-arrow-1"></i>Terms &amp;
                                            Conditions</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Our Services</h4>
                                <ul class="footer-menu list-style">
                                    <li><a href="service-details.html" target="_blank"><i
                                                class="flaticon-right-arrow-1"></i>CCTV Installation</a></li>
                                    <li><a href="service-details.html" target="_blank"><i
                                                class="flaticon-right-arrow-1"></i>Finger Print Access</a></li>
                                    <li><a href="service-details.html" target="_blank"><i
                                                class="flaticon-right-arrow-1"></i>HD IP Cameras</a></li>
                                    <li><a href="service-details.html" target="_blank"><i
                                                class="flaticon-right-arrow-1"></i>Home Security</a></li>
                                    <li><a href="service-details.html" target="_blank"><i
                                                class="flaticon-right-arrow-1"></i>Door Lock</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Contact us</h4>
                                <div class="contact-item">
                                    <i class="flaticon-placeholder"></i>
                                    <p>Melborne Main St, VIC 3000, Melborne, Australia</p>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-message-1"></i>
                                    <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#dab2bfb6b6b59ab1bcb6b5adf4b9b5b7"><span
                                            class="__cf_email__" data-cfemail="79111c15151639121f15160e571a1614">[email&#160;protected]</span></a>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-phone-call"></i>
                                    <a href="tel:920023456789">+9200 (2) 345 6789</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="copyright">
                <p><span class="las la-copyright"></span>
                    <script data-cfasync="false"
                            src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>document.write(new Date().getFullYear())</script>
                    <a href="index.html">Kflow</a>. All Rights Reserved
                    By <a href="https://hibootstrap.com/">HiBootstrap</a></p>
            </div>
        </div>
    </footer>

</div>


<a href="javascript:void(0)" class="back-to-top"><i class="las la-arrow-up"></i></a>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/swiper-min.js"></script>
<script src="assets/js/jquery-magnific-popup.js"></script>
<script src="assets/js/fancybox.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/kflow/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2024 02:50:55 GMT -->
</html>
