﻿<?php 
session_start();

?>
<!DOCTYPE html>

<html lang="ar" dir="rtl">

<head>
    <style>

        @import url('theme/assets.salla.cloud/fonts/default2d19.css');</style>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="theme-color" content="#727272">
    <meta name="msapplication-navbutton-color" content="#727272">
    <meta name="apple-mobile-web-app-status-bar-style" content="#727272">

    <link rel="icon" type="image/png" href="Images/Original/11a4d886-5bd0-469a-bda2-f95d9cbec64a.jpg">
    <link rel="apple-touch-icon-precomposed" href="Images/Original/11a4d886-5bd0-469a-bda2-f95d9cbec64a.jpg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/Images/Original/11a4d886-5bd0-469a-bda2-f95d9cbec64a.jpg">
    <meta name="_token" content="LTuN0qgPxgOxKu8azjHipCsIP8iszPfhq3fhZQRS">

    <title>&#x628;&#x631;&#x648; &#x62A;&#x64A;&#x643;  Pro tech</title>
    <meta name="description" content="&#x645;&#x62A;&#x62C;&#x631; &#x627;&#x644;&#x643;&#x62A;&#x631;&#x648;&#x646;&#x64A; &#x645;&#x62A;&#x62E;&#x635;&#x635; &#x641;&#x64A; &#x627;&#x644;&#x627;&#x62C;&#x647;&#x632;&#x629; &#x627;&#x644;&#x630;&#x643;&#x64A;&#x629; &#x648;&#x627;&#x62C;&#x647;&#x632;&#x629; &#x627;&#x644;&#x627;&#x644;&#x639;&#x627;&#x628; &#x60C; &#x627;&#x64A;&#x641;&#x648;&#x646; 14&#x60C; &#x628;&#x644;&#x627;&#x64A;&#x633;&#x62A;&#x64A;&#x634;&#x646; 5&#x60C; &#x627;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x631;&#x648;&#x645; &#x645;&#x627;&#x643;&#x633;">
    <meta name="keywords" content="&#x645;&#x62A;&#x62C;&#x631; &#x627;&#x644;&#x643;&#x62A;&#x631;&#x648;&#x646;&#x64A; &#x645;&#x62A;&#x62E;&#x635;&#x635; &#x641;&#x64A; &#x627;&#x644;&#x627;&#x62C;&#x647;&#x632;&#x629; &#x627;&#x644;&#x630;&#x643;&#x64A;&#x629; &#x648;&#x627;&#x62C;&#x647;&#x632;&#x629; &#x627;&#x644;&#x627;&#x644;&#x639;&#x627;&#x628; &#x60C; &#x627;&#x64A;&#x641;&#x648;&#x646; 14&#x60C; &#x628;&#x644;&#x627;&#x64A;&#x633;&#x62A;&#x64A;&#x634;&#x646; 5&#x60C; &#x627;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x631;&#x648;&#x645; &#x645;&#x627;&#x643;&#x633;-">
    <meta property="store:published_time" content="2019-09-02T02:36:19+03:00">
    <meta property="og:description" content="&#x645;&#x62A;&#x62C;&#x631; &#x627;&#x644;&#x643;&#x62A;&#x631;&#x648;&#x646;&#x64A; &#x645;&#x62A;&#x62E;&#x635;&#x635; &#x641;&#x64A; &#x627;&#x644;&#x627;&#x62C;&#x647;&#x632;&#x629; &#x627;&#x644;&#x630;&#x643;&#x64A;&#x629; &#x648;&#x627;&#x62C;&#x647;&#x632;&#x629; &#x627;&#x644;&#x627;&#x644;&#x639;&#x627;&#x628; &#x60C; &#x627;&#x64A;&#x641;&#x648;&#x646; 14&#x60C; &#x628;&#x644;&#x627;&#x64A;&#x633;&#x62A;&#x64A;&#x634;&#x646; 5&#x60C; &#x627;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x631;&#x648;&#x645; &#x645;&#x627;&#x643;&#x633;">
    <meta property="og:title" content="&#x628;&#x631;&#x648; &#x62A;&#x64A;&#x643;  Pro tech">
    <meta property="og:type" content="store">
    <meta property="og:locale" content="ar_AR">
    <meta property="og:locale:alternate" content="ar_AR">
    <meta property="og:locale:alternate" content="en_US">
    <meta property="og:url" content="https://protichksa.com/">
    <meta property="og:image" content="/Images/Original/11a4d886-5bd0-469a-bda2-f95d9cbec64a.jpg">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="300">
    <meta name="twitter:description" content="&#x645;&#x62A;&#x62C;&#x631; &#x627;&#x644;&#x643;&#x62A;&#x631;&#x648;&#x646;&#x64A; &#x645;&#x62A;&#x62E;&#x635;&#x635; &#x641;&#x64A; &#x627;&#x644;&#x627;&#x62C;&#x647;&#x632;&#x629; &#x627;&#x644;&#x630;&#x643;&#x64A;&#x629; &#x648;&#x627;&#x62C;&#x647;&#x632;&#x629; &#x627;&#x644;&#x627;&#x644;&#x639;&#x627;&#x628; &#x60C; &#x627;&#x64A;&#x641;&#x648;&#x646; 14&#x60C; &#x628;&#x644;&#x627;&#x64A;&#x633;&#x62A;&#x64A;&#x634;&#x646; 5&#x60C; &#x627;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x631;&#x648;&#x645; &#x645;&#x627;&#x643;&#x633;">
    <meta name="twitter:image" content="/Images/Original/11a4d886-5bd0-469a-bda2-f95d9cbec64a.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="&#x628;&#x631;&#x648; &#x62A;&#x64A;&#x643;  Pro tech">
    <meta name="twitter:url" content="https://protichksa.com/">
    <meta name="twitter:site" content="Pro tech">
    <meta name="twitter:creator" content="Pro tech">
    <script type="application/ld+json">{"@context":"https:\/\/schema.org","@type":"WebPage","name":"Over 9000 Thousand!","description":"ايفون 13 برو ماكس - بلاي ستيشن 5 - سوني 5  -"}</script>
    <link rel="stylesheet" href="theme/assets.salla.cloud/css/app9d6c.css?id=afd29fb09b6554d13af9846ce72da9ea">

    <link rel="stylesheet" href="theme/assets.salla.cloud/css/themes4b5f.css?id=3ee4c615e0fdf12513b2507d3b268ed2">
    <link rel="stylesheet" href="theme/assets.salla.cloud/css/pluginsd278.css?id=51437878867e69288ff737f568585dde">

    <link rel="stylesheet" href="theme/assets.salla.cloud/themes/default/assets/css/slick-theme2d19.css?v=v1.4.875">
    <link rel="stylesheet" href="theme/assets.salla.sa/cp/assets/css/icons/sallaicons/style.css">
    <link rel="stylesheet" href="theme/assets.salla.cloud/themes/theme_6/assets/css/main2d19.css?v=v1.4.875">
    <link rel="stylesheet" href="ajax/libs/toastr.js/latest/css/toastr.min.css">

    <style type="text/css">
        :root {
            --main-color: #727272;
            --main-text-color: #525252;
            --main-text-color2: #181818;
            --infinte-color: #525252;
            --main-text-color-dark: #727272;
            /* New Coloring Pattern: */
            --color-main: #727272;
            --color-main-d: #585858;
            --color-main-l: #989898;
            --color-main-reverse: #727272;
            --color-text: #5a5a5a;
            --color-text-reverse: #ffffff;
            --color-title: #252525;
        }

        .store-header, .header-bar, .store-header-min {
            background: var(--main-color);
        }

            .store-header h1 a, .store-header-min h1 {
                color: #fff;
            }

        .dropdown-store-header.open .dropdown-toggle, .dropdown-store-header.open .dropdown-toggle {
            background: var(--main-color);
            color: #fff;
        }
        /* .store-contact a { color: var(--main-text-color); } */
        /*a.media-heading, a.product-link { color: var(--main-text-color); }*/
        .pace-demo {
            background: var(--main-text-color) !important; /*darker*/
        }

        .pace .pace-progress {
            background: var(--main-text-color2) !important; /*darker*/
        }

        .add-cart {
            color: var(--main-text-color); /*darker*/
            border: 1px solid var(--main-text-color); /*darker*/
        }

            .add-cart:hover, .add-cart:focus, .add-cart-large:hover, .add-cart-large:focus, .order-btn:hover, .order-btn:focus {
                background: var(--main-text-color); /*darker*/
                border-color: var(--main-text-color);
            }

        .cart-nav-submit, .cart-nav-more, .cart-nav-solid {
            background: var(--main-text-color); /*darker*/
            border-color: var(--main-text-color); /*darker*/
        }

        .add-cart-large, .order-btn {
            background: var(--main-text-color);
            border-color: var(--main-text-color);
        }

        .cart-nav-light:hover, .cart-nav-light:active, .cart-nav-light:focus {
            color: var(--main-color);
        }

        .cart-nav-light {
            border-color: var(--main-text-color); /*darker*/
            color: var(--main-text-color); /*darker*/
        }

        .cart-line {
            border-color: var(--main-color); /*lighter*/
        }

        .cart-number {
            color: var(--main-text-color); /*lighter*/
            border-color: var(--main-color); /*lighter*/
        }

        .active-step .cart-number {
            background: var(--main-color);
            border-color: var(--main-color);
        }

        .cart-title {
            color: var(--main-color) !important; /*lighter*/
        }

        #salla_bar {
            border-top-color: var(--main-color);
        }

            #salla_bar .checkout-button {
                background: var(--main-text-color);
            }

        .choice.border-info-600.text-info-800 {
            color: var(--main-text-color) !important;
            border-color: var(--main-text-color) !important;
        }

        .payment-method.active {
            background: var(--main-text-color) !important;
        }

        .pagination > .active > span {
            background-color: var(--main-text-color) !important;
            border-color: var(--main-text-color) !important;
        }
        /*.order-num { color: var(--main-text-color); }*/

        .product-side-container .product-order-container .panel-heading {
            background: var(--main-color) !important;
            border-bottom-color: var(--main-color) !important;
            color: #fff !important;
        }

        .testimonial-header, .owl-theme .owl-nav [class*=owl-] {
            background: var(--main-color) !important;
        }

        a:hover, a:focus {
            color: #fff;
        }

        .sub-nav__menu:hover svg {
            fill: var(--main-text-color);
        }

        .site-header__cart .badge {
            background: var(--main-text-color);
        }

        .circle-action:hover {
            background: var(--main-text-color);
            border-color: var(--main-text-color);
        }

        .sub-nav .main-menu > li:hover > a, .sub-nav .main-menu > li:hover > a > i {
            color: var(--main-text-color);
        }

        .sub-nav li > ul a:hover {
            color: var(--main-text-color2);
        }

        .slick-active button {
            background-color: var(--main-text-color) !important;
        }

        .product:hover .product-title {
            color: var(--main-text-color);
        }

        .product-price, .product-details__price {
            color: var(--main-text-color);
        }

        .product-add:hover {
            background-color: var(--main-color) !important;
            border-color: var(--main-color);
        }

        .sub-nav__menu:hover {
            color: var(--main-color) !important;
        }

        .login-container .border-yellow-dark {
            border-color: var(--main-text-color);
        }

        .login-container .text-yellow-dark {
            color: var(--main-text-color);
        }


        .sub-nav-header {
            background: var(--main-color);
        }

            .sub-nav-header a {
                color: var(--main-color);
            }

        .btn-primary {
            background: var(--main-text-color);
            border-color: var(--main-text-color);
        }

            .btn-primary:focus, .btn-primary.focus, .btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.active:hover, .btn-primary:active:hover {
                background: var(--main-text-color2);
                border-color: var(--main-text-color2);
            }

        .page-box .panel-heading .product-title {
            color: var(--main-text-color) !important;
        }

        #ask_register_link {
            color: var(--main-text-color) !important;
        }

        .product-details__hot strong {
            color: var(--main-text-color) !important;
        }

        @media (min-width: 992px) {
            .sub-nav li > ul a:hover {
                background: var(--main-text-color);
                color: #fff;
            }
        }



        .site-header__cart .badge {
            background: var(--main-text-color);
        }

        .circle-action:hover {
            background: var(--main-text-color);
            border-color: var(--main-text-color);
        }

        .sub-nav .main-menu > li:hover > a {
            color: var(--main-text-color2);
        }

        .slick-active button {
            background-color: var(--main-text-color) !important;
        }

        .product:hover .product-title {
            color: var(--main-text-color);
        }

        .product-price:hover {
            color: var(--main-text-color);
        }

        .product-add:hover {
            background: var(--main-text-color);
        }

        .social__item a:hover {
            background: #fff;
            border-color: var(--main-text-color);
        }

        .footer-main {
            border-top-color: var(--main-color);
        }

        .feature-item__icon {
            border-color: var(--main-text-color);
        }

        .landing-page-feature-item__icon {
            color: var(--main-text-color);
            border-color: var(--main-text-color);
        }

        .checker span {
            border-color: var(--main-text-color) !important;
        }

        .btn-order-details {
            background: var(--main-text-color) !important;
        }

        .section-header .section--title {
            color: var(--main-text-color);
        }


        .footer-main .container::before {
            text-align: center !important;
            display: block;
            height: 70px !important;
            background-image: url(Images/Original/11a4d886-5bd0-469a-bda2-f95d9cbec64a.jpg);
            background-size: contain !important;
            background-repeat: no-repeat !important;
            background-position: top center !important;
        }

        .sub-nav-header::before {
            content: "";
            text-align: center !important;
            display: block;
            height: 50px !important;
            background-image: url(Images/Original/11a4d886-5bd0-469a-bda2-f95d9cbec64a.jpg);
            background-size: contain !important;
            background-repeat: no-repeat !important;
            background-position: top center !important;
        }
    </style>
    <link href="theme/assets.salla.cloud/css/intlTelInput0309.css?id=53d3f9e5ce3c027b0bddc8be6f8c1283" rel="stylesheet">
    <link rel="stylesheet" href="theme/assets.salla.cloud/themes/theme_6/assets/css/theme-custom2d19.css?v=v1.4.875">
    <link rel="stylesheet" href="css/mainStyleSheet.css">
    <script src="theme/cdn.polyfill.io/v3/polyfill.mina9ef.js?flags=gated&amp;features=Promise%2CObject.assign%2CObject.values%2CArray.prototype.find%2CArray.prototype.findIndex%2CArray.prototype.includes%2CString.prototype.includes%2CString.prototype.startsWith%2CString.prototype.endsWith%2Cdocument.getElementsByClassName%2CPromise.prototype.finally%2CString.prototype.includes%2CNumber.isNaN%2Ces6%2CEvent%2CCustomEvent" type="217ebb6a9117e6efb914a3a4-text/javascript"></script>
    <script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"item":{"@id":"https://protichksa.com/","name":"\u0627\u0644\u0631\u0626\u064a\u0633\u064a\u0629","image":null}}]}</script>
    <script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"&#x628;&#x631;&#x648; &#x62A;&#x64A;&#x643; : Pro tech","url":"https://protichksa.com/","logo":"11a4d886-5bd0-469a-bda2-f95d9cbec64a.jpg","address":{"@type":"PostalAddress","addressCountry":"السعودية","addressRegion":"الرياض"}}]}</script>
    <script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebSite","name":"&#x628;&#x631;&#x648; &#x62A;&#x64A;&#x643; : Pro tech","url":"https://protichksa.com/","potentialAction":{"@type":"SearchAction","target":{"@type":"EntryPoint","actionPlatform":"https://protichksa.com/\/search?q={query}","urlTemplate":"https://protichksa.com/\/search?q={query}"},"query-input":"required name=query","query":"required"}}]}</script>
    <script type="217ebb6a9117e6efb914a3a4-text/javascript">
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({"equalHeight":{"isEnabled":true,"max":null,"classType":"contain"},"page":{"fingerprint":"9686b9a9e03b99aa82f28ef898c7578cece3a380","pageName":"home","mobileApp":0,"referrer":"https://protichksa.com/","theme":"theme_6"},"store":{"store":"Pro tech","app_key":"2d5c10d4a8f70ce9f26e9f5e40e33939b671dac8","site_id":53381,"facebook_pixel_id":null,"google_analytics_id":null,"snapchat_pixel_id":null},"customer":{"isGuest":true}});
    </script>
    
    
</head>
<body class="store-home salla-theme_6 color-mode-light font-dinnextltarabic-regular">
    
    
    <noscript>
        To get full functionality of this site you need to enable JavaScript. Here is how
        <a href="https://www.enable-javascript.com/" rel="nofollow noopener noreferrer" target="_blank">To enable JavaScript on webpage</a>.
    </noscript>
    <header class="site-header">
        <div class="sub-header p-10 d-none d-lg-block">
            <div class="container">
                <div class="row header-wrapper">
                    <div class="col-lg-6">
                    </div>
                    <div class="col-lg-6 text-left">
                        <div id="cl_switcher_wrapper">
                        </div>



                    </div>
                </div>
            </div>
        </div>
        <div class="container py-3 header-top">
            <div class="row header-wrapper">
                <div class="col-md-3 logo-wrapper d-flex d-lg-block">
                    <a href="#" class="sub-nav__menu ml-2">
                        <svg width="30px" height="30px" version="1.1" viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <path d="m23 29c-1.6562 0-3 1.3438-3 3s1.3438 3 3 3h54c1.6562 0 3-1.3438 3-3s-1.3438-3-3-3zm0 18c-1.6562 0-3 1.3438-3 3s1.3438 3 3 3h54c1.6562 0 3-1.3438 3-3s-1.3438-3-3-3zm0 18c-1.6562 0-3 1.3438-3 3s1.3438 3 3 3h54c1.6562 0 3-1.3438 3-3s-1.3438-3-3-3z"></path>
                        </svg>
                    </a>
                    <h1 class="logo">
                        <a href="index.php">
                            <img src="Images/Original/11a4d886-5bd0-469a-bda2-f95d9cbec64a.jpg" alt="&#x628;&#x631;&#x648; &#x62A;&#x64A;&#x643; : Pro tech">
                        </a>
                    </h1>
                </div>
                <div class="col-sm-12 col-md-6 d-lg-flex search-container">
                    <div class="search-wrapper">
                        <div id="search">
                            <form id="search_form" action="https://protichksa.com//search">
                                <div class="ui category search">
                                    <div class="ui icon input">
                                        <input id="searchbox" name="q" class="prompt form-control" type="text" placeholder="أدخل كلمة البحث">
                                        <i class="search icon"></i>
                                    </div>
                                    <div class="results"></div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center d-lg-block actions-container">
                    <?php 
                        $conn = mysqli_connect("127.0.0.1","root","", "phone_e");
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        $user_session_id = session_id();


                        $sql = "SELECT COUNT(tmp_cart.item_id) AS num_products, 
                        SUM(tmp_cart.quantity) AS total_quantity, 
                        SUM(products.price * tmp_cart.quantity) AS total_price
                        FROM tmp_cart
                        JOIN products ON tmp_cart.item_id = products.prod_id 
                        WHERE tmp_cart.user_lim = ?";

                    

                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param('s', $user_session_id);
                        $stmt->execute();

                        $stmt->bind_result($num_products, $total_quantity,$total_price);
                        $stmt->fetch();
                        
                    ?>
                    <a data-cart-small="" href="Store/Cart.php" class="ml-1 site-header__cart d-none d-lg-flex" rel="nofollow">
                        <div><span class="sicon-cart"></span></div>
                        <div>
                            <span><strong>سلة المشتريات</strong></span>
                            <span id="cart_badge" class="cart_badge" data-cart-badge="" style="float: right">
                                <?php echo $num_products; ?>
                            </span>
                            <span style="float: right">
                                &nbsp;منتج -&nbsp;
                            </span>
                            <span id="cart_badge_total_price" data-cart-total="" style="float: right">
                                <?php echo $total_price ; ?> 
                            </span>
                            <span style="margin-right:5px">
                                 &#x631;.&#x633;
                            </span>
                        </div>
                    </a>
                    <a data-cart-small="" href="Store/Cart.php" class="ml-1 circle-action d-lg-none site-header__mine-cart" rel="nofollow">
                        <span class="sicon-cart"></span>
                        <span class="badge cart_badge" data-cart-badge="">0</span>
                    </a>
                    <div class="d-lg-none" style="vertical-align: middle">
                        <div class="dropdown dropdown-store-header dropdown-store-header-left hidden-xs">
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="sub-nav">
        <div class="container-fluid sub-nav-content">
            <button class="sub-nav__close">
                <svg width="100pt" height="100pt" version="1.1" viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <path d="m50 10c-22.109 0-40 17.883-40 40 0 22.109 17.891 40 40 40 22.117 0 40-17.891 40-40 0-22.121-17.879-40-40-40zm-15.25 23c0.074219-0.003906 0.14453-0.003906 0.21875 0 0.53906-0.003906 1.0586 0.20703 1.4375 0.59375l13.594 13.562 13.562-13.562c0.36328-0.37109 0.85547-0.58203 1.375-0.59375 0.82812-0.035156 1.5938 0.44922 1.918 1.2109 0.32812 0.76562 0.14844 1.6484-0.44922 2.2266l-13.594 13.594 13.594 13.562c0.37891 0.375 0.58984 0.88672 0.58984 1.4219 0 0.53125-0.21094 1.043-0.58984 1.4219-0.375 0.375-0.88672 0.58984-1.4219 0.58984s-1.043-0.21484-1.4219-0.58984l-13.562-13.594-13.594 13.594c-0.78516 0.78516-2.0586 0.78516-2.8438 0s-0.78516-2.0586 0-2.8438l13.562-13.562-13.562-13.594c-0.56641-0.54297-0.76562-1.3633-0.50781-2.1016 0.25391-0.73828 0.91797-1.2617 1.6953-1.3359z" fill-rule="evenodd"></path>
                </svg>
            </button>


















            <!-- here is  the menu section -->
<ul class="main-menu">

        <li id="1" class="has-children">
            <a href="javascript:;">&#x627;&#x644;&#x647;&#x648;&#x627;&#x62A;&#x641; &#x627;&#x644;&#x630;&#x643;&#x64A;&#x629;</a>
            <ul>
                    <li id="12">
                        <a href="store/category/12.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;</a>
                    </li>
                    <li id="13">
                        <a href="store/category/13.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 </a>
                    </li>
                    <li id="14">
                        <a href="store/category/14.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 &#x645;&#x64A;&#x646;&#x64A; </a>
                    </li>
                    <li id="15">
                        <a href="store/category/15.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 12 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;</a>
                    </li>
                    <li id="16">
                        <a href="store/category/16.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 12 </a>
                    </li>
                    <li id="17">
                        <a href="store/category/17.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 12 &#x645;&#x64A;&#x646;&#x64A;</a>
                    </li>
                    <li id="24">
                        <a href="store/category/24.php">&#x63A;&#x637;&#x627;&#x621; &#x623;&#x628;&#x644;</a>
                    </li>
                    <li id="40">
                        <a href="store/category/40.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 &#x628;&#x631;&#x648;</a>
                    </li>
                    <li id="50">
                        <a href="store/category/50.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;</a>
                    </li>
                    <li id="51">
                        <a href="store/category/51.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x631;&#x648;</a>
                    </li>
                    <li id="52">
                        <a href="store/category/52.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x644;&#x633;</a>
                    </li>
                    <li id="53">
                        <a href="store/category/53.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14</a>
                    </li>
                    <li id="57">
                        <a href="store/category/57.php">&#x62C;&#x644;&#x627;&#x643;&#x633;&#x64A; &#x627;&#x633; 23 &#x627;&#x644;&#x62A;&#x631;&#x627;</a>
                    </li>
            </ul>
        </li>
        <li id="2" class="has-children">
            <a href="javascript:;">&#x633;&#x627;&#x639;&#x627;&#x62A; &#x630;&#x643;&#x64A;&#x629;</a>
            <ul>
                    <li id="8">
                        <a href="store/category/8.php">&#x633;&#x627;&#x639;&#x627;&#x62A; &#x627;&#x628;&#x644;</a>
                    </li>
            </ul>
        </li>
        <li id="3" class="has-children">
            <a href="javascript:;">&#x623;&#x62C;&#x647;&#x632;&#x629; &#x635;&#x648;&#x62A; &#x648; &#x633;&#x645;&#x627;&#x639;&#x627;&#x62A;</a>
            <ul>
                    <li id="6">
                        <a href="store/category/6.php">&#x633;&#x645;&#x627;&#x639;&#x627;&#x62A; &#x623;&#x628;&#x644;</a>
                    </li>
                    <li id="7">
                        <a href="store/category/7.php">&#x633;&#x645;&#x627;&#x639;&#x627;&#x62A; &#x633;&#x628;&#x64A;&#x643;&#x631;</a>
                    </li>
                    <li id="36">
                        <a href="store/category/36.php">&#x633;&#x645;&#x627;&#x639;&#x627;&#x62A; &#x645;&#x62A;&#x646;&#x648;&#x639;&#x647;</a>
                    </li>
            </ul>
        </li>
        <li id="4" class="has-children">
            <a href="javascript:;">&#x623;&#x62C;&#x647;&#x632;&#x629; &#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646;</a>
            <ul>
                    <li id="1">
                        <a href="store/category/1.php">&#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646; 5</a>
                    </li>
                    <li id="2">
                        <a href="store/category/2.php">&#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646;  4</a>
                    </li>
                    <li id="3">
                        <a href="store/category/3.php">&#x627;&#x643;&#x633; &#x628;&#x648;&#x643;&#x633; &#x648;&#x646;</a>
                    </li>
                    <li id="4">
                        <a href="store/category/4.php">&#x64A;&#x62F; &#x62A;&#x62D;&#x643;&#x645;</a>
                    </li>
                    <li id="5">
                        <a href="store/category/5.php">&#x645;&#x644;&#x62D;&#x642;&#x627;&#x62A; &#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646;</a>
                    </li>
            </ul>
        </li>
        <li id="5" class="has-children">
            <a href="javascript:;">&#x644;&#x627;&#x628;&#x62A;&#x648;&#x628;&#x627;&#x62A; &#x648;&#x634;&#x627;&#x634;&#x627;&#x62A;</a>
            <ul>
                    <li id="18">
                        <a href="store/category/18.php">&#x644;&#x627;&#x628; &#x62A;&#x648;&#x628;&#x627;&#x62A; &#x627;&#x628;&#x644;</a>
                    </li>
            </ul>
        </li>
        <li id="7" class="has-children">
            <a href="javascript:;">&#x627;&#x64A;&#x628;&#x627;&#x62F;</a>
            <ul>
                    <li id="27">
                        <a href="store/category/27.php">&#x671;&#x628;&#x644;</a>
                    </li>
            </ul>
        </li>
        <li id="8" class="has-children">
            <a href="javascript:;">&#x628;&#x637;&#x627;&#x631;&#x64A;&#x627;&#x62A; &#x645;&#x62A;&#x646;&#x642;&#x644;&#x629; &#x648;&#x643;&#x64A;&#x627;&#x628;&#x644;</a>
            <ul>
                    <li id="28">
                        <a href="store/category/28.php">&#x628;&#x637;&#x627;&#x631;&#x64A;&#x627;&#x62A; &#x645;&#x62A;&#x646;&#x642;&#x644;&#x629;</a>
                    </li>
            </ul>
        </li>
        <li id="9" class="has-children">
            <a href="javascript:;">&#x623;&#x644;&#x639;&#x627;&#x628; &#x627;&#x644;&#x641;&#x64A;&#x62F;&#x64A;&#x648;</a>
            <ul>
                    <li id="29">
                        <a href="store/category/29.php">&#x645;&#x627;&#x648;&#x633;&#x627;&#x62A; &#x648;&#x643;&#x64A;&#x628;&#x648;&#x631;&#x62F;&#x627;&#x62A; &#x623;&#x644;&#x639;&#x627;&#x628;</a>
                    </li>
                    <li id="30">
                        <a href="store/category/30.php">&#x645;&#x627;&#x64A;&#x643;&#x631;&#x648;&#x641;&#x648;&#x646;&#x627;&#x62A;</a>
                    </li>
                    <li id="31">
                        <a href="store/category/31.php">&#x645;&#x62C;&#x633;&#x645;&#x627;&#x62A; &#x648;&#x641;&#x64A;&#x642;&#x631;&#x632;</a>
                    </li>
                    <li id="32">
                        <a href="store/category/32.php">&#x625;&#x636;&#x627;&#x621;&#x627;&#x62A; RGB</a>
                    </li>
            </ul>
            
        </li>
        

    <li class="sub-menu-header categories-holder">
        <span>
            <i class="sicon-tag"></i>
            فئات المنتجات
        </span>
        <ul class="store-categories">
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x627;&#x644;&#x647;&#x648;&#x627;&#x62A;&#x641; &#x627;&#x644;&#x630;&#x643;&#x64A;&#x629;</a>
                    <ul style="position:inherit">
                            <li id="12">
                                <a href="store/category/12.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;</a>
                            </li>
                            <li id="13">
                                <a href="store/category/13.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 </a>
                            </li>
                            <li id="14">
                                <a href="store/category/14.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 &#x645;&#x64A;&#x646;&#x64A; </a>
                            </li>
                            <li id="15">
                                <a href="store/category/15.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 12 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;</a>
                            </li>
                            <li id="16">
                                <a href="store/category/16.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 12 </a>
                            </li>
                            <li id="17">
                                <a href="store/category/17.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 12 &#x645;&#x64A;&#x646;&#x64A;</a>
                            </li>
                            <li id="24">
                                <a href="store/category/24.php">&#x63A;&#x637;&#x627;&#x621; &#x623;&#x628;&#x644;</a>
                            </li>
                            <li id="40">
                                <a href="store/category/40.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 &#x628;&#x631;&#x648;</a>
                            </li>
                            <liphp id="50">
                                <a href="store/category/50.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;</a>
                            </liphp
                            <li id="51">
                                <a href="store/category/51.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x631;&#x648;</a>
                            </li>
                            <li id="52">
                                <a href="store/category/52.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x644;&#x633;</a>
                            </li>
                            <li id="53">
                                <a href="store/category/53.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14</a>
                            </li>
                            <li id="57">
                                <a href="store/category/57.php">&#x62C;&#x644;&#x627;&#x643;&#x633;&#x64A; &#x627;&#x633; 23 &#x627;&#x644;&#x62A;&#x631;&#x627;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x633;&#x627;&#x639;&#x627;&#x62A; &#x630;&#x643;&#x64A;&#x629;</a>
                    <ul style="position:inherit">
                            <li id="8">
                                <a href="store/category/8.php">&#x633;&#x627;&#x639;&#x627;&#x62A; &#x627;&#x628;&#x644;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x623;&#x62C;&#x647;&#x632;&#x629; &#x635;&#x648;&#x62A; &#x648; &#x633;&#x645;&#x627;&#x639;&#x627;&#x62A;</a>
                    <ul style="position:inherit">
                            <li id="6">
                                <a href="store/category/6.php">&#x633;&#x645;&#x627;&#x639;&#x627;&#x62A; &#x623;&#x628;&#x644;</a>
                            </li>
                            <li id="7">
                                <a href="store/category/7.php">&#x633;&#x645;&#x627;&#x639;&#x627;&#x62A; &#x633;&#x628;&#x64A;&#x643;&#x631;</a>
                            </li>
                            <li id="36">
                                <a href="store/category/36.php">&#x633;&#x645;&#x627;&#x639;&#x627;&#x62A; &#x645;&#x62A;&#x646;&#x648;&#x639;&#x647;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x623;&#x62C;&#x647;&#x632;&#x629; &#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646;</a>
                    <ul style="position:inherit">
                            <li id="1">
                                <a href="store/category/1.php">&#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646; 5</a>
                            </li>
                            <li id="2">
                                <a href="store/category/2.php">&#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646;  4</a>
                            </li>
                            <li id="3">
                                <a href="store/category/3.php">&#x627;&#x643;&#x633; &#x628;&#x648;&#x643;&#x633; &#x648;&#x646;</a>
                            </li>
                            <li id="4">
                                <a href="store/category/4.php">&#x64A;&#x62F; &#x62A;&#x62D;&#x643;&#x645;</a>
                            </li>
                            <li id="5">
                                <a href="store/category/5.php">&#x645;&#x644;&#x62D;&#x642;&#x627;&#x62A; &#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x644;&#x627;&#x628;&#x62A;&#x648;&#x628;&#x627;&#x62A; &#x648;&#x634;&#x627;&#x634;&#x627;&#x62A;</a>
                    <ul style="position:inherit">
                            <li id="18">
                                <a href="store/category/18.php">&#x644;&#x627;&#x628; &#x62A;&#x648;&#x628;&#x627;&#x62A; &#x627;&#x628;&#x644;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x627;&#x64A;&#x628;&#x627;&#x62F;</a>
                    <ul style="position:inherit">
                            <li id="27">
                                <a href="store/category/27.php">&#x671;&#x628;&#x644;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x628;&#x637;&#x627;&#x631;&#x64A;&#x627;&#x62A; &#x645;&#x62A;&#x646;&#x642;&#x644;&#x629; &#x648;&#x643;&#x64A;&#x627;&#x628;&#x644;</a>
                    <ul style="position:inherit">
                            <li id="28">
                                <a href="store/category/28.php">&#x628;&#x637;&#x627;&#x631;&#x64A;&#x627;&#x62A; &#x645;&#x62A;&#x646;&#x642;&#x644;&#x629;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x623;&#x644;&#x639;&#x627;&#x628; &#x627;&#x644;&#x641;&#x64A;&#x62F;&#x64A;&#x648;</a>
                    <ul style="position:inherit">
                            <li id="29">
                                <a href="store/category/29.php">&#x645;&#x627;&#x648;&#x633;&#x627;&#x62A; &#x648;&#x643;&#x64A;&#x628;&#x648;&#x631;&#x62F;&#x627;&#x62A; &#x623;&#x644;&#x639;&#x627;&#x628;</a>
                            </li>
                            <li id="30">
                                <a href="store/category/30.php">&#x645;&#x627;&#x64A;&#x643;&#x631;&#x648;&#x641;&#x648;&#x646;&#x627;&#x62A;</a>
                            </li>
                            <li id="31">
                                <a href="store/category/31.php">&#x645;&#x62C;&#x633;&#x645;&#x627;&#x62A; &#x648;&#x641;&#x64A;&#x642;&#x631;&#x632;</a>
                            </li>
                            <li id="32">
                                <a href="store/category/32.php">&#x625;&#x636;&#x627;&#x621;&#x627;&#x62A; RGB</a>
                            </li>
                    </ul>
                </li>

        </ul>
    </li>


</ul>
<!-- end of menu section -->
        </div>
    </div>

    

<section>
    <div>
            <div class="main-slider ">
                        <a href="#" rel="noopener noreferrer">
                            <img data-src="/images/Original/a3ec847c-2676-4358-a231-c8aaf2af2c71.jpeg" alt="" src="images/Original/a3ec847c-2676-4358-a231-c8aaf2af2c71.jpeg">
                        </a>
                        <a href="#" rel="noopener noreferrer">
                            <img data-src="/images/Original/7514db65-45c0-4a9f-9145-9ac62d327193.png" alt="" src="images/Original/7514db65-45c0-4a9f-9145-9ac62d327193.png">
                        </a>
                        <a href="#" rel="noopener noreferrer">
                            <img data-src="/images/Original/a0c8ca67-cc3c-463a-9b9e-3e32ba548c21.jpeg" alt="" src="images/Original/a0c8ca67-cc3c-463a-9b9e-3e32ba548c21.jpeg">
                        </a>
                        <a href="#" rel="noopener noreferrer">
                            <img data-src="/images/Original/ea47b8de-d626-4f82-9301-140e70044639.jpeg" alt="" src="images/Original/ea47b8de-d626-4f82-9301-140e70044639.jpeg">
                        </a>
            </div>
    </div>

</section>

<style>
    .ribbons {
        position: fixed;
        top: 20px;
        padding: 5px;
        background: #ff2931;
        color: white;
    }
</style>
<!-- start of section 1  -->
        <section class="section has-slider">
        <div class="container">







        <!-- show all الكل عؤض -->
                <div class="section-header d-flex mb-4">
                    <h2 class="section--title">
                        <span>&#x623;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;</span>
                    </h2>
                    <div class="section-actions">
                        <a class="circle-action button-next" href="#">
                            <span class="sicon-arrow-right"></span>
                </a>
                        <a class="circle-action button-prev" href="#">
                            <span class="sicon-arrow-left"></span>
                        </a>
                        <a class="button-more" href="store/category/50.php">عرض الكل</a>
                    </div>
                </div>


                <!-- end all عرض الكل-->








        <div class="products-listing product-listing-top">

                  
                    



                    <!-- post -->
                  <!-- sql select code  for cate=iphone14promax -->
                  <?php
                   include 'admin/config.php';
                   $res =mysqli_query($conn,"select * from products,cate where products.cate_id=cate.cat_id and cat_name='iphone_14_pro_max'");
                  ?>
                  <?php foreach($res as $r):?>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="product">
                            <a href="store/Product/158.php?id=<?php echo $r['prod_id']?>" rel="canonical">

                                    <!-- discount start -->
                                    <span class="ribbons">
                                        <span class="onsale ribbon">
                                            <span class="onsep">-</span>
                                               <?php
                                          $originalPrice = $r['price'];
                                          $discountedPrice = $r['price_after'];
                                        $discountPercentage = (($originalPrice - $discountedPrice) / $originalPrice) * 100;
                                        echo number_format($discountPercentage, 1, '.', '');
                                              ?>
                                            <span class="per">%</span>
                                        </span>
                                    </span>

                                    <!-- discount end -->
                                <span class="img-cont">
                                    <img data-src="admin/upload/<?php echo $r['img']?>" alt="&#x62C;&#x627;&#x644;&#x627;&#x643;&#x633;&#x64A; &#x627;&#x633; 23 &#x627;&#x644;&#x62A;&#x631;&#x627; &#x630;&#x627;&#x643;&#x631;&#x647; 256" src="theme/assets.salla.cloud/themes/default/assets/images/product-loading2d19.png?v=v1.4.875" class="lazyload">
                                </span>
                                <h3 class="product-title">
                                <?php echo $r['name']?>

                                </h3>
                          
                            </a>
                            <div class="product-footer">
                                <p class="product-price">
                                        <span class="price-before"><?php echo $r['price']?> &#x631;.&#x633;</span>
                                    <span class="price-after"><?php echo $r['price_after']?>&#x631;.&#x633;</span>
                                </p>
                                <!-- <a href="Store/product/158.php?id=<?php echo $r['prod_id']?>" class="product-add add_to_cart_btn" data-product-id="691" data-price="79" data-currency="SAR" data-is-donation="">
                                    <span class="sicon-cart"></span>
                                    <span>إضافة للسلة</span>
                                </a> -->

                                
                                  <form action="add_to_cart.php" method="post" class="add_to_cart_form">
                                        <input type="hidden" name="_token" value="IkhHIFqEP3q0i7tOxx6tNijekmfCIttoFQGLrRQY">
                                        <input type="hidden" name="prod_id" value="<?php echo $r['prod_id'] ?>" />
                                        <input type="hidden" name="name" value="<?php echo $r['name'] ?>" />
                                        <input type="hidden" name="price_after" value="<?php echo $r['price_after'] ?>" />
                                    <button name="sub" type="submit" class="product-add add_to_cart_btn" type="submit">
                                        <span class="sicon-cart"></span>
                                        إضافة للسلة
                                    </button>
                                  </form>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                  <!-- end of sql select code -->
                  <!-- end of the post  -->
                  
        
                       

           </div>
        </section>
            <section class="section">
                <div class="container">
                    <div class="category-grid">
                    </div>
                </div>
            </section>

<!-- end of section 1  -->


























            <!-- start section 2  -->
        <section class="section has-slider">
        <div class="container">
                <div class="section-header d-flex mb-4">
                    <h2 class="section--title">
                        <span>&#x62C;&#x644;&#x627;&#x643;&#x633;&#x64A; &#x627;&#x633; 23 &#x627;&#x644;&#x62A;&#x631;&#x627; </span>
                    </h2>
                    <div class="section-actions">
                        <a class="circle-action button-next" href="#">
                            <span class="sicon-arrow-right"></span>
                </a>
                        <a class="circle-action button-prev" href="#">
                            <span class="sicon-arrow-left"></span>
                        </a>
                        <a class="button-more" href="store/category/57.php">عرض الكل</a>

                        
                    </div>
                </div>
        <div class="products-listing product-listing-top">
            <?php
                               $rs =mysqli_query($conn,"select * from products,cate where products.cate_id=cate.cat_id and cat_name='Galaxy_s_23_ultra'");

            
            ?>
        <?php foreach($rs as $r):?>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="product">
                        <a href="store/Product/158.php?id=<?php echo $r['prod_id']?>" rel="canonical">

                                    <!-- discount start -->
                                    <span class="ribbons">
                                        <span class="onsale ribbon">
                                            <span class="onsep">-</span>
                                               <?php
                                          $originalPrice = $r['price'];
                                          $discountedPrice = $r['price_after'];
                                        $discountPercentage = (($originalPrice - $discountedPrice) / $originalPrice) * 100;
                                        echo number_format($discountPercentage, 1, '.', '');
                                              ?>
                                            <span class="per">%</span>
                                        </span>
                                    </span>

                                    <!-- discount end -->
                                <span class="img-cont">
                                    <img data-src="admin/upload/<?php echo $r['img']?>" alt="&#x62C;&#x627;&#x644;&#x627;&#x643;&#x633;&#x64A; &#x627;&#x633; 23 &#x627;&#x644;&#x62A;&#x631;&#x627; &#x630;&#x627;&#x643;&#x631;&#x647; 256" src="theme/assets.salla.cloud/themes/default/assets/images/product-loading2d19.png?v=v1.4.875" class="lazyload">
                                </span>
                                <h3 class="product-title">
                                    <?php echo $r['name']?>
                                </h3>
                            </a>
                            <div class="product-footer">
                                <p class="product-price">
                                        <span class="price-before"><?php echo $r['price']?> &#x631;.&#x633;</span>
                                    <span class="price-after"><?php echo $r['price_after']?>&#x631;.&#x633;</span>
                                </p>
                                <form action="add_to_cart.php" method="post" class="add_to_cart_form">
                                        <input type="hidden" name="_token" value="IkhHIFqEP3q0i7tOxx6tNijekmfCIttoFQGLrRQY">
                                        <input type="hidden" name="prod_id" value="<?php echo $r['prod_id'] ?>" />
                                        <input type="hidden" name="name" value="<?php echo $r['name'] ?>" />
                                        <input type="hidden" name="price_after" value="<?php echo $r['price_after'] ?>" />
                                    <button name="sub" type="submit" class="product-add add_to_cart_btn" type="submit">
                                        <span class="sicon-cart"></span>
                                        إضافة للسلة
                                    </button>
                                  </form>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                   
        </section>
            <section class="section">
                <div class="container">
                    <div class="category-grid">
                    </div>
                </div>
            </section>
<!-- end of section 2  -->

            <!-- third section with sidebar -->
        <section class="section has-slider">
        <div class="container">
                <div class="section-header d-flex mb-4">
                    <h2 class="section--title">
                        <span>&#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646; 5 </span>
                    </h2>
                    <div class="section-actions">
                        <a class="circle-action button-next" href="#">
                            <span class="sicon-arrow-right"></span>
                </a>
                        <a class="circle-action button-prev" href="#">
                            <span class="sicon-arrow-left"></span>
                        </a>
                        <a class="button-more" href="store/category/1.php">عرض الكل</a>
                    </div>
                </div>
        <div class="products-listing product-listing-top">
        <?php
                               $rss =mysqli_query($conn,"select * from products,cate where products.cate_id=cate.cat_id and cat_name='playstation_5'");

            
            ?>
        <?php foreach($rss as $r):?>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="product">
                        <a href="store/Product/158.php?id=<?php echo $r['prod_id']?>" rel="canonical">

                                    <!-- discount start -->
                                    <span class="ribbons">
                                        <span class="onsale ribbon">
                                            <span class="onsep">-</span>
                                               <?php
                                          $originalPrice = $r['price'];
                                          $discountedPrice = $r['price_after'];
                                        $discountPercentage = (($originalPrice - $discountedPrice) / $originalPrice) * 100;
                                        echo number_format($discountPercentage, 1, '.', '');
                                              ?>
                                            <span class="per">%</span>
                                        </span>
                                    </span>

                                    <!-- discount end -->
                                <span class="img-cont">
                                    <img data-src="admin/upload/<?php echo $r['img']?>" alt="&#x62C;&#x627;&#x644;&#x627;&#x643;&#x633;&#x64A; &#x627;&#x633; 23 &#x627;&#x644;&#x62A;&#x631;&#x627; &#x630;&#x627;&#x643;&#x631;&#x647; 256" src="theme/assets.salla.cloud/themes/default/assets/images/product-loading2d19.png?v=v1.4.875" class="lazyload">
                                </span>
                                <h3 class="product-title">
                                    <?php echo $r['name']?>
                                </h3>
                            </a>
                            <div class="product-footer">
                                <p class="product-price">
                                        <span class="price-before"><?php echo $r['price']?> &#x631;.&#x633;</span>
                                    <span class="price-after"><?php echo $r['price_after']?>&#x631;.&#x633;</span>
                                </p>
                                <form action="add_to_cart.php" method="post" class="add_to_cart_form">
                                        <input type="hidden" name="_token" value="IkhHIFqEP3q0i7tOxx6tNijekmfCIttoFQGLrRQY">
                                        <input type="hidden" name="prod_id" value="<?php echo $r['prod_id'] ?>" />
                                        <input type="hidden" name="name" value="<?php echo $r['name'] ?>" />
                                        <input type="hidden" name="price_after" value="<?php echo $r['price_after'] ?>" />
                                    <button name="sub" type="submit" class="product-add add_to_cart_btn" type="submit">
                                        <span class="sicon-cart"></span>
                                        إضافة للسلة
                                    </button>
                                  </form>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                   
                   
           </div>
        </section>
            <section class="section">
                <div class="container">
                    <div class="category-grid">


                    </div>
                </div>
            </section>

<!-- end of section 3  -->











































            <!-- four section with sidebar -->
        <section class="section has-slider">
        <div class="container">
                <div class="section-header d-flex mb-4">
                    <h2 class="section--title">
                        <span>&#x644;&#x627;&#x628; &#x62A;&#x648;&#x628;&#x627;&#x62A; &#x627;&#x628;&#x644; </span>
                    </h2>
                    <div class="section-actions">
                        <a class="circle-action button-next" href="#">
                            <span class="sicon-arrow-right"></span>
                </a>
                        <a class="circle-action button-prev" href="#">
                            <span class="sicon-arrow-left"></span>
                        </a>
                        <a class="button-more" href="store/category/18.php">عرض الكل</a>
                    </div>
                </div>
        <div class="products-listing product-listing-top">
        <?php
                               $rss =mysqli_query($conn,"select * from products,cate where products.cate_id=cate.cat_id and cat_name='apple_laps'");

            
            ?>
        <?php foreach($rss as $r):?>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="product">
                        <a href="store/Product/158.php?id=<?php echo $r['prod_id']?>" rel="canonical">

                                    <!-- discount start -->
                                    <span class="ribbons">
                                        <span class="onsale ribbon">
                                            <span class="onsep">-</span>
                                               <?php
                                          $originalPrice = $r['price'];
                                          $discountedPrice = $r['price_after'];
                                        $discountPercentage = (($originalPrice - $discountedPrice) / $originalPrice) * 100;
                                        echo number_format($discountPercentage, 1, '.', '');
                                              ?>
                                            <span class="per">%</span>
                                        </span>
                                    </span>

                                    <!-- discount end -->
                                <span class="img-cont">
                                    <img data-src="admin/upload/<?php echo $r['img']?>" alt="&#x62C;&#x627;&#x644;&#x627;&#x643;&#x633;&#x64A; &#x627;&#x633; 23 &#x627;&#x644;&#x62A;&#x631;&#x627; &#x630;&#x627;&#x643;&#x631;&#x647; 256" src="theme/assets.salla.cloud/themes/default/assets/images/product-loading2d19.png?v=v1.4.875" class="lazyload">
                                </span>
                                <h3 class="product-title">
                                    <?php echo $r['name']?>
                                </h3>
                            </a>
                            <div class="product-footer">
                                <p class="product-price">
                                        <span class="price-before"><?php echo $r['price']?> &#x631;.&#x633;</span>
                                    <span class="price-after"><?php echo $r['price_after']?>&#x631;.&#x633;</span>
                                </p>
                                <form action="add_to_cart.php" method="post" class="add_to_cart_form">
                                        <input type="hidden" name="_token" value="IkhHIFqEP3q0i7tOxx6tNijekmfCIttoFQGLrRQY">
                                        <input type="hidden" name="prod_id" value="<?php echo $r['prod_id'] ?>" />
                                        <input type="hidden" name="name" value="<?php echo $r['name'] ?>" />
                                        <input type="hidden" name="price_after" value="<?php echo $r['price_after'] ?>" />
                                    <button name="sub" type="submit" class="product-add add_to_cart_btn" type="submit">
                                        <span class="sicon-cart"></span>
                                        إضافة للسلة
                                    </button>
                                  </form>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                  
           </div>
        </section>
            <section class="section">
                <div class="container">
                    <div class="category-grid">

                    </div>
                </div>
            </section>

<!-- end of section four -->











































<!-- costumers reviews -->
<?php include 'page_structure/reviews.php'?>
<!-- end of costumers reviews -->





























<!-- start with whats up icon and script -->
    <script src="theme/code.jquery.com/jquery-3.3.1.js" type="217ebb6a9117e6efb914a3a4-text/javascript"></script>
    <meta charset="UTF-8">



    <script type="217ebb6a9117e6efb914a3a4-text/javascript" src="theme/smartarget.online/loadercd92.js?u=fd08f4cde818682ec83f3da8f89ae8c64edfb165&amp;source=salla_popup"></script>
    <script src="theme/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="217ebb6a9117e6efb914a3a4-|49" defer=""></script>
    <script defer="" src="beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"71c5d8355a9dcd71","token":"0ba4cd7067784c07aa8f5f733dd0f1a2","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>
    <link href="theme/assets.salla.cloud/css/StyleSheet.css" rel="stylesheet">

<!-- end of whats up icon -->
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-be563f52-43ea-4dd1-9800-41c30438e12c"></div>
<!-- end of whats up icon  -->




































<!-- start php script -->

<?php
$facebook = mysqli_query($conn,"select * from sitesetting where id=5");
$twitter = mysqli_query($conn,"select * from sitesetting where id=3");
$whatsup = mysqli_query($conn,"select * from sitesetting where id=2");
$email = mysqli_query($conn,"select * from sitesetting where id=6");
$a = mysqli_query($conn,"select * from sitesetting where id=7");

// 
$face = mysqli_fetch_assoc($facebook);
$twit = mysqli_fetch_assoc($twitter);
$whats = mysqli_fetch_assoc($whatsup);
$em = mysqli_fetch_assoc($email);
$aa = mysqli_fetch_assoc($a);

?>

<!-- end of php script -->








    <!-- foooter of the website -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="footer-title">
                            <span>من نحن</span>
                        </h2>
                        <p>نهتم ونحرص دائم على رضاء العميل ونطمح للوصول الى أكبر شريحة من العملاء</p>
                        <div class="store-contact">
                            <a href="<?php echo $whats['link']?>" rel="nofollow" style="direction:ltr" target="_blank">
                                <i class="sicon-whatsapp2"></i>
                                واتساب
                            </a>&nbsp;
                            <a href="mailto:protecksa12@gmail.com">
                                <i class="sicon-mail"></i>
                                ايميل:<?php echo $em['link']?>
                            </a>&nbsp;
                        </div>
                        <div class="store-certificate">
                            <a href="#">
                                <img src="theme/assets.salla.cloud/themes/default/assets/images/maroof2d19.png?v=v1.4.875" alt=" ">
                            </a>
                            <a href="#" class="tax-certificate pdf" style="display: none">
                                <img src="theme/assets.salla.cloud/themes/default/assets/images/tax2d19.png?v=v1.4.875" alt=" ">
                            </a>
                            <a href="#" class="tax-certificate image ">
                                <img src="theme/assets.salla.cloud/themes/default/assets/images/tax2d19.png?v=v1.4.875" alt=" ">
                            </a>
                            <span class="font-13">
                                الرقم الضريبي:
                                <b class="d-inline-block text-plain v-align-middle">
                                    310714433300003
                                </b>
                            </span>
                        </div>
                        <div class="modal fade" id="tax_certificate_modal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header no-border">
                                        <p class="mb-15 font-16 text-bold">
                                            الرقم الضريبي:
                                            310714433300003
                                        </p>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img class="w-100" src="theme/cdn.salla.sa/WlXGP/OZHA1EfusZu1WYxzYRvC222JhCKi083mmOg1FHIE.jpg" alt="302277430400003">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <h2 class="footer-title"><span>روابط مهمة</span></h2>
                        <ul class="footer-links">
                            <li><a href="Home/TermsConditions.php"> سياسة الضمان والاستبدال </a></li>
                            <li><a href="Home/WorkTimes.php"> اوقات العمل </a></li>
                            <li><a href="Home/RefundAndCancleOrders.php"> استرجاع الطلبات / الغاء الطلب / استرجاع المبالغ </a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h2 class="footer-title">
                            <span>تواصل معنا</span>
                        </h2>
                        <ul class="social clearfix">
                            <li class="social__item">
                                <a href="<?php echo $face['link']?>" target="_blank">
                                    <span class="sicon-facebook"></span>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="<?php echo $twit['link']?>" target="_blank">
                                    <span class="sicon-twitter"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-sub">
            <div class="container">
                <div class="fs-cont">
                    <div class="fs-rights">
               
                    </div>
                    <div class="fs-payment">
                        <div class="icons">
                            <div class="store-certificate">
                                <a href="#">
                                    <img src="theme/assets.salla.cloud/themes/default/assets/images/maroof2d19.png?v=v1.4.875" alt=" ">
                                </a>
                                <a href="#" class="tax-certificate pdf" style="display: none">
                                    <img src="theme/assets.salla.cloud/themes/default/assets/images/tax2d19.png?v=v1.4.875" alt=" ">
                                </a>
                                <a href="#" class="tax-certificate image ">
                                    <img src="theme/assets.salla.cloud/themes/default/assets/images/tax2d19.png?v=v1.4.875" alt=" ">
                                </a>
                                <span class="font-13">
                                    الرقم الضريبي:
                                    <b class="d-inline-block text-plain v-align-middle">
                                        <?php echo $aa['link']?>
                                    </b>
                                </span>
                            </div>
                            <div class="modal fade" id="tax_certificate_modal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-border">
                                            <p class="mb-15 font-16 text-bold">
                                                الرقم الضريبي:
                                                310714433300003
                                            </p>
                                        </div>
                                        <div class="modal-body text-center">
                                            <img class="w-100" src="theme/cdn.salla.sa/WlXGP/OZHA1EfusZu1WYxzYRvC222JhCKi083mmOg1FHIE.jpg" alt="302277430400003">
                                        </div>
                                    </div>
                                </div>
                            </div> <div>
                                <img src="theme/assets.salla.cloud/themes/default/assets/images/mada2d19.png?v=v1.4.875" alt=" ">
                                <img src="theme/assets.salla.cloud/themes/default/assets/images/cc2d19.png?v=v1.4.875" alt=" ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="nav-overlay"></div>
    <div id="div_ajax"></div>
    <script type="217ebb6a9117e6efb914a3a4-text/javascript">
        var _token = 'LTuN0qgPxgOxKu8azjHipCsIP8iszPfhq3fhZQRS';
        var _store = 'Pro tech';
        var baseUrl = 'index.html';
            //<![CDATA[
        var Salla = Salla || {};
        Salla.shop = "index.html";
        Salla.token = "LTuN0qgPxgOxKu8azjHipCsIP8iszPfhq3fhZQRS";
        Salla.theme = {'name': "theme_6"};
        Salla.Settings = {'arabic_numbers': "0"};
        //]]>
    </script>
    <script src="theme/assets.salla.cloud/js/es473a.js?id=d5cfbcf7a982428940ba6f62dca53629" type="217ebb6a9117e6efb914a3a4-text/javascript"></script>
    <script src="theme/assets.salla.cloud/js/app51f2.js?id=23318ed211a2ce3f9176ec25049b3f91" type="217ebb6a9117e6efb914a3a4-text/javascript"></script>
    <script src="theme/assets.salla.cloud/js/themese062.js?id=f77777c421a834dc59eb36e46dc30444" type="217ebb6a9117e6efb914a3a4-text/javascript"></script>
    <script type="217ebb6a9117e6efb914a3a4-application/javascript">
        window.Salla = window.Salla || {};
        window.Salla.Events = {"page.view":{"route":"store.home","link":"https://protichksa.com/"},"services::adwords.init":{"services":{"adwords":{"conversion_id":"673352264","conversion_label":"cXmBCIPxgYACEMiUisEC"}}},"services::facebook_pixel.init":{"services":{"facebook_pixel":{"pixel_id":"388710135549777"}}},"services::google_analytics.init":{"services":{"google_analytics":{"tracking_id":"UA-174761042-1"}}},"services::snapchat_pixel.init":{"services":{"snapchat_pixel":{"pixel_id":"63361860-112e-4554-9f35-af465451355d"}}},"services::tiktok_pixel.init":{"services":{"tiktok_pixel":{"pixel_id":"C6MDLF3S5310I01MVJD0"}}},"services::twitter_pixel.init":{"services":{"twitter_pixel":{"pixel_id":"o3ku3"}}}};
    </script>
    <script src="theme/assets.salla.cloud/vendor/salla/events.js" type="217ebb6a9117e6efb914a3a4-text/javascript"></script>



    <script type="217ebb6a9117e6efb914a3a4-text/javascript" src="theme/assets.salla.cloud/themes/default/assets/js/plugins/slick2d19.js?v=v1.4.875"></script>
    <script type="217ebb6a9117e6efb914a3a4-text/javascript" src="theme/assets.salla.cloud/themes/theme_6/assets/js/app2d19.js?v=v1.4.875"></script>
    <script type="217ebb6a9117e6efb914a3a4-text/javascript" src="theme/assets.salla.cloud/themes/default/assets/js/plugins/jquery-ui.min2d19.js?v=v1.4.875"></script>


    <div class="pace-demo hidden">
        <div class="theme_tail_circle">
            <div class="pace_progress" data-progress-text="60%" data-progress="60"></div>
            <div class="pace_activity"></div>
        </div>
    </div>
    <div id="div_ajax"></div>


   

    <script src="lib/jquery/dist/jquery.js"></script>
    <script src="lib/bootstrap/dist/js/bootstrap.js"></script>
    <script src="ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        $(document).ready(function () {
            // $(".product-add, .add_to_cart_large_btn").off("click").click(function () {
            //     var id = $(this).attr("data-product-id");
            //     showLoading();
            //     setTimeout(function () {

            //         $.ajax({
            //             type: "post",
            //             url: '/Store/AddItemToBasket/',
            //             data: { 'productId': id, "quantity": 1 },
            //             success: function (data) {
            //                 if (data.success) {
            //                     toastr.success(data.message);
            //                     hideLoading();
            //                     $(".cart_badge").text(data.count);
            //                     $("#cart_badge_total_price").text(data.total);
            //                 }
            //                 else {
            //                     toastr.error(data.message);
            //                     hideLoading();
            //                 }
            //             }
            //         });
            //     }, 10);

            // });





            $(".add_to_cart_form").submit(function(e) {
                e.preventDefault(); // Prevent default form submission
                var form_data = $(this).serialize(); // Serialize form data
                $.ajax({
                    url: "add_to_cart.php", // PHP script file
                    type: "POST",
                    data: form_data, // Data to be sent to the server
                    success: function(response) {
                        // Display the response
                        data = JSON.parse(response);

                        if (data.success) {
                            $(".cart_badge").text(data.count);
                            $("#cart_badge_total_price").text(data.total);
                            toastr.success(data.message);
                        }

                    }
                });
            });





        });
    </script>
    
</body>
</html>