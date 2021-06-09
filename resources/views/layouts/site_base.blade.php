@php
    $categories = App\Category::where('status','Active')->get();
    $brands = App\Brand::where('status','Active')->get();
    $cart = App\Cart::where('user_id', '1')->get();
@endphp
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <!-- Site title -->
    <title>Phase 2</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('site/assets/img/favicon.ico')}}" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('site/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font-Awesome CSS -->
    <link href="{{ asset('site/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- helper class css -->
    <link href="{{ asset('site/assets/css/helper.min.css') }}" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="{{ asset('site/assets/css/plugins.css') }}" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="{{ asset('site/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('site/assets/css/skin-default.css') }}" rel="stylesheet" id="galio-skin">
</head>

<body>

    <!-- color switcher start -->
    <div class="color-switcher">
        <div class="color-switcher-inner">
            <div class="switcher-icon">
                <i class="fa fa-cog fa-spin"></i>
            </div>

            <div class="switcher-panel-item">
                <h3>Color Schemes</h3>
                <ul class="nav flex-wrap colors">
                    <li class="default active" data-color="default" data-toggle="tooltip" data-placement="top" title="Red"></li>
                    <li class="green" data-color="green" data-toggle="tooltip" data-placement="top" title="Green"></li>
                    <li class="soft-green" data-co
                    lor="soft-green" data-toggle="tooltip" data-placement="top" title="Soft-Green"></li>
                    <li class="sky-blue" data-color="sky-blue" data-toggle="tooltip" data-placement="top" title="Sky-Blue"></li>
                    <li class="orange" data-color="orange" data-toggle="tooltip" data-placement="top" title="Orange"></li>
                    <li class="violet" data-color="violet" data-toggle="tooltip" data-placement="top" title="Violet"></li>
                </ul>
            </div>

            <div class="switcher-panel-item">
                <h3>Layout Style</h3>
                <ul class="nav layout-changer">
                    <li><button class="btn-layout-changer active" data-layout="wide">Wide</button></li>
                    <li><button class="btn-layout-changer" data-layout="boxed">Boxed</button></li>
                </ul>
            </div>

            <div class="switcher-panel-item bg">
                <h3>Background Pattern</h3>
                <ul class="nav flex-wrap bgbody-style bg-pattern">
                    <li><img src="{{ asset('site/assets/img/bg-panel/bg-pettern/1.png') }}" alt="Pettern"></li>
                    <li><img src="{{ asset('site/assets/img/bg-panel/bg-pettern/2.png') }}" alt="Pettern"></li>
                    <li><img src="{{ asset('site/assets/img/bg-panel/bg-pettern/3.png') }}" alt="Pettern"></li>
                    <li><img src="{{ asset('site/assets/img/bg-panel/bg-pettern/4.png') }}" alt="Pettern"></li>
                    <li><img src="{{ asset('site/assets/img/bg-panel/bg-pettern/5.png') }}" alt="Pettern"></li>
                    <li><img src="{{ asset('site/assets/img/bg-panel/bg-pettern/6.png') }}" alt="Pettern"></li>
                </ul>
            </div>

            <div class="switcher-panel-item bg">
                <h3>Background Image</h3>
                <ul class="nav flex-wrap bgbody-style bg-img">
                    <li><img src="{{ asset('site/assets/img/bg-panel/bg-img/01.jpg') }}" alt="Images"></li>
                    <li><img src="{{ asset('site/assets/img/bg-panel/bg-img/02.jpg') }}" alt="Images"></li>
                    <li><img src="{{ asset('site/assets/img/bg-panel/bg-img/03.jpg') }}" alt="Images"></li>
                    <li><img src="{{ asset('site/assets/img/bg-panel/bg-img/04.jpg') }}" alt="Images"></li>
                    <li><img src="{{ asset('site/assets/img/bg-panel/bg-img/05.jpg') }}" alt="Images"></li>
                    <li><img src="{{ asset('site/assets/img/bg-panel/bg-img/06.jpg') }}" alt="Images"></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- color switcher end -->

    <div class="wrapper">

        <!-- header area start -->
        <header>

            <!-- header top start -->
            <div class="header-top-area bg-gray text-center text-md-left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <div class="header-call-action">
                                <a href="#">
                                    <i class="fa fa-envelope"></i>
                                    phase2@website.com
                                </a>
                                <a href="#">
                                    <i class="fa fa-phone"></i>
                                    phase2 phone number
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="header-top-right float-md-right float-none">
                                <nav>
                                    <ul>
                                        <li>
                                            <div class="dropdown header-top-dropdown">
                                                <a class="dropdown-toggle" id="myaccount" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    my account
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="myaccount">
                                                    <a class="dropdown-item" href="{{route('my-account')}}">my account</a>
                                                    <a class="dropdown-item" href="{{route('register-login')}}"> login</a>
                                                    <a class="dropdown-item" href="{{route('register-login')}}">register</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="{{route('cart')}}">my cart</a>
                                        </li>
                                        <li>
                                            <a href="{{route('checkout')}}">checkout</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top end -->

            <!-- header middle start -->
            <div class="header-middle-area pt-20 pb-20">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="brand-logo">
                                <a href="/">
                                    <img src="{{ asset('site/assets/img/logo/logo.png') }}" alt="brand logo">
                                </a>
                            </div>
                        </div> <!-- end logo area -->
                        <div class="col-lg-9">
                            <div class="header-middle-right">
                                <div class="header-middle-shipping mb-20">
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>Working time</h5>
                                            <span>Mon- Sun: 8.00 - 18.00</span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>free shipping</h5>
                                            <span>On order over #5000</span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>money back 100%</h5>
                                            <span>Within 30 Days after delivery</span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                </div>
                                <div class="header-middle-block">
                                    <div class="header-middle-searchbox">
                                        <input type="text" placeholder="Search...">
                                        <button class="search-btn"><i class="fa fa-search"></i></button>
                                    </div>
                                    <div class="header-mini-cart">
                                        <div class="mini-cart-btn">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="cart-notification">2</span>
                                        </div>
                                        <div class="cart-total-price">
                                            <span>total</span>
                                            #50.00
                                        </div>
                                        <ul class="cart-list">
                                            <li>
                                                <div class="cart-img">
                                                    <a href="product-details.html"><img src="{{ asset('site/assets/img/cart/cart-1.jpg') }}"
                                                            alt=""></a>
                                                </div>
                                                <div class="cart-info">
                                                    <h4><a href="product-details.html">simple product 09</a></h4>
                                                    <span>#60.00</span>
                                                </div>
                                                <div class="del-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart-img">
                                                    <a href="product-details.html"><img src="{{ asset('site/assets/img/cart/cart-2.jpg') }}"
                                                            alt=""></a>
                                                </div>
                                                <div class="cart-info">
                                                    <h4><a href="product-details.html">virtual product 10</a></h4>
                                                    <span>#50.00</span>
                                                </div>
                                                <div class="del-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                            </li>
                                            <li class="mini-cart-price">
                                                <span class="subtotal">subtotal : </span>
                                                <span class="subtotal-price">#88.66</span>
                                            </li>
                                            <li class="checkout-btn">
                                                <a href="{{route('cart')}}">checkout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header middle end -->

            <!-- main menu area start -->
            <div class="main-header-wrapper bdr-bottom1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-header-inner">
                                <div class="category-toggle-wrap">
                                    <div class="category-toggle">
                                        category
                                        <div class="cat-icon">
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div>
                                    <nav class="category-menu hm-1">
                                        <ul>
                                            @foreach ($categories as $category)
                                            <li><a href="{{ route('products-by-category', $category->name )}}"><i class="fa fa-circle"></i>
                                                {{$category->name}} <span>({{count($category->products)}})</span></a></li>
                                            @endforeach
                                            
                                        </ul>
                                    </nav>
                                </div>
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="active"><a href="/"><i class="fa fa-home"></i>Home</a>
                                            </li>
                                            <li><a href="{{ route('shop') }}">shop</a>
                                            </li>
                                            <li><a href="{{ route('contact-us') }}">Contact us</a></li>
                                            <li>
                                                <form id="mc-form" action="{{ route('shopping-setting') }}" method="post" id="shopping-form">
                                                    @csrf
                                                    <select name="shopping_type" id="shopping-type">
                                                        <option value="retail">Retail</option>
                                                        <option value="wholesale">Wholesale</option>
                                                    </select><button style="background-color: #d8373e; color: white; font-weight: 600" class="btn" id="mc-submit">set</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-block d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main menu area end -->

        </header>
        <!-- header area end -->

        @yield('content')

        <!-- brand area start -->
        <div class="brand-area pt-4 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title mb-30">
                            <div class="title-icon">
                                <i class="fa fa-crop"></i>
                            </div>
                            <h3>Popular Brand</h3>
                        </div> <!-- section title end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="brand-active slick-padding slick-arrow-style">
                            @foreach ($brands as $brand)
                                <div class="brand-item text-center">
                                    <a style="color: gray; font-weight: 800" href="{{ route('products-by-brand', $brand->name )}}"> 
                                        @php
                                            echo strtoupper($brand->name);
                                        @endphp 
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand area end -->

        <!-- footer area start -->
        <footer>
            <!-- footer top start -->
            <div class="footer-top bg-black pt-14 pb-14">
                <div class="container">
                    <div class="footer-top-wrapper">
                        <div class="newsletter__wrap">
                            <div class="newsletter__title">
                                <div class="newsletter__icon">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                @if (Session::get('shopping_type') == "wholesale")
                                    <div class="newsletter__content">
                                        <h3>Want to shop Retail?</h3>
                                        {{-- <p>Duis autem vel eum iriureDuis autem vel eum</p> --}}
                                    </div>
                                @else
                                <div class="newsletter__content">
                                    <h3>Want to shop wholesale?</h3>
                                    {{-- <p>Duis autem vel eum iriureDuis autem vel eum</p> --}}
                                </div>
                                @endif
                                
                            </div>
                            <div class="newsletter__box">
                                @if (Session::get('shopping_type') == "wholesale")
                                    <form action="{{ route('shopping-setting') }}" id="mc-form" method="POST">
                                        @csrf
                                        <input name="shopping_type" value="retail" style="opacity: 0" type="text" id="mc-email" autocomplete="off" placeholder="wholesale">
                                        <button class="btn" id="mc-submit">shop now!</button>
                                    </form>
                                @else
                                    <form action="{{ route('shopping-setting') }}" id="mc-form" method="POST">
                                        @csrf
                                        <input name="shopping_type" value="wholesale" style="opacity: 0" type="text" id="mc-email" autocomplete="off" placeholder="wholesale">
                                        <button class="btn" id="mc-submit">shop now!</button>
                                    </form>
                                @endif
                            </div>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                        <div class="social-icons">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer top end -->

            <!-- footer main start -->
            <div class="footer-widget-area pt-40 pb-38 pb-sm-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-30">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>contact us</h4>
                                </div>
                                <div class="widget-body">
                                    {{-- <ul class="location">
                                        <li><i class="fa fa-envelope"></i>support@galio.com</li>
                                        <li><i class="fa fa-phone"></i>(800) 0123 456 789</li>
                                        <li><i class="fa fa-map-marker"></i>Address: 1234 - Bandit Tringi Aliquam
                                            Vitae. New York</li>
                                    </ul> --}}
                                    <a class="map-btn" href="contact-us.html">open in google map</a>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-30">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>my account</h4>
                                </div>
                                <div class="widget-body">
                                    {{-- <ul>
                                        <li><a href="#">my account</a></li>
                                        <li><a href="#">my cart</a></li>
                                        <li><a href="#">checkout</a></li>
                                        <li><a href="#">my wishlist</a></li>
                                        <li><a href="#">login</a></li>
                                    </ul> --}}
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-30">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>short code</h4>
                                </div>
                                <div class="widget-body">
                                    {{-- <ul>
                                        <li><a href="#">gallery</a></li>
                                        <li><a href="#">accordion</a></li>
                                        <li><a href="#">carousel</a></li>
                                        <li><a href="#">map</a></li>
                                        <li><a href="#">tab</a></li>
                                    </ul> --}}
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-30">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>product tags</h4>
                                </div>
                                <div class="widget-body">
                                    {{-- <ul>
                                        <li><a href="#">computer</a></li>
                                        <li><a href="#">camera</a></li>
                                        <li><a href="#">smart phone</a></li>
                                        <li><a href="#">watch</a></li>
                                        <li><a href="#">tablet</a></li>
                                    </ul> --}}
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                    </div>
                </div>
            </div>
            <!-- footer main end -->

            <!-- footer bootom start -->
            <div class="footer-bottom-area bg-gray pt-20 pb-20">
                <div class="container">
                    <div class="footer-bottom-wrap">
                        <div class="copyright-text">
                            <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                        </div>
                        <div class="payment-method-img">
                            <img src="{{ asset('site/assets/img/payment.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer bootom end -->

        </footer>
        <!-- footer area end -->

    </div>


    <!-- Quick view modal start -->
    {{-- <div class="modal" id="quick_view">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider slick-arrow-style_2 mb-20">
                                    <div class="pro-large-img">
                                        <img src="{{ asset('site/assets/img/product/product-details-img1.jpg') }}" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des mt-md-34 mt-sm-34">
                                    <div class="availability mt-10">
                                        <h5>Availability:</h5>
                                        <span>1 in stock</span>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">#160.00</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
                                        Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea
                                        dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris
                                        consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="quantity-cart-box d-flex align-items-center mt-20">
                                        <div class="quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </div>
                                        <div class="action_link">
                                            <a class="buy-btn" href="#">add to cart<i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Quick view modal end -->

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->



    <!--All jQuery, Third Party Plugins & Activation (main.js') }}) Files-->
    <script src="{{ asset('site/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <!-- Jquery Min Js -->
    <script src="{{ asset('site/assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <!-- Popper Min Js -->
    <script src="{{ asset('site/assets/js/vendor/popper.min.js') }}"></script>
    <!-- Bootstrap Min Js -->
    <script src="{{ asset('site/assets/js/vendor/bootstrap.min.js') }}"></script>
    <!-- Plugins Js-->
    <script src="{{ asset('site/assets/js/plugins.js') }}"></script>
    <!-- Ajax Mail Js -->
    <script src="{{ asset('site/assets/js/ajax-mail.js') }}"></script>
    <!-- Active Js -->
    <script src="{{ asset('site/assets/js/main.js') }}"></script>
    <!-- Switcher JS [Please Remove this when Choose your Final Projct] -->
    <script src="{{ asset('site/assets/js/switcher.js') }}"></script>
</body>



</html>