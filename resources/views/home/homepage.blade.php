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
        <section class="top_toolbar top_toolbar_new">
            <div class="vigo_container_one">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="toolbar_left">
                            <p><span>Get 30% Discounts!</span> Offer ends in</p>
                            <div id="count_down"></div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="toolbar_right">
                            <ul>
                                <li class="search">
                                    <i class="fas fa-search"></i>
                                </li>
                                <li class="cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <div class="cart_detail">
                                        <div class="single_cart">
                                            <div class="cart_left">
                                                <img src="{{asset('frontend/media/images/banner-two/cart-one.png')}}" alt="">
                                            </div>
                                            <div class="cart_right">
                                                <h3>Vaxin Regular Big Name</h3>
                                                <p>$66 <sup>USD</sup></p>
                                            </div>
                                        </div>
                                        <div class="single_cart">
                                            <div class="cart_left">
                                                <img src="{{asset('frontend/media/images/banner-two/cart-two.png')}}" alt="">
                                            </div>
                                            <div class="cart_right">
                                                <h3>Vaxin Woman</h3>
                                                <p>$76 <sup>USD</sup></p>
                                            </div>
                                        </div>
                                        <div class="cart_more">
                                            <a href="#">View Cart <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="phone">
                                    <a href="#">
                                        <i class="fas fa-phone"></i>
                                        Call +123 4567890
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End top toolbar -->

        <!-- Start Main Menu -->
        <section class="header_nav">
            <div class="vigo_container_one">
                <div class="row">
                    <div class="col-auto mr-auto">
                        <div class="header_logo">
                            <a href="index.html">
                                <img class="logo-default" src="{{asset('frontend/media/images/home6/logo.png')}}" alt="">
                                <img class="logo-white" src="{{asset('frontend/media/images/home6/footer-logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto no-position">
                        <nav class="main_menu">
                            <ul id="example-one">
                                <li>
                                    <a class="current_page_item active" href="index.html">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home One</a></li>
                                        <li><a href="index2.html">Home Two</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="supplement.html">Supplement</a>
                                </li>
                                <li>
                                    <a href="feature.html">Feature</a>
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
                                    <a href="ingredient.html">Ingredient</a>
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
                            <a href="#"><i class="fas fa-caret-right"></i> Purchase</a>
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

    <section class="mobile-menu-inner mobile-menu-inner-two">
        <div class="mobile_accor_togo">
            <div class="mobile_accor_logo">
                <a href="index.html">
                    <img src="{{asset('frontend/assets/img/hm-two-logo.png')}}" class="svg" alt="">
                </a>
            </div>
            <div class="close-menu">
                <span></span>
            </div>
        </div>
        <nav id="accordian">
            <ul class="accordion-menu">
                <li class="current_page_item">
                    <a href="index.html" class="dropdownlink">Home</a>
                    <ul class="submenuItems">
                        <li><i class="flaticon-right-arrow-angle"></i><a href="index.html">Home One</a></li>
                        <li><i class="flaticon-right-arrow-angle"></i><a href="index2.html">Home Two</a></li>
                    </ul>
                </li>
                <li>
                    <a href="supplement.html">Supplement</a>
                </li>
                <li>
                    <a href="feature.html">Feature</a>
                </li>
                <li>
                    <a href="collection.html" class="dropdownlink">Productlist</a>
                    <ul class="submenuItems">
                        <li><i class="flaticon-right-arrow-angle"></i><a href="collection.html">Productlist</a></li>
                        <li><i class="flaticon-right-arrow-angle"></i><a href="collection-all.html">Product Sidebar</a></li>
                        <li><i class="flaticon-right-arrow-angle"></i><a href="product-detail.html">Product Detail</a></li>
                    </ul>
                </li>
                <li>
                    <a href="ingredient.html">Ingredient</a>
                </li>
                <li>
                    <a href="blog.html" class="dropdownlink">blog</a>
                    <ul class="submenuItems">
                        <li><i class="flaticon-right-arrow-angle"></i><a href="blog.html"> Blog</a></li>
                        <li><i class="flaticon-right-arrow-angle"></i><a href="blog-details.html"> Blog details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html" class="dropdownlink">Contact</a>
                    <ul class="submenuItems">
                        <li><i class="flaticon-right-arrow-angle"></i><a href="contact.html">Contact page</a></li>
                        <li><i class="flaticon-right-arrow-angle"></i><a href="about.html">About us</a></li>
                        <li><i class="flaticon-right-arrow-angle"></i><a href="privacy.html">Privacy</a></li>
                        <li><i class="flaticon-right-arrow-angle"></i><a href="reset-pass.html">Reset Pass</a></li>
                        <li><i class="flaticon-right-arrow-angle"></i><a href="faq.html">FAQ</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <form action="#" id="moble-search">
            <input type="text" placeholder="Search....">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <ul class="footer-social-link">
            <li class="fb-bg"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="in-bg"><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="tw-bg"><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="gp-bg"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
    </section>

    <!--==========================-->
    <!--=        Content         =-->
    <!--==========================-->


    <!--==========================-->
    <!--=        Banner         =-->
    <!--==========================-->
    <section class="banner_static">
        <div class="vigo_container_one">
            <div class="banner_static_flex">
                <div class="banner_static_left">
                    <h1>
                        ENLIVEN BODY
                        <span>SUPPLIMENT</span>
                    </h1>
                    <div class="banner_static_wonder">
                        <p>
                            <i class="material-icons">
                                done_all
                            </i> FEEL LIGHTER
                        </p>
                        <p>
                            <i class="material-icons">
                                done_all
                            </i> FEEL STRONGER
                        </p>
                    </div>
                    <div class="banner_static_download">
                        <p>
                            Get our expert diet chart for free
                        </p>
                        <a href="#" class="btn_download">
                            download
                            <i class="material-icons">
                                get_app
                            </i>
                        </a>
                    </div>
                </div>
                <div class="banner_static_right">
                    <div class="banner_static_img">
                        <img src="{{asset('frontend/media/images/home6/banner-guy.png')}}" alt="">
                    </div>
                    <div class="banner_static_img">
                        <img src="{{asset('frontend/media/images/home6/banner-arrow.png')}}" alt="">
                    </div>
                    <div class="banner_static_img">
                        <img src="{{asset('frontend/media/images/home6/banner-circle.png')}}" alt="">
                    </div>
                    <div class="banner_static_img">
                        <img src="{{asset('frontend/media/images/home6/banner-bottle.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="modal" id="loading-subscribe1">
        <div class="modal-dialog">
            <div class="loading-subscribe loading-subscribe-white">
                <div class="loading-subscribe-inner">
                    <div class="loading-subscribe-img">
                        <img src="{{asset('frontend/media/images/popup/Light.jpg')}}" alt="">
                    </div>
                    <div class="loading-subscribe-detail">
                        <div class="loading-subscribe-top">
                            <h1>Want <span>X Factor</span><br> Within ?</h1>
                            <p>Subscribe us and get promotional discounts upto massive <span>90% OFF!</span> Type your email below now!</p>
                        </div>
                        <form action="#">
                            <p class="loading-subscribe-input">
                                <input type="text" placeholder="Click & type your email here">
                            </p>
                            <p class="loading-subscribe-submit">
                                <button>Subscribe
                                    <i class="material-icons">
                                        keyboard_backspace
                                    </i>
                                </button>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="remove">
                    <button type="button" data-dismiss="modal">
                        <i class="material-icons">
                            clear
                        </i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="megamenu-cookies">
        <div class="remove">
            <i class="material-icons">
                clear
            </i>
        </div>
        <p>This Website uses cookies to ensure you get the best experience in our website. We also use analytics software to track data of visitors. See more info <a href="#">here</a></p>
        <a class="agree" href="#">I agree</a>
    </section>

    <!--==========================-->
    <!--=        Banner         =-->
    <!--==========================-->
    <section class="home_five_service">
        <div class="vigo_container_one">
            <div class="home_five_single_service">
                <div class="home_five_single_service_inner clearfix">
                    <div class="home_five_single_service_right">
                        <h3>Pain Relief</h3>
                        <p>lorem ipsum dolor set amet konsit</p>
                        <a href="#">$172</a>
                    </div>
                    <div class="home_five_single_service_img">
                        <img src="{{asset('frontend/media/images/home6/service-one.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="home_five_single_service">
                <div class="home_five_single_service_inner clearfix">
                    <img src="{{asset('frontend/media/images/home6/service-two.png')}}" alt="!!">
                </div>
            </div>
            <div class="home_five_single_service">
                <div class="home_five_single_service_inner clearfix">
                    <div class="home_five_single_service_img">
                        <img src="{{asset('frontend/media/images/home6/service-three.png')}}" alt="">
                    </div>
                    <div class="home_five_single_service_right">
                        <h3>Amazing Offer</h3>
                        <p>lorem ipsum dolor set amet konsit</p>
                        <a href="#">order</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==========================-->
    <!--=        Banner         =-->
    <!--==========================-->
    <section class="home5_recent">
        <div class="vigo_container_one">
            <div class="section_title_four">
                <h2>RECENT</h2>
            </div>
            <div class="home5_recent_slider owl-carousel">
                <div class="home5_recent_slide">
                    <div class="off">
                        - 8%
                    </div>
                    <div class="home5_recent_thumb">
                        <img src="{{asset('frontend/media/images/home6/recent-one.png')}}" alt="gg">
                        <span>$12</span>
                    </div>
                    <div class="home5_recent_appreciate">
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
                    <div class="home5_recent_title">
                        <h3><a href="product-detail.html">Vaxin Regular (500mg), Mild Intake</a></h3>
                    </div>
                    <div class="home5_recent_view_cart clearfix">
                        <a href="#" class="trigger"><i class="fas fa-expand"></i> QUICK VIEW</a>
                        <a href="#"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>
                    </div>
                </div>
                <div class="home5_recent_slide">
                    <div class="home5_recent_thumb">
                        <img src="{{asset('frontend/media/images/home6/recent-two.png')}}" alt="gg">
                        <span>$12</span>
                    </div>
                    <div class="home5_recent_appreciate">
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
                    <div class="home5_recent_title">
                        <h3><a href="product-detail.html">Vaxin Regular (500mg), Mild Intake</a></h3>
                    </div>
                    <div class="home5_recent_view_cart clearfix">
                        <a href="#" class="trigger"><i class="fas fa-expand"></i> QUICK VIEW</a>
                        <a href="#"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>
                    </div>
                </div>
                <div class="home5_recent_slide">
                    <div class="home5_recent_thumb">
                        <img src="{{asset('frontend/media/images/home6/recent-three.png')}}" alt="gg">
                        <span>$12</span>
                    </div>
                    <div class="home5_recent_appreciate">
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
                    <div class="home5_recent_title">
                        <h3><a href="product-detail.html">Vaxin Regular (500mg), Mild Intake</a></h3>
                    </div>
                    <div class="home5_recent_view_cart clearfix">
                        <a href="#" class="trigger"><i class="fas fa-expand"></i> QUICK VIEW</a>
                        <a href="#"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>
                    </div>
                </div>
                <div class="home5_recent_slide">
                    <div class="home5_recent_thumb">
                        <img src="{{asset('frontend/media/images/home6/recent-four.png')}}" alt="gg">
                        <span>$12</span>
                    </div>
                    <div class="home5_recent_appreciate">
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
                    <div class="home5_recent_title">
                        <h3><a href="product-detail.html">Vaxin Regular (500mg), Mild Intake</a></h3>
                    </div>
                    <div class="home5_recent_view_cart clearfix">
                        <a href="#" class="trigger"><i class="fas fa-expand"></i> QUICK VIEW</a>
                        <a href="#"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>
                    </div>
                </div>
                <div class="home5_recent_slide">
                    <div class="home5_recent_thumb">
                        <img src="{{asset('frontend/media/images/home6/recent-three.png')}}" alt="gg">
                        <span>$12</span>
                    </div>
                    <div class="home5_recent_appreciate">
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
                    <div class="home5_recent_title">
                        <h3><a href="product-detail.html">Vaxin Regular (500mg), Mild Intake</a></h3>
                    </div>
                    <div class="home5_recent_view_cart clearfix">
                        <a href="#" class="trigger"><i class="fas fa-expand"></i> QUICK VIEW</a>
                        <a href="#"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>
                    </div>
                </div>
                <div class="home5_recent_slide">
                    <div class="home5_recent_thumb">
                        <img src="{{asset('frontend/media/images/home6/recent-four.png')}}" alt="gg">
                        <span>$12</span>
                    </div>
                    <div class="home5_recent_appreciate">
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
                    <div class="home5_recent_title">
                        <h3><a href="product-detail.html">Vaxin Regular (500mg), Mild Intake</a></h3>
                    </div>
                    <div class="home5_recent_view_cart clearfix">
                        <a href="#" class="trigger"><i class="fas fa-expand"></i> QUICK VIEW</a>
                        <a href="#"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="modal quickview-wrapper">
        <div class="quickview">
            <div class="container">
                <div class="row">
						<span class="close-qv">
					<i class="material-icons">close</i>
				</span>
                    <div class="ingredient_slider_flex">
                        <div class="ingredient_slider_main">
                            <div class="ingredient_slider_one">
                                <div>
                                    <img src="{{asset('frontend/media/images/ingredient2/ing-one-small.png')}}" alt="">
                                </div>
                                <div>
                                    <img src="{{asset('frontend/media/images/ingredient2/ing-two-small.png')}}" alt="">
                                </div>
                                <div>
                                    <img src="{{asset('frontend/media/images/ingredient2/ing-three-small.png')}}" alt="">
                                </div>
                                <div>
                                    <img src="{{asset('frontend/media/images/ingredient2/ing-one-small.png')}}" alt="">
                                </div>
                                <div>
                                    <img src="{{asset('frontend/media/images/ingredient2/ing-two-small.png')}}" alt="">
                                </div>
                                <div>
                                    <img src="{{asset('frontend/media/images/ingredient2/ing-three-small.png')}}" alt="">
                                </div>
                            </div>
                            <div class="ingredient_slider_two">
                                <div>
                                    <div class="ingredient-img">
                                        <img src="{{asset('frontend/media/images/ingredient2/ing-one.png')}}" alt="">
                                    </div>
                                </div>
                                <div>
                                    <div class="ingredient-img">
                                        <img src="{{asset('frontend/media/images/ingredient2/ing-two.png')}}" alt="">
                                    </div>
                                </div>
                                <div>
                                    <div class="ingredient-img">
                                        <img src="{{asset('frontend/media/images/ingredient2/ing-three.png')}}" alt="">
                                    </div>
                                </div>

                                <div>
                                    <div class="ingredient-img">
                                        <img src="{{asset('frontend/media/images/ingredient2/ing-four.png')}}" alt="">
                                    </div>
                                </div>

                                <div>
                                    <div class="ingredient-img">
                                        <img src="{{asset('frontend/media/images/ingredient2/ing-five.png')}}" alt="">
                                    </div>
                                </div>
                                <div>
                                    <div class="ingredient-img">
                                        <img src="{{asset('frontend/media/images/ingredient2/ing-one.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ingredient_slider_detail">
                            <h4 class="product_title">Vaxin Regular (500mg), Mild Intake lorem ipsum dolor</h4>
                            <p class="product_ratting woocommerce-product-rating">

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

                                <span>(30 Reviews)</span>
                            </p>

                            <div class="product_price">
                                <p class="in-stock">IN STOCK</p>
                                <p class="out-stock">OUT OF STOCK</p>
                                <div class="price">
                                    <ins>
									<span class="woocommerce-Price-amount">
										$12.00
									</span>
                                    </ins>

                                    <del>
									<span class="woocommerce-Price-amount">
										$20.00
									</span>
                                    </del>
                                </div>
                            </div>

                            <form action="#" class="product-cart" method="post">
                                <div class="product-quantity quantity">
                                    <input name="quantity" value="1" data-product-qty="" class="cart__quantity-selector quantity-selector" type="text">
                                    <input value="-" class="qtyminus looking" type="button">
                                    <input value="+" class="qtyplus looking" type="button">
                                </div>
                                <div class="ingredient_slider_btn">
                                    <a href="#" class="single_add_to_cart_button">
                                        <i class="fas fa-shopping-cart"></i>
                                        ADD TO CART
                                    </a>
                                    <a href="#">
                                        <i class="far fa-heart"></i>
                                    </a>
                                </div>
                                <div class="share-wrap">
                                    <a href="#">BUY FROM AMAZON</a>
                                    <a href="#">BUY FROM FLIPCART</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==========================-->
    <!--=        Offer         =-->
    <!--==========================-->
    <section class="home5_offer">
        <div class="vigo_container_two">
            <div class="home5_offer_detail">
                <div class="home5_offer_detail_bg">
                    <img src="{{asset('frontend/media/images/home6/offer-bg.png')}}" alt="">
                </div>
                <div class="home5_offer_inner">
                    <div class="home5_offer_left">
                        <img src="{{asset('frontend/media/images/home6/offer-left.png')}}" alt="">
                    </div>
                    <div class="home5_offer_center">
                        <h2>ONETIME OFFER &#60; </h2>
                        <p>We have limited time offerings for our special suppliment that goes with a special offer. Grab now!</p>
                        <a href="#" class="btn_three">I’M IN</a>
                    </div>
                    <div class="home5_offer_right">
                        <span>$12</span>
                        <img src="{{asset('frontend/media/images/home6/offer-right.png')}}" alt="">
                    </div>
                </div>
                <div class="home5_offer_social">
                    <span>Share Us-</span>
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
        </div>
    </section>

    <!--==========================-->
    <!--=        Feature         =-->
    <!--==========================-->
    <section class="home5_recent home5_feature">
        <div class="vigo_container_one">
            <div class="section_title_four">
                <h2>FEATURE</h2>
            </div>
            <div class="home5_recent_slider owl-carousel">
                <div class="home5_recent_slide">
                    <div class="home5_recent_thumb">
                        <img src="{{asset('frontend/media/images/home6/recent-one.png')}}" alt="gg">
                        <span>$12</span>
                    </div>
                    <div class="home5_recent_appreciate">
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
                    <div class="home5_recent_title">
                        <h3><a href="product-detail.html">Vaxin Regular (500mg), Mild Intake</a></h3>
                    </div>
                    <div class="home5_recent_view_cart clearfix">
                        <a href="#" class="trigger"><i class="fas fa-expand"></i> QUICK VIEW</a>
                        <a href="#"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>
                    </div>
                </div>
                <div class="home5_recent_slide">
                    <div class="home5_recent_thumb">
                        <img src="{{asset('frontend/media/images/home6/recent-two.png')}}" alt="gg">
                        <span>$12</span>
                    </div>
                    <div class="home5_recent_appreciate">
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
                    <div class="home5_recent_title">
                        <h3><a href="product-detail.html">Vaxin Regular (500mg), Mild Intake</a></h3>
                    </div>
                    <div class="home5_recent_view_cart clearfix">
                        <a href="#" class="trigger"><i class="fas fa-expand"></i> QUICK VIEW</a>
                        <a href="#"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>
                    </div>
                </div>
                <div class="home5_recent_slide">
                    <div class="off">
                        -5%
                    </div>
                    <div class="home5_recent_thumb">
                        <img src="{{asset('frontend/media/images/home6/recent-three.png')}}" alt="gg">
                        <span>$12</span>
                    </div>
                    <div class="home5_recent_appreciate">
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
                    <div class="home5_recent_title">
                        <h3><a href="product-detail.html">Vaxin Regular (500mg), Mild Intake</a></h3>
                    </div>
                    <div class="home5_recent_view_cart clearfix">
                        <a href="#" class="trigger"><i class="fas fa-expand"></i> QUICK VIEW</a>
                        <a href="#"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>
                    </div>
                </div>
                <div class="home5_recent_slide">
                    <div class="home5_recent_thumb">
                        <img src="{{asset('frontend/media/images/home6/recent-four.png')}}" alt="gg">
                        <span>$12</span>
                    </div>
                    <div class="home5_recent_appreciate">
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
                    <div class="home5_recent_title">
                        <h3><a href="product-detail.html">Vaxin Regular (500mg), Mild Intake</a></h3>
                    </div>
                    <div class="home5_recent_view_cart clearfix">
                        <a href="#" class="trigger"><i class="fas fa-expand"></i> QUICK VIEW</a>
                        <a href="#"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>
                    </div>
                </div>
                <div class="home5_recent_slide">
                    <div class="home5_recent_thumb">
                        <img src="{{asset('frontend/media/images/home6/recent-three.png')}}" alt="gg">
                        <span>$12</span>
                    </div>
                    <div class="home5_recent_appreciate">
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
                    <div class="home5_recent_title">
                        <h3><a href="product-detail.html">Vaxin Regular (500mg), Mild Intake</a></h3>
                    </div>
                    <div class="home5_recent_view_cart clearfix">
                        <a href="#" class="trigger"><i class="fas fa-expand"></i> QUICK VIEW</a>
                        <a href="#"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>
                    </div>
                </div>
                <div class="home5_recent_slide">
                    <div class="home5_recent_thumb">
                        <img src="{{asset('frontend/media/images/home6/recent-four.png')}}" alt="gg">
                        <span>$12</span>
                    </div>
                    <div class="home5_recent_appreciate">
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
                    <div class="home5_recent_title">
                        <h3><a href="product-detail.html">Vaxin Regular (500mg), Mild Intake</a></h3>
                    </div>
                    <div class="home5_recent_view_cart clearfix">
                        <a href="#" class="trigger"><i class="fas fa-expand"></i> QUICK VIEW</a>
                        <a href="#"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal quickview-wrapper">
        <div class="quickview">
            <div class="container">
                <div class="row">
						<span class="close-qv">
					<i class="material-icons">close</i>
				</span>
                    <div class="ingredient_slider_flex">
                        <div class="ingredient_slider_main">
                            <div class="ingredient_slider_one">
                                <div>
                                    <img src="{{asset('frontend/media/images/ingredient2/ing-one-small.png')}}" alt="">
                                </div>
                                <div>
                                    <img src="{{asset('frontend/media/images/ingredient2/ing-two-small.png')}}" alt="">
                                </div>
                                <div>
                                    <img src="{{asset('frontend/media/images/ingredient2/ing-three-small.png')}}" alt="">
                                </div>
                                <div>
                                    <img src="{{asset('frontend/media/images/ingredient2/ing-one-small.png')}}" alt="">
                                </div>
                                <div>
                                    <img src="{{asset('frontend/media/images/ingredient2/ing-two-small.png')}}" alt="">
                                </div>
                                <div>
                                    <img src="{{asset('frontend/media/images/ingredient2/ing-three-small.png')}}" alt="">
                                </div>
                            </div>
                            <div class="ingredient_slider_two">
                                <div>
                                    <div class="ingredient-img">
                                        <img src="{{asset('frontend/media/images/ingredient2/ing-one.png')}}" alt="">
                                    </div>
                                </div>
                                <div>
                                    <div class="ingredient-img">
                                        <img src="{{asset('frontend/media/images/ingredient2/ing-two.png')}}" alt="">
                                    </div>
                                </div>
                                <div>
                                    <div class="ingredient-img">
                                        <img src="{{asset('frontend/media/images/ingredient2/ing-three.png')}}" alt="">
                                    </div>
                                </div>

                                <div>
                                    <div class="ingredient-img">
                                        <img src="{{asset('frontend/media/images/ingredient2/ing-four.png')}}" alt="">
                                    </div>
                                </div>

                                <div>
                                    <div class="ingredient-img">
                                        <img src="{{asset('frontend/media/images/ingredient2/ing-five.png')}}" alt="">
                                    </div>
                                </div>
                                <div>
                                    <div class="ingredient-img">
                                        <img src="{{asset('frontend/media/images/ingredient2/ing-one.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ingredient_slider_detail">
                            <h4 class="product_title">Vaxin Regular (500mg), Mild Intake lorem ipsum dolor</h4>
                            <p class="product_ratting woocommerce-product-rating">

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

                                <span>(30 Reviews)</span>
                            </p>

                            <div class="product_price">
                                <p class="in-stock">IN STOCK</p>
                                <p class="out-stock">OUT OF STOCK</p>
                                <div class="price">
                                    <ins>
									<span class="woocommerce-Price-amount">
										$12.00
									</span>
                                    </ins>

                                    <del>
									<span class="woocommerce-Price-amount">
										$20.00
									</span>
                                    </del>
                                </div>
                            </div>

                            <form action="#" class="product-cart" method="post">
                                <div class="product-quantity quantity">
                                    <input name="quantity" value="1" data-product-qty="" class="cart__quantity-selector quantity-selector" type="text">
                                    <input value="-" class="qtyminus looking" type="button">
                                    <input value="+" class="qtyplus looking" type="button">
                                </div>
                                <div class="ingredient_slider_btn">
                                    <a href="#" class="single_add_to_cart_button">
                                        <i class="fas fa-shopping-cart"></i>
                                        ADD TO CART
                                    </a>
                                    <a href="#">
                                        <i class="far fa-heart"></i>
                                    </a>
                                </div>
                                <div class="share-wrap">
                                    <a href="#">BUY FROM AMAZON</a>
                                    <a href="#">BUY FROM FLIPCART</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==========================-->
    <!--=        Video         =-->
    <!--==========================-->
    <section class="home5_video">
        <div class="vigo_container_two">
            <div class="home5_video_total">
                <div class="section_title_four">
                    <h2>LAB SNEAK PEEK</h2>
                </div>
                <div class="home5_video_left">
                    <p>Lorem ipsum dolor sit ametures & consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="home5_video_social">
                        <span>SHARE US -</span>
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
                <div class="youtube-wrapper home5_video_right">
                    <div class="youtube-poster" data-bg-image="{{asset('frontend/media/images/home6/video-5.png')}}"></div>
                    <iframe src="https://www.youtube.com/embed/pCo40Y6UpWg" allowfullscreen></iframe>
                    <i class="material-icons play">
                        play_arrow
                    </i>
                    <i class="material-icons pause">
                        pause
                    </i>
                </div>
            </div>
        </div>
    </section>

    <!--==========================-->
    <!--=        Video         =-->
    <!--==========================-->
{{--    <section class="home5_pricing">--}}
{{--        <div class="vigo_container_two">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-4 col-md-6">--}}
{{--                    <div class="home5_pricing_single">--}}
{{--                        <h3>FREE</h3>--}}
{{--                        <span>SHIPPING POLICY</span>--}}
{{--                        <i class="fas fa-ship"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-4 col-md-6">--}}
{{--                    <div class="home5_pricing_single">--}}
{{--                        <h3>14 DAYS</h3>--}}
{{--                        <span>MONEYBACK GURANTEED</span>--}}
{{--                        <i class="fab fa-android"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-4 col-md-6">--}}
{{--                    <div class="home5_pricing_single">--}}
{{--                        <h3>CALL</h3>--}}
{{--                        <span>SUPPORT INCLUDED</span>--}}
{{--                        <i class="fas fa-headphones"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <!--==========================-->
    <!--=        Video         =-->
    <!--==========================-->
    <section class="home5-most-sold" data-bg-image="{{asset('frontend/media/images/home6/most-sold.jpg')}}">
        <div class="vigo_container_one">
            <div class="section_title_four">
                <h2>MOST SOLD</h2>
            </div>
            <div class="row">
                <div class="col-xl-2 col-sm-6 col-lg-3">
                    <div class="sn_related_product">
                        <div class="sn_pd_img">
                            <a href="#">
                                <img src="{{asset('frontend/media/images/banner-two/related-pd-one.png')}}" alt="">
                            </a>
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
                            <h5>
                                <a href="#">Vaxin Regular (500mg), Mild Intake</a>
                            </h5>
                            <ins>
                                <span>$16.00</span>
                            </ins>
                            <del>
                                <span>$20.00</span>
                            </del>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 col-lg-3">
                    <div class="sn_related_product">
                        <div class="sn_pd_img">
                            <a href="#">
                                <img src="{{asset('frontend/media/images/banner-two/relate-pd-two.png')}}" alt="">
                            </a>
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
                            <h5>
                                <a href="#">Vaxin Regular (500mg), Mild Intake</a>
                            </h5>
                            <ins>
                                <span>$16.00</span>
                            </ins>
                            <del>
                                <span>$20.00</span>
                            </del>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 col-lg-3">
                    <div class="sn_related_product">
                        <div class="sn_pd_img">
                            <a href="#">
                                <img src="{{asset('frontend/media/images/banner-two/related-pd-three.png')}}" alt="">
                            </a>
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
                            <h5>
                                <a href="#">Vaxin Regular (500mg), Mild Intake</a>
                            </h5>
                            <ins>
                                <span>$16.00</span>
                            </ins>
                            <del>
                                <span>$20.00</span>
                            </del>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 col-lg-3">
                    <div class="sn_related_product">
                        <div class="sn_pd_img">
                            <a href="#">
                                <img src="{{asset('frontend/media/images/banner-two/related-pd-four.png')}}" alt="">
                            </a>
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
                            <h5>
                                <a href="#">Vaxin Regular (500mg), Mild Intake</a>
                            </h5>
                            <ins>
                                <span>$16.00</span>
                            </ins>
                            <del>
                                <span>$20.00</span>
                            </del>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 col-lg-3">
                    <div class="sn_related_product">
                        <div class="sn_pd_img">
                            <a href="#">
                                <img src="{{asset('frontend/media/images/banner-two/related-pd-five.png')}}" alt="">
                            </a>
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
                            <h5>
                                <a href="#">Vaxin Regular (500mg), Mild Intake</a>
                            </h5>
                            <ins>
                                <span>$16.00</span>
                            </ins>
                            <del>
                                <span>$20.00</span>
                            </del>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 col-lg-3">
                    <div class="sn_related_product">
                        <div class="sn_pd_img">
                            <a href="#">
                                <img src="{{asset('frontend/media/images/banner-two/related-pd-one.png')}}" alt="">
                            </a>
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
                            <h5>
                                <a href="#">Vaxin Regular (500mg), Mild Intake</a>
                            </h5>
                            <ins>
                                <span>$16.00</span>
                            </ins>
                            <del>
                                <span>$20.00</span>
                            </del>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 col-lg-3">
                    <div class="sn_related_product">
                        <div class="sn_pd_img">
                            <a href="#">
                                <img src="{{asset('frontend/media/images/banner-two/relate-pd-two.png')}}" alt="">
                            </a>
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
                            <h5>
                                <a href="#">Vaxin Regular (500mg), Mild Intake</a>
                            </h5>
                            <ins>
                                <span>$16.00</span>
                            </ins>
                            <del>
                                <span>$20.00</span>
                            </del>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 col-lg-3">
                    <div class="sn_related_product">
                        <div class="sn_pd_img">
                            <a href="#">
                                <img src="{{asset('frontend/media/images/banner-two/related-pd-three.png')}}" alt="">
                            </a>
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
                            <h5>
                                <a href="#">Vaxin Regular (500mg), Mild Intake</a>
                            </h5>
                            <ins>
                                <span>$16.00</span>
                            </ins>
                            <del>
                                <span>$20.00</span>
                            </del>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 col-lg-3">
                    <div class="sn_related_product">
                        <div class="sn_pd_img">
                            <a href="#">
                                <img src="{{asset('frontend/media/images/banner-two/related-pd-four.png')}}" alt="">
                            </a>
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
                            <h5>
                                <a href="#">Vaxin Regular (500mg), Mild Intake</a>
                            </h5>
                            <ins>
                                <span>$16.00</span>
                            </ins>
                            <del>
                                <span>$20.00</span>
                            </del>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 col-lg-3">
                    <div class="sn_related_product">
                        <div class="sn_pd_img">
                            <a href="#">
                                <img src="{{asset('frontend/media/images/banner-two/related-pd-five.png')}}" alt="">
                            </a>
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
                            <h5>
                                <a href="#">Vaxin Regular (500mg), Mild Intake</a>
                            </h5>
                            <ins>
                                <span>$16.00</span>
                            </ins>
                            <del>
                                <span>$20.00</span>
                            </del>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 col-lg-3">
                    <div class="sn_related_product">
                        <div class="sn_pd_img">
                            <a href="#">
                                <img src="{{asset('frontend/media/images/banner-two/related-pd-one.png')}}" alt="">
                            </a>
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
                            <h5>
                                <a href="#">Vaxin Regular (500mg), Mild Intake</a>
                            </h5>
                            <ins>
                                <span>$16.00</span>
                            </ins>
                            <del>
                                <span>$20.00</span>
                            </del>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 col-lg-3">
                    <div class="sn_related_product">
                        <div class="sn_pd_img">
                            <a href="#">
                                <img src="{{asset('frontend/media/images/banner-two/relate-pd-two.png')}}" alt="">
                            </a>
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
                            <h5>
                                <a href="#">Vaxin Regular (500mg), Mild Intake</a>
                            </h5>
                            <ins>
                                <span>$16.00</span>
                            </ins>
                            <del>
                                <span>$20.00</span>
                            </del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==========================-->
    <!--=        Video         =-->
    <!--==========================-->
    <section class="call_to_action_green">
        <div class="vigo_container_two">
            <div class="call_to_action_area_two">
                <div class="row">
                    <div class="col-xl-10 offset-xl-2">
                        <div class="call_to_action_hello">
                            <div class="call_to_action_left_two">
                                <h2>LIVE HEALTHY?</h2>
                                <p>Try out our suppliment & enjoy the healthiest life. Discounts end soon!</p>
                            </div>
                            <div class="call_to_action_right_two">
                                <a href="#" class="btn_four">Purchase</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==========================-->
    <!--=        Footer         =-->
    <!--==========================-->
    <footer class="footer_five_area">
        <div class="vigo_container_one">
            <div class="footer_five_top">
                <div class="footer_five_top_left">
                    <a href="#" class="logo">
                        <img src="{{asset('frontend/media/images/home6/footer-logo.png')}}" alt="#">
                    </a>
                </div>
                <div class="footer_five_top_right">
                    <form action="#">
                        <label>
                            <i class="fas fa-arrow-right"></i>
                            <span>SUBSCRIBE TO OUR NEWSLETTER FOR OFFERS & PROMOTIONALS.</span>
                        </label>
                        <input type="text" placeholder="type your email here...">
                        <button>
                            <i class="material-icons">
                                send
                            </i>
                        </button>
                    </form>
                </div>
            </div>
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
                <div class="footer_four_bottom_right">
                    <a href="#">
                        <img src="{{asset('frontend/media/images/home6/visa.png')}}" alt="">
                    </a>
                    <a href="#">
                        <img src="{{asset('frontend/media/images/home6/american-express.png')}}" alt="">
                    </a>
                    <a href="#">
                        <img src="{{asset('frontend/media/images/home6/discover.png')}}" alt="">
                    </a>
                    <a href="#">
                        <img src="{{asset('frontend/media/images/home6/paypal.png')}}" alt="">
                    </a>
                    <a href="#">
                        <img src="{{asset('frontend/media/images/home6/stripe.png')}}" alt="">
                    </a>
                    <a href="#">
                        <img src="{{asset('frontend/media/images/home6/nettler.png')}}" alt="">
                    </a>
                    <a href="#">
                        <img src="{{asset('frontend/media/images/home6/payoneer.png')}}" alt="">
                    </a>
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