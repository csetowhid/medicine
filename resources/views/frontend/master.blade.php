<!doctype html>
<html>

<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home — Gymer Static Build System</title>

    <!-- Fav Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('frontend/assets/img/fav-icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('frontend/assets/img/fav-icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('frontend/assets/img/fav-icons/favicon-16x16.png')}}">

    <!-- Dependency Styles -->
    <link rel="stylesheet" href="{{asset('frontend/dependencies/bootstrap/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/dependencies/fontawesome/css/fontawesome-all.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/dependencies/flaticon/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/dependencies/owl.carousel/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/dependencies/owl.carousel/css/owl.theme.default.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/dependencies/magnific-popup/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/dependencies/animate.css/css/animate.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/dependencies/slick-carousel/css/slick.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/dependencies/slick-carousel/css/slick-theme.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/dependencies/material-design-icons/css/material-icons.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/dependencies/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/dependencies/aos/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/dependencies/rangeslider.js/css/rangeslider.css')}}">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/app.css')}}" type="text/css">

    <link id="theme" rel="stylesheet" href="{{asset('frontend/assets/css/theme-color/theme-default.css')}}" type="text/css">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900%7CRoboto:300,400,500,700,900" rel="stylesheet">


</head>

<body id="home-version-1" class="home-version-1" data-style="default">

<!-- <div id="loader-wrapper">
    <div class="loader">
        <div class="loader-dot"></div>
        <div class="loader-dot"></div>
        <div class="loader-dot"></div>
    </div>
</div> -->

<div id="site">


    <!--=========================-->
    <!--=        Navbar         =-->
    <!--=========================-->
    <header id="header" class="header_area hdr_area_two hdr_area_four">
        <!-- Start top toolbar -->
    {{--        <section class="top_toolbar top_toolbar_new">--}}
    {{--            <div class="vigo_container_one">--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col-xl-6 col-lg-6">--}}
    {{--                        <div class="toolbar_left">--}}
    {{--                            <p><span>Get 30% Discounts!</span> Offer ends in</p>--}}
    {{--                            <div id="count_down"></div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-xl-6 col-lg-6">--}}
    {{--                        <div class="toolbar_right">--}}
    {{--                            <ul>--}}
    {{--                                <li class="search">--}}
    {{--                                    <i class="fas fa-search"></i>--}}
    {{--                                </li>--}}
    {{--                                <li class="cart">--}}
    {{--                                    <i class="fas fa-shopping-basket"></i>--}}
    {{--                                    <div class="cart_detail">--}}
    {{--                                        <div class="single_cart">--}}
    {{--                                            <div class="cart_left">--}}
    {{--                                                <img src="{{asset('frontend/media/images/banner-two/cart-one.png')}}" alt="">--}}
    {{--                                            </div>--}}
    {{--                                            <div class="cart_right">--}}
    {{--                                                <h3>Vaxin Regular Big Name</h3>--}}
    {{--                                                <p>$66 <sup>USD</sup></p>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="single_cart">--}}
    {{--                                            <div class="cart_left">--}}
    {{--                                                <img src="{{asset('frontend/media/images/banner-two/cart-two.png')}}" alt="">--}}
    {{--                                            </div>--}}
    {{--                                            <div class="cart_right">--}}
    {{--                                                <h3>Vaxin Woman</h3>--}}
    {{--                                                <p>$76 <sup>USD</sup></p>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="cart_more">--}}
    {{--                                            <a href="#">View Cart <i class="fa fa-angle-right"></i></a>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </li>--}}
    {{--                                <li class="phone">--}}
    {{--                                    <a href="#">--}}
    {{--                                        <i class="fas fa-phone"></i>--}}
    {{--                                        Call +123 4567890--}}
    {{--                                    </a>--}}
    {{--                                </li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </section>--}}
    <!-- End top toolbar -->

        <!-- Start Main Menu -->
        <section class="header_nav">
            <div class="vigo_container_one">
                <div class="row">
                    <div class="col-auto mr-auto">
                        <div class="header_logo">
                            <a href="{{route('index')}}">
                                <img class="logo-default" src="{{asset('frontend/media/images/home6/logo.png')}}" alt="">
                                <img class="logo-white" src="{{asset('frontend/media/images/home6/footer-logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto no-position">
                        <nav class="main_menu">
                            <ul id="example-one">
                                <li>
                                    <a class="current_page_item active" href="{{route('index')}}">Home</a>
                                </li>
                                <li>
                                    <a href="supplement.html">Supplement</a>
                                </li>
                                <li>
                                    <a href="collection.html">Product</a>
                                    <ul class="sub-menu">
                                        <li><a href="collection.html">Productlist</a></li>
                                        <li><a href="product-detail.html">Product Detail</a></li>
                                        <li><a href="collection-all.html">Collection All</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog.html">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog-details</a></li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                    <ul class="sub-menu">
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="faq.html">faq</a></li>
                                        <li><a href="privacy.html">privacy</a></li>
                                        <li><a href="sign-in.html">Sign in</a></li>
                                        <li><a href="sign-up.html">Sign Up</a></li>
                                        <li><a href="reset-pass.html">Reset Password</a></li>
                                    </ul>
                                </li>
                                <li class="inherit">
                                    <a href="#">Megamenu</a>
                                    <section class="megamenu">
                                        <div class="column">
                                            <div class="mm-header">
                                                <h3>TOP PRODUCTS</h3>
                                            </div>
                                            <div class="megamenu-product-slider owl-carousel">
                                                <div class="megamenu-product-highlight-single">
                                                    <div class="sn_related_product">
                                                        <div class="sn_pd_img">
                                                            <a href="#">
                                                                <img src="{{asset('frontend/media/images/popup/product-one.png')}}" alt="!">
                                                            </a>
                                                            <span>$12</span>
                                                        </div>
                                                        <div class="sn_pd_rating">
                                                            <a href="#">
                                                                <i class="far fa-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="far fa-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="far fa-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="far fa-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="far fa-star"></i>
                                                            </a>
                                                        </div>
                                                        <div class="sn_pd_detail">
                                                            <a href="#">
                                                                <h5>Vaxin Regular (500mg), Mild Intake 150 pcs</h5>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="megamenu-product-highlight-single">
                                                    <div class="sn_related_product">
                                                        <div class="sn_pd_img">
                                                            <a href="#">
                                                                <img src="{{asset('frontend/media/images/popup/product-two.png')}}" alt="!">
                                                            </a>
                                                            <span>$12</span>
                                                        </div>
                                                        <div class="sn_pd_rating">
                                                            <a href="#">
                                                                <i class="far fa-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="far fa-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="far fa-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="far fa-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="far fa-star"></i>
                                                            </a>
                                                        </div>
                                                        <div class="sn_pd_detail">
                                                            <a href="#">
                                                                <h5>Vaxin Regular (500mg), Mild Intake 150 pcs</h5>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="megamenu-product-highlight-single">
                                                    <div class="sn_related_product">
                                                        <div class="sn_pd_img">
                                                            <a href="#">
                                                                <img src="{{asset('frontend/media/images/popup/product-one.png')}}" alt="!">
                                                            </a>
                                                            <span>$12</span>
                                                        </div>
                                                        <div class="sn_pd_rating">
                                                            <a href="#">
                                                                <i class="far fa-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="far fa-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="far fa-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="far fa-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="far fa-star"></i>
                                                            </a>
                                                        </div>
                                                        <div class="sn_pd_detail">
                                                            <a href="#">
                                                                <h5>Vaxin Regular (500mg), Mild Intake 150 pcs</h5>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="megamenu-product-highlight-single">
                                                    <div class="sn_related_product">
                                                        <div class="sn_pd_img">
                                                            <a href="#">
                                                                <img src="{{asset('frontend/media/images/popup/product-two.png')}}" alt="!">
                                                            </a>
                                                            <span>$12</span>
                                                        </div>
                                                        <div class="sn_pd_rating">
                                                            <a href="#">
                                                                <i class="far fa-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="far fa-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="far fa-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="far fa-star"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="far fa-star"></i>
                                                            </a>
                                                        </div>
                                                        <div class="sn_pd_detail">
                                                            <a href="#">
                                                                <h5>Vaxin Regular (500mg), Mild Intake 150 pcs</h5>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column">
                                            <div class="column-inner">
                                                <div class="mm-header">
                                                    <h3>LINKS</h3>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <i class="fas fa-caret-right"></i>
                                                        <a href="about.html">About Us</a>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-caret-right"></i>
                                                        <a href="supplement.html">Our Supplement</a>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-caret-right"></i>
                                                        <a href="collection.html">Our Product</a>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-caret-right"></i>
                                                        <a href="feature.html">All Featurer</a>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-caret-right"></i>
                                                        <a href="ingredient.html">All Ingredient</a>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-caret-right"></i>
                                                        <a href="blog.html">Our Blog</a>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-caret-right"></i>
                                                        <a href="contact.html">Contact Us</a>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-caret-right"></i>
                                                        <a href="faq.html">FAQ</a>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-caret-right"></i>
                                                        <a href="privacy.html">Privacy Policy</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="column">
                                            <div class="mm-header">
                                                <h3>WATCH THE PROMOTIONAL</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Let the lorem ipsum work for your demo!</p>
                                            </div>
                                            <div class="video-popup">
                                                <a href="https://www.youtube.com/watch?v=b-TGpa0SDXw" class="pop-up" data-effect="mfp-move-horizontal">
                                                    <i class="material-icons play">
                                                        play_arrow
                                                    </i>
                                                </a>
                                            </div>

                                            <div class="sharing-caring">
                                                <div class="mm-header">
                                                    <h3>SHARING IS CARING</h3>
                                                </div>
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fab fa-medium-m"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fab fa-tumblr"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </section>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto">
                        <div class="hdr_btn_wrapper">
                            <a href="{{route('login')}}"><i class="fas fa-caret-right"></i>Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search_detail_two">
                <form action="#">
                    <input type="text" placeholder="Search Your key...">
                    <button><i class="material-icons">
                            search
                        </i>
                    </button>
                </form>
                <div class="search_detail_two_close">
                    <i class="material-icons">
                        clear
                    </i>
                </div>
            </div>
        </section>
        <!-- End Main Menu -->

        <!-- Start Mobile Menu outer-->
        <section id="mobile-nav-wrap" class="clearfix">
            <div class="mobile_toolbar">
                <div class="vigo_container_one">
                    <div class="top_toolbar_right">
                        <div class="phone_number">
                            <span class="flaticon-phone-call"></span> <a href="#">+1 (895) 852–6523</a>
                        </div>
                        <div class="header_login">
                            <div class="whc_toolbar_main_login">
                                <a href="sign-up.html">register</a>|
                                <a href="sign-in.html">login</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="vigo_container_one">
                <div class="bottom_nav bottom_nav_two">
                    <div id="mobile-logo">
                        <a href="index.html">
                            <img src="{{asset('frontend/assets/img/hm-two-logo.png')}}" class="svg" alt="">
                        </a>
                    </div>
                    <div class="toggle-inner">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Mobile Menu outer-->
    </header>
    @yield('content')
    <!--=        Footer         =-->
    <!--==========================-->
    <footer class="footer_five_area">
        <div class="vigo_container_one">
            <div class="footer_five_middle clearfix">
                <div class="widget widget5">
                    <div class="widget5_about">
                        <p>Vaxin Internationals Ltd. Suite 109, Floor 5 240 New Canberra WA 1234, AUSTRALIA</p>
                    </div>
                    <div class="widget5_social">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-medium-m"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-tumblr"></i>
                        </a>
                    </div>
                </div>
                <div class="widget widget5">
                    <div class="widget5_title">
                        <h3>Company</h3>
                    </div>
                    <div class="widget5_desc">
                        <a href="#">
                            <i class="fas fa-caret-right"></i>
                            About us
                        </a>
                        <a href="#">
                            <i class="fas fa-caret-right"></i>
                            Delivery Information
                        </a>
                        <a href="#">
                            <i class="fas fa-caret-right"></i>
                            Terms & Conditions
                        </a>
                        <a href="#">
                            <i class="fas fa-caret-right"></i>
                            Privacy Policy
                        </a>
                        <a href="#">
                            <i class="fas fa-caret-right"></i>
                            FAQs
                        </a>
                        <a href="#">
                            <i class="fas fa-caret-right"></i>
                            Refund Policy
                        </a>
                    </div>
                </div>
                <div class="widget widget5">
                    <div class="widget5_title">
                        <h3>USEFUL LINKS</h3>
                    </div>
                    <div class="widget5_desc">
                        <a href="#">
                            <i class="fas fa-caret-right"></i>
                            Themes & Templates
                        </a>
                        <a href="#">
                            <i class="fas fa-caret-right"></i>
                            Delivery Information
                        </a>
                        <a href="#">
                            <i class="fas fa-caret-right"></i>
                            Terms & Conditions
                        </a>
                        <a href="#">
                            <i class="fas fa-caret-right"></i>
                            Privacy Policy
                        </a>
                        <a href="#">
                            <i class="fas fa-caret-right"></i>
                            FAQs
                        </a>
                        <a href="#">
                            <i class="fas fa-caret-right"></i>
                            Refund Policy
                        </a>
                    </div>
                </div>
                <div class="widget widget5">
                    <div class="widget5_title">
                        <h3>from the feed</h3>
                    </div>
                    <div class="widget5_desc">
                        <a href="#">
                            <i class="fas fa-caret-right"></i>
                            Themes & Templates
                        </a>
                        <a href="#">
                            <i class="fas fa-caret-right"></i>
                            Delivery Information
                        </a>
                        <a href="#">
                            <i class="fas fa-caret-right"></i>
                            Terms & Conditions
                        </a>
                        <a href="#">
                            <i class="fas fa-caret-right"></i>
                            Privacy Policy
                        </a>
                        <a href="#">
                            <i class="fas fa-caret-right"></i>
                            FAQs
                        </a>
                        <a href="#">
                            <i class="fas fa-caret-right"></i>
                            Refund Policy
                        </a>
                    </div>
                </div>
                <div class="widget widget5">
                    <div class="widget5_title">
                        <h3>other LInks</h3>
                    </div>
                    <div class="widget5_tweet">
                        <div id="twitter_feed"></div>
                    </div>
                </div>
            </div>
            <div class="footer_five_bottom">
                <div class="footer_four_bottom_left">
                    <p>Copyright© <a href="#">ThemeIM</a> | All Rights Reserved</p>
                </div>
                <div class="backtotop">
                    <i class="fas fa-angle-double-up"></i>
                </div>
            </div>
        </div>
    </footer>


</div>
<!-- /#site -->

<!-- Dependency Scripts -->
<script src="{{asset('frontend/dependencies/jquery/jquery.min.js')}}"></script>
<script src="{{asset('frontend/dependencies/popper.js/popper.min.js')}}"></script>
<script src="{{asset('frontend/dependencies/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/dependencies/owl.carousel/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/dependencies/magnific-popup/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/dependencies/isotope-layout/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/dependencies/slick-carousel/js/slick.min.js')}}"></script>
<script src="{{asset('frontend/dependencies/jquery.countdown/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('frontend/dependencies/gmap3/gmap3.min.js')}}"></script>
<script src="{{asset('frontend/dependencies/headroom/js/headroom.js')}}"></script>
<script src="{{asset('frontend/dependencies/countUp.js/js/countUp.min.js')}}"></script>
<script src="{{asset('frontend/dependencies/twitter-fetcher/js/twitterFetcher_min.js')}}"></script>
<script src="{{asset('frontend/dependencies/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('frontend/dependencies/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('frontend/dependencies/aos/js/aos.js')}}"></script>
<script async src="../../../platform.twitter.com/widgets.js" charset="utf-8"></script>
<script async src="../../../cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsBrMPsyNtpwKXPPpG54XwJXnyobfMAIc"></script>
<script src="{{asset('frontend/dependencies/rangeslider.js/js/rangeslider.min.js')}}"></script>
<script src="{{asset('frontend/dependencies/waypoints/js/jquery.waypoints.min.js')}}"></script>
<!-- Site Scripts -->
<script src="{{asset('frontend/assets/js/middle.js')}}"></script>
<script src="{{asset('frontend/assets/js/app.js')}}"></script>


</body>

</html>
