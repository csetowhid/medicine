@extends('frontend.master')
@section('content')
    <section class="mobile-menu-inner mobile-menu-inner-two">
        <div class="mobile_accor_togo">
            <div class="mobile_accor_logo">
                <a href="{{route('index')}}">
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
                    <a href="{{route('index')}}" class="dropdownlink">Home</a>
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


    {{--    <section class="modal" id="loading-subscribe1">--}}
    {{--        <div class="modal-dialog">--}}
    {{--            <div class="loading-subscribe loading-subscribe-white">--}}
    {{--                <div class="loading-subscribe-inner">--}}
    {{--                    <div class="loading-subscribe-img">--}}
    {{--                        <img src="{{asset('frontend/media/images/popup/Light.jpg')}}" alt="">--}}
    {{--                    </div>--}}
    {{--                    <div class="loading-subscribe-detail">--}}
    {{--                        <div class="loading-subscribe-top">--}}
    {{--                            <h1>Want <span>X Factor</span><br> Within ?</h1>--}}
    {{--                            <p>Subscribe us and get promotional discounts upto massive <span>90% OFF!</span> Type your email below now!</p>--}}
    {{--                        </div>--}}
    {{--                        <form action="#">--}}
    {{--                            <p class="loading-subscribe-input">--}}
    {{--                                <input type="text" placeholder="Click & type your email here">--}}
    {{--                            </p>--}}
    {{--                            <p class="loading-subscribe-submit">--}}
    {{--                                <button>Subscribe--}}
    {{--                                    <i class="material-icons">--}}
    {{--                                        keyboard_backspace--}}
    {{--                                    </i>--}}
    {{--                                </button>--}}
    {{--                            </p>--}}
    {{--                        </form>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="remove">--}}
    {{--                    <button type="button" data-dismiss="modal">--}}
    {{--                        <i class="material-icons">--}}
    {{--                            clear--}}
    {{--                        </i>--}}
    {{--                    </button>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    {{--    <section class="megamenu-cookies">--}}
    {{--        <div class="remove">--}}
    {{--            <i class="material-icons">--}}
    {{--                clear--}}
    {{--            </i>--}}
    {{--        </div>--}}
    {{--        <p>This Website uses cookies to ensure you get the best experience in our website. We also use analytics software to track data of visitors. See more info <a href="#">here</a></p>--}}
    {{--        <a class="agree" href="#">I agree</a>--}}
    {{--    </section>--}}

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
                <h2>Browse Medicine</h2>
            </div>
            {{--            <div class="home5_recent_slider owl-carousel">--}}
            {{--                <div class="home5_recent_slide">--}}
            {{--                    <div class="off">--}}
            {{--                        - 8%--}}
            {{--                    </div>--}}
            {{--                    <div class="home5_recent_thumb">--}}
            {{--                        <img src="{{asset('frontend/media/images/home6/recent-one.png')}}" alt="gg">--}}
            {{--                        <span>$12</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="home5_recent_appreciate">--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                    </div>--}}
            {{--                    <div class="home5_recent_title">--}}
            {{--                        <h3><a href="product-detail.html">Vaxin Regular (500mg), Mild Intake</a></h3>--}}
            {{--                    </div>--}}
            {{--                    <div class="home5_recent_view_cart clearfix">--}}
            {{--                        <a href="#" class="trigger"><i class="fas fa-expand"></i> QUICK VIEW</a>--}}
            {{--                        <a href="#"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="home5_recent_slide">--}}
            {{--                    <div class="home5_recent_thumb">--}}
            {{--                        <img src="{{asset('frontend/media/images/home6/recent-two.png')}}" alt="gg">--}}
            {{--                        <span>$12</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="home5_recent_appreciate">--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                    </div>--}}
            {{--                    <div class="home5_recent_title">--}}
            {{--                        <h3><a href="product-detail.html">Vaxin Regular (500mg), Mild Intake</a></h3>--}}
            {{--                    </div>--}}
            {{--                    <div class="home5_recent_view_cart clearfix">--}}
            {{--                        <a href="#" class="trigger"><i class="fas fa-expand"></i> QUICK VIEW</a>--}}
            {{--                        <a href="#"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="home5_recent_slide">--}}
            {{--                    <div class="home5_recent_thumb">--}}
            {{--                        <img src="{{asset('frontend/media/images/home6/recent-three.png')}}" alt="gg">--}}
            {{--                        <span>$12</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="home5_recent_appreciate">--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                    </div>--}}
            {{--                    <div class="home5_recent_title">--}}
            {{--                        <h3><a href="product-detail.html">Vaxin Regular (500mg), Mild Intake</a></h3>--}}
            {{--                    </div>--}}
            {{--                    <div class="home5_recent_view_cart clearfix">--}}
            {{--                        <a href="#" class="trigger"><i class="fas fa-expand"></i> QUICK VIEW</a>--}}
            {{--                        <a href="#"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="home5_recent_slide">--}}
            {{--                    <div class="home5_recent_thumb">--}}
            {{--                        <img src="{{asset('frontend/media/images/home6/recent-four.png')}}" alt="gg">--}}
            {{--                        <span>$12</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="home5_recent_appreciate">--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                    </div>--}}
            {{--                    <div class="home5_recent_title">--}}
            {{--                        <h3><a href="product-detail.html">Vaxin Regular (500mg), Mild Intake</a></h3>--}}
            {{--                    </div>--}}
            {{--                    <div class="home5_recent_view_cart clearfix">--}}
            {{--                        <a href="#" class="trigger"><i class="fas fa-expand"></i> QUICK VIEW</a>--}}
            {{--                        <a href="#"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="home5_recent_slide">--}}
            {{--                    <div class="home5_recent_thumb">--}}
            {{--                        <img src="{{asset('frontend/media/images/home6/recent-three.png')}}" alt="gg">--}}
            {{--                        <span>$12</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="home5_recent_appreciate">--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="#">--}}
            {{--                            <i class="far fa-star"></i>--}}
            {{--                        </a>--}}
            {{--                    </div>--}}
            {{--                    <div class="home5_recent_title">--}}
            {{--                        <h3><a href="product-detail.html">Vaxin Regular (500mg), Mild Intake</a></h3>--}}
            {{--                    </div>--}}
            {{--                    <div class="home5_recent_view_cart clearfix">--}}
            {{--                        <a href="#" class="trigger"><i class="fas fa-expand"></i> QUICK VIEW</a>--}}
            {{--                        <a href="#"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            <div class="home5_recent_slide d-flex flex-row">
                @if(isset($alpha))
                    @foreach($alpha as $al)
                        <div class="home5_recent_appreciate">
{{--                            <a href="{{URL::to('/alpha/'.Str::lower($al->alpha_name))}}">--}}
                            <a href="{{URL::to('/alpha/'.($al->id))}}">
                                <button class="btn btn-success">
                                    {{$al->alpha_name}}
                                </button>
                            </a>
                        </div>

                    @endforeach
                @endif
                {{--                    <div class="home5_recent_thumb">--}}
                {{--                        <img src="{{asset('frontend/media/images/home6/recent-four.png')}}" alt="gg">--}}
                {{--                        <span>$12</span>--}}
                {{--                    </div>--}}
                {{--                    <div class="home5_recent_appreciate">--}}
                {{--                        <a href="#">--}}
                {{--                            <i class="far fa-star"></i>--}}
                {{--                        </a>--}}
                {{--                        <a href="#">--}}
                {{--                            <i class="far fa-star"></i>--}}
                {{--                        </a>--}}
                {{--                        <a href="#">--}}
                {{--                            <i class="far fa-star"></i>--}}
                {{--                        </a>--}}
                {{--                        <a href="#">--}}
                {{--                            <i class="far fa-star"></i>--}}
                {{--                        </a>--}}
                {{--                        <a href="#">--}}
                {{--                            <i class="far fa-star"></i>--}}
                {{--                        </a>--}}
                {{--                    </div>--}}
                {{--                    <div class="home5_recent_title">--}}
                {{--                        <h3><a href="product-detail.html">Vaxin Regular (500mg), Mild Intake</a></h3>--}}
                {{--                    </div>--}}
                {{--                    <div class="home5_recent_view_cart clearfix">--}}
                {{--                        <a href="#" class="trigger"><i class="fas fa-expand"></i> QUICK VIEW</a>--}}
                {{--                        <a href="#"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>--}}
                {{--                    </div>--}}
            </div>
            {{--            </div>--}}
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
    {{--    <section class="home5_offer">--}}
    {{--        <div class="vigo_container_two">--}}
    {{--            <div class="home5_offer_detail">--}}
    {{--                <div class="home5_offer_detail_bg">--}}
    {{--                    <img src="{{asset('frontend/media/images/home6/offer-bg.png')}}" alt="">--}}
    {{--                </div>--}}
    {{--                <div class="home5_offer_inner">--}}
    {{--                    <div class="home5_offer_left">--}}
    {{--                        <img src="{{asset('frontend/media/images/home6/offer-left.png')}}" alt="">--}}
    {{--                    </div>--}}
    {{--                    <div class="home5_offer_center">--}}
    {{--                        <h2>ONETIME OFFER &#60; </h2>--}}
    {{--                        <p>We have limited time offerings for our special suppliment that goes with a special offer. Grab now!</p>--}}
    {{--                        <a href="#" class="btn_three">I’M IN</a>--}}
    {{--                    </div>--}}
    {{--                    <div class="home5_offer_right">--}}
    {{--                        <span>$12</span>--}}
    {{--                        <img src="{{asset('frontend/media/images/home6/offer-right.png')}}" alt="">--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="home5_offer_social">--}}
    {{--                    <span>Share Us-</span>--}}
    {{--                    <a href="#">--}}
    {{--                        <i class="fab fa-facebook-f"></i>--}}
    {{--                    </a>--}}
    {{--                    <a href="#">--}}
    {{--                        <i class="fab fa-twitter"></i>--}}
    {{--                    </a>--}}
    {{--                    <a href="#">--}}
    {{--                        <i class="fab fa-medium-m"></i>--}}
    {{--                    </a>--}}
    {{--                    <a href="#">--}}
    {{--                        <i class="fab fa-tumblr"></i>--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

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



    <section class="home5-most-sold" data-bg-image="{{asset('frontend/media/images/home6/most-sold.jpg')}}">
        <div class="vigo_container_one">
            <div class="section_title_four">
                <h2>Blog</h2>
            </div>

            <div class="blog_all_list">
                <div class="row">
                    <div class="col-md-6">
                        <div class="blog_single_list">
                            <div class="blog_single_list_img">
                                <div class="post-thumbnail">
                                    <img src="{{asset('frontend/media/images/home6/blog-one.jpg')}}" alt="!!">
                                </div>
                                <a href="#" class="blog_single_list_btn">
                            <span>read</span>
                            <i class="material-icons">
                                arrow_forward
                            </i>
                        </a>
                            </div>
                            <div class="blog_single_list_content">
                                <h3 class="blog_title">
                                    <a href="#">Rich Diet You Must Take Along With All Body Suppliment Support.</a>
                                </h3>
                                <div class="blog_meta">
                                    <a href="#">
                                <span>24<sup>th</sup> December</span>
                            </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog_single_list">
                            <div class="blog_single_list_img">
                                <div class="post-thumbnail">
                                    <img src="{{asset('frontend/media/images/home6/blog-two.jpg')}}" alt="!!">
                                </div>
                                <a href="#" class="blog_single_list_btn">
                            <span>read</span>
                            <i class="material-icons">
                                arrow_forward
                            </i>
                        </a>
                            </div>
                            <div class="blog_single_list_content">
                                <h3 class="blog_title">
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</a>
                                </h3>
                                <div class="blog_meta">
                                    <a href="#">
                                <span>24<sup>th</sup> December</span>
                            </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="blog_single_list">
                            <div class="blog_single_list_img">
                                <div class="post-thumbnail">
                                    <img src="{{asset('frontend/media/images/home6/blog-three.jpg')}}" alt="!!">
                                </div>
                                <a href="#" class="blog_single_list_btn">
                                <span>read</span>
                                <i class="material-icons">
                                    arrow_forward
                                </i>
                                </a>
                            </div>
                            <div class="blog_single_list_content">
                                <h3 class="blog_title">
                                    <a href="#">Rich Diet You Must Take Along With All Body Suppliment Support.</a>
                                </h3>
                                <div class="blog_meta">
                                    <a href="#">
                                <span>24<sup>th</sup> December</span>
                            </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog_single_list">
                            <div class="blog_single_list_img">
                                <div class="post-thumbnail">
                                    <img src="{{asset('frontend/media/images/home6/blog-one.jpg')}}" alt="!!">
                                </div>
                                <a href="#" class="blog_single_list_btn">
                                    <span>read</span>
                                    <i class="material-icons">
                                        arrow_forward
                                    </i>
                                </a>
                            </div>
                            <div class="blog_single_list_content">
                                <h3 class="blog_title">
                                    <a href="#">Rich Diet You Must Take Along With All Body Suppliment Support.</a>
                                </h3>
                                <div class="blog_meta">
                                    <a href="#">
                                <span>24<sup>th</sup> December</span>
                            </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                
            </div>

        </div>
    </section>
                    
                

    <section class="home5_recent home5_feature">
        <div class="vigo_container_one">
            <div class="section_title_four">
                <h2>Most Popular</h2>
            </div>
            <div class="home5_recent_slider owl-carousel">
                @foreach($medicine as $med)

                <div class="home5_recent_slide">
                    <div class="home5_recent_thumb">
                        @if(!empty($med->medicine_image))
                                    <img src="{{URL::to($med->medicine_image)}}" style="width: 230px;height:200px;">
                        @else
                                    <img src="{{asset('upload/no_image.jpg')}}" style="width: 230px;height:200px;">
                        @endif
                        
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
                        <h3><a href="product-detail.html">{{$med->medicine_name}}</a></h3>
                    </div>
                    <div class="home5_recent_view_cart clearfix">
                        <a href="#" class="trigger"><i class="fas fa-expand"></i> QUICK VIEW</a>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
    
@endsection
