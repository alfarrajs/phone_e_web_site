<!DOCTYPE html>


<html lang="ar" dir="rtl">

<?php
  // start session
  session_start();

  // connect to database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "phone_e";

  $conn = new mysqli($servername, $username, $password, $dbname);

 
  // check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // prepare and bind SQL statement
  $stmt = $conn->prepare("SELECT * FROM tmp_cart,products WHERE tmp_cart.item_id=products.prod_id AND  user_lim = ? ");
  $stmt->bind_param("s", $session_id);

  // set parameter values and execute statement
  $session_id = session_id();
  $stmt->execute();

  // get result and output data
  $result = $stmt->get_result();
  
  // close statement and database connection
  $stmt->close();
  $conn->close();
?>





































<head>
    <style>

        @import url('../theme/assets.salla.cloud/fonts/default2d19.css');</style>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="theme-color" content="#727272">
    <meta name="msapplication-navbutton-color" content="#727272">
    <meta name="apple-mobile-web-app-status-bar-style" content="#727272">

    <link rel="icon" type="image/png" href="../Images/Original/11a4d886-5bd0-469a-bda2-f95d9cbec64a.jpg">
    <link rel="apple-touch-icon-precomposed" href="../Images/Original/11a4d886-5bd0-469a-bda2-f95d9cbec64a.jpg">
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
    <link rel="stylesheet" href="../theme/assets.salla.cloud/css/app9d6c.css?id=afd29fb09b6554d13af9846ce72da9ea">

    <link rel="stylesheet" href="../theme/assets.salla.cloud/css/themes4b5f.css?id=3ee4c615e0fdf12513b2507d3b268ed2">
    <link rel="stylesheet" href="../theme/assets.salla.cloud/css/pluginsd278.css?id=51437878867e69288ff737f568585dde">

    <link rel="stylesheet" href="../theme/assets.salla.cloud/themes/default/assets/css/slick-theme2d19.css?v=v1.4.875">
    <link rel="stylesheet" href="../theme/assets.salla.sa/cp/assets/css/icons/sallaicons/style.css">
    <link rel="stylesheet" href="../theme/assets.salla.cloud/themes/theme_6/assets/css/main2d19.css?v=v1.4.875">
    <link rel="stylesheet" href="../ajax/libs/toastr.js/latest/css/toastr.min.css">

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
            background-image: url(../Images/Original/11a4d886-5bd0-469a-bda2-f95d9cbec64a.jpg);
            background-size: contain !important;
            background-repeat: no-repeat !important;
            background-position: top center !important;
        }

        .sub-nav-header::before {
            content: "";
            text-align: center !important;
            display: block;
            height: 50px !important;
            background-image: url(../Images/Original/11a4d886-5bd0-469a-bda2-f95d9cbec64a.jpg);
            background-size: contain !important;
            background-repeat: no-repeat !important;
            background-position: top center !important;
        }
    </style>
    <link href="../theme/assets.salla.cloud/css/intlTelInput0309.css?id=53d3f9e5ce3c027b0bddc8be6f8c1283" rel="stylesheet">
    <link rel="stylesheet" href="../theme/assets.salla.cloud/themes/theme_6/assets/css/theme-custom2d19.css?v=v1.4.875">
    <link rel="stylesheet" href="../css/mainStyleSheet.css">
    <script src="../theme/cdn.polyfill.io/v3/polyfill.mina9ef.js?flags=gated&amp;features=Promise%2CObject.assign%2CObject.values%2CArray.prototype.find%2CArray.prototype.findIndex%2CArray.prototype.includes%2CString.prototype.includes%2CString.prototype.startsWith%2CString.prototype.endsWith%2Cdocument.getElementsByClassName%2CPromise.prototype.finally%2CString.prototype.includes%2CNumber.isNaN%2Ces6%2CEvent%2CCustomEvent" type="217ebb6a9117e6efb914a3a4-text/javascript"></script>
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
                        <a href="../index.php">
                            <img src="../Images/Original/11a4d886-5bd0-469a-bda2-f95d9cbec64a.jpg" alt="&#x628;&#x631;&#x648; &#x62A;&#x64A;&#x643; : Pro tech">
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
                                <?php echo $total_price; ?> &#x631;.&#x633;
                            </span>
                        </div>
                    </a>
                    <a data-cart-small="" href="Cart.php" class="ml-1 circle-action d-lg-none site-header__mine-cart" rel="nofollow">
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

            
<ul class="main-menu">

        <li id="1" class="has-children">
            <a href="javascript:;">&#x627;&#x644;&#x647;&#x648;&#x627;&#x62A;&#x641; &#x627;&#x644;&#x630;&#x643;&#x64A;&#x629;</a>
            <ul>
                    <li id="12">
                        <a href="category/12.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;</a>
                    </li>
                    <li id="13">
                        <a href="category/13.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 </a>
                    </li>
                    <li id="14">
                        <a href="category/14.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 &#x645;&#x64A;&#x646;&#x64A; </a>
                    </li>
                    <li id="15">
                        <a href="category/15.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 12 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;</a>
                    </li>
                    <li id="16">
                        <a href="category/16.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 12 </a>
                    </li>
                    <li id="17">
                        <a href="category/17.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 12 &#x645;&#x64A;&#x646;&#x64A;</a>
                    </li>
                    <li id="24">
                        <a href="category/24.php">&#x63A;&#x637;&#x627;&#x621; &#x623;&#x628;&#x644;</a>
                    </li>
                    <li id="40">
                        <a href="category/40.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 &#x628;&#x631;&#x648;</a>
                    </li>
                    <li id="50">
                        <a href="category/50.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;</a>
                    </li>
                    <li id="51">
                        <a href="category/51.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x631;&#x648;</a>
                    </li>
                    <li id="52">
                        <a href="category/52.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x644;&#x633;</a>
                    </li>
                    <li id="53">
                        <a href="category/53.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14</a>
                    </li>
                    <li id="57">
                        <a href="category/57.php">&#x62C;&#x644;&#x627;&#x643;&#x633;&#x64A; &#x627;&#x633; 23 &#x627;&#x644;&#x62A;&#x631;&#x627;</a>
                    </li>
            </ul>
        </li>
        <li id="2" class="has-children">
            <a href="javascript:;">&#x633;&#x627;&#x639;&#x627;&#x62A; &#x630;&#x643;&#x64A;&#x629;</a>
            <ul>
                    <li id="8">
                        <a href="category/8.php">&#x633;&#x627;&#x639;&#x627;&#x62A; &#x627;&#x628;&#x644;</a>
                    </li>
            </ul>
        </li>
        <li id="3" class="has-children">
            <a href="javascript:;">&#x623;&#x62C;&#x647;&#x632;&#x629; &#x635;&#x648;&#x62A; &#x648; &#x633;&#x645;&#x627;&#x639;&#x627;&#x62A;</a>
            <ul>
                    <li id="6">
                        <a href="category/6.php">&#x633;&#x645;&#x627;&#x639;&#x627;&#x62A; &#x623;&#x628;&#x644;</a>
                    </li>
                    <li id="7">
                        <a href="category/7.php">&#x633;&#x645;&#x627;&#x639;&#x627;&#x62A; &#x633;&#x628;&#x64A;&#x643;&#x631;</a>
                    </li>
                    <li id="36">
                        <a href="category/36.php">&#x633;&#x645;&#x627;&#x639;&#x627;&#x62A; &#x645;&#x62A;&#x646;&#x648;&#x639;&#x647;</a>
                    </li>
            </ul>
        </li>
        <li id="4" class="has-children">
            <a href="javascript:;">&#x623;&#x62C;&#x647;&#x632;&#x629; &#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646;</a>
            <ul>
                    <li id="1">
                        <a href="category/1.php">&#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646; 5</a>
                    </li>
                    <li id="2">
                        <a href="category/2.php">&#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646;  4</a>
                    </li>
                    <li id="3">
                        <a href="category/3.php">&#x627;&#x643;&#x633; &#x628;&#x648;&#x643;&#x633; &#x648;&#x646;</a>
                    </li>
                    <li id="4">
                        <a href="category/4.php">&#x64A;&#x62F; &#x62A;&#x62D;&#x643;&#x645;</a>
                    </li>
                    <li id="5">
                        <a href="category/5.php">&#x645;&#x644;&#x62D;&#x642;&#x627;&#x62A; &#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646;</a>
                    </li>
            </ul>
        </li>
        <li id="5" class="has-children">
            <a href="javascript:;">&#x644;&#x627;&#x628;&#x62A;&#x648;&#x628;&#x627;&#x62A; &#x648;&#x634;&#x627;&#x634;&#x627;&#x62A;</a>
            <ul>
                    <li id="18">
                        <a href="category/18.php">&#x644;&#x627;&#x628; &#x62A;&#x648;&#x628;&#x627;&#x62A; &#x627;&#x628;&#x644;</a>
                    </li>
            </ul>
        </li>
        <li id="7" class="has-children">
            <a href="javascript:;">&#x627;&#x64A;&#x628;&#x627;&#x62F;</a>
            <ul>
                    <li id="27">
                        <a href="category/27.php">&#x671;&#x628;&#x644;</a>
                    </li>
            </ul>
        </li>
        <li id="8" class="has-children">
            <a href="javascript:;">&#x628;&#x637;&#x627;&#x631;&#x64A;&#x627;&#x62A; &#x645;&#x62A;&#x646;&#x642;&#x644;&#x629; &#x648;&#x643;&#x64A;&#x627;&#x628;&#x644;</a>
            <ul>
                    <li id="28">
                        <a href="category/28.php">&#x628;&#x637;&#x627;&#x631;&#x64A;&#x627;&#x62A; &#x645;&#x62A;&#x646;&#x642;&#x644;&#x629;</a>
                    </li>
            </ul>
        </li>
        <li id="9" class="has-children">
            <a href="javascript:;">&#x623;&#x644;&#x639;&#x627;&#x628; &#x627;&#x644;&#x641;&#x64A;&#x62F;&#x64A;&#x648;</a>
            <ul>
                    <li id="29">
                        <a href="category/29.php">&#x645;&#x627;&#x648;&#x633;&#x627;&#x62A; &#x648;&#x643;&#x64A;&#x628;&#x648;&#x631;&#x62F;&#x627;&#x62A; &#x623;&#x644;&#x639;&#x627;&#x628;</a>
                    </li>
                    <li id="30">
                        <a href="category/30.php">&#x645;&#x627;&#x64A;&#x643;&#x631;&#x648;&#x641;&#x648;&#x646;&#x627;&#x62A;</a>
                    </li>
                    <li id="31">
                        <a href="category/31.php">&#x645;&#x62C;&#x633;&#x645;&#x627;&#x62A; &#x648;&#x641;&#x64A;&#x642;&#x631;&#x632;</a>
                    </li>
                    <li id="32">
                        <a href="category/32.php">&#x625;&#x636;&#x627;&#x621;&#x627;&#x62A; RGB</a>
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
                                <a href="category/12.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;</a>
                            </li>
                            <li id="13">
                                <a href="category/13.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 </a>
                            </li>
                            <li id="14">
                                <a href="category/14.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 &#x645;&#x64A;&#x646;&#x64A; </a>
                            </li>
                            <li id="15">
                                <a href="category/15.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 12 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;</a>
                            </li>
                            <li id="16">
                                <a href="category/16.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 12 </a>
                            </li>
                            <li id="17">
                                <a href="category/17.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 12 &#x645;&#x64A;&#x646;&#x64A;</a>
                            </li>
                            <li id="24">
                                <a href="category/24.php">&#x63A;&#x637;&#x627;&#x621; &#x623;&#x628;&#x644;</a>
                            </li>
                            <li id="40">
                                <a href="category/40.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 &#x628;&#x631;&#x648;</a>
                            </li>
                            <li id="50">
                                <a href="category/50.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;</a>
                            </li>
                            <li id="51">
                                <a href="category/51.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x631;&#x648;</a>
                            </li>
                            <li id="52">
                                <a href="category/52.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x644;&#x633;</a>
                            </li>
                            <li id="53">
                                <a href="category/53.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14</a>
                            </li>
                            <li id="57">
                                <a href="category/57.php">&#x62C;&#x644;&#x627;&#x643;&#x633;&#x64A; &#x627;&#x633; 23 &#x627;&#x644;&#x62A;&#x631;&#x627;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x633;&#x627;&#x639;&#x627;&#x62A; &#x630;&#x643;&#x64A;&#x629;</a>
                    <ul style="position:inherit">
                            <li id="8">
                                <a href="category/8.php">&#x633;&#x627;&#x639;&#x627;&#x62A; &#x627;&#x628;&#x644;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x623;&#x62C;&#x647;&#x632;&#x629; &#x635;&#x648;&#x62A; &#x648; &#x633;&#x645;&#x627;&#x639;&#x627;&#x62A;</a>
                    <ul style="position:inherit">
                            <li id="6">
                                <a href="category/6.php">&#x633;&#x645;&#x627;&#x639;&#x627;&#x62A; &#x623;&#x628;&#x644;</a>
                            </li>
                            <li id="7">
                                <a href="category/7.php">&#x633;&#x645;&#x627;&#x639;&#x627;&#x62A; &#x633;&#x628;&#x64A;&#x643;&#x631;</a>
                            </li>
                            <li id="36">
                                <a href="category/36.php">&#x633;&#x645;&#x627;&#x639;&#x627;&#x62A; &#x645;&#x62A;&#x646;&#x648;&#x639;&#x647;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x623;&#x62C;&#x647;&#x632;&#x629; &#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646;</a>
                    <ul style="position:inherit">
                            <li id="1">
                                <a href="category/1.php">&#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646; 5</a>
                            </li>
                            <li id="2">
                                <a href="category/2.php">&#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646;  4</a>
                            </li>
                            <li id="3">
                                <a href="category/3.php">&#x627;&#x643;&#x633; &#x628;&#x648;&#x643;&#x633; &#x648;&#x646;</a>
                            </li>
                            <li id="4">
                                <a href="category/4.php">&#x64A;&#x62F; &#x62A;&#x62D;&#x643;&#x645;</a>
                            </li>
                            <li id="5">
                                <a href="category/5.php">&#x645;&#x644;&#x62D;&#x642;&#x627;&#x62A; &#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x644;&#x627;&#x628;&#x62A;&#x648;&#x628;&#x627;&#x62A; &#x648;&#x634;&#x627;&#x634;&#x627;&#x62A;</a>
                    <ul style="position:inherit">
                            <li id="18">
                                <a href="category/18.php">&#x644;&#x627;&#x628; &#x62A;&#x648;&#x628;&#x627;&#x62A; &#x627;&#x628;&#x644;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x627;&#x64A;&#x628;&#x627;&#x62F;</a>
                    <ul style="position:inherit">
                            <li id="27">
                                <a href="category/27.php">&#x671;&#x628;&#x644;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x628;&#x637;&#x627;&#x631;&#x64A;&#x627;&#x62A; &#x645;&#x62A;&#x646;&#x642;&#x644;&#x629; &#x648;&#x643;&#x64A;&#x627;&#x628;&#x644;</a>
                    <ul style="position:inherit">
                            <li id="28">
                                <a href="category/28.php">&#x628;&#x637;&#x627;&#x631;&#x64A;&#x627;&#x62A; &#x645;&#x62A;&#x646;&#x642;&#x644;&#x629;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x623;&#x644;&#x639;&#x627;&#x628; &#x627;&#x644;&#x641;&#x64A;&#x62F;&#x64A;&#x648;</a>
                    <ul style="position:inherit">
                            <li id="29">
                                <a href="category/29.php">&#x645;&#x627;&#x648;&#x633;&#x627;&#x62A; &#x648;&#x643;&#x64A;&#x628;&#x648;&#x631;&#x62F;&#x627;&#x62A; &#x623;&#x644;&#x639;&#x627;&#x628;</a>
                            </li>
                            <li id="30">
                                <a href="category/30.php">&#x645;&#x627;&#x64A;&#x643;&#x631;&#x648;&#x641;&#x648;&#x646;&#x627;&#x62A;</a>
                            </li>
                            <li id="31">
                                <a href="category/31.php">&#x645;&#x62C;&#x633;&#x645;&#x627;&#x62A; &#x648;&#x641;&#x64A;&#x642;&#x631;&#x632;</a>
                            </li>
                            <li id="32">
                                <a href="category/32.php">&#x625;&#x636;&#x627;&#x621;&#x627;&#x62A; RGB</a>
                            </li>
                    </ul>
                </li>

        </ul>
    </li>


</ul>
        </div>
    </div>

    <!--  -->

   
    <div class="breadcrumb-container mobile-webview-hide">
    <div class="container container--default">
        <ol class="breadcrumb">
            <li class="breadcrumb-item home"><a href="../index.php">الرئيسية</a></li>
            <li class="breadcrumb-item active">الدفع</li>
        </ol>
    </div>
</div>
<div class="store-header-min">
    <div class="the-container">
        <div class="row no-margin cart-steps mobile-card-cart-steps">
            <div class="cart-box cart-box--custom">
                <div class="cart-step  active-step ">
                    <div class="step-cont">
                        <div class="icon-cont">
                            <svg width="512px" height="480px" viewBox="0 0 512 480" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="shopping-cart" fill="#000000" fill-rule="nonzero">
                                        <path d="M396,440 C401.519531,440 406,435.519531 406,430 C406,424.480469 401.519531,420 396,420 C390.480469,420 386,424.480469 386,430 C386,435.519531 390.480469,440 396,440 Z" id="Path"></path>
                                        <path d="M230,440 C235.519531,440 240,435.519531 240,430 C240,424.480469 235.519531,420 230,420 C224.480469,420 220,424.480469 220,430 C220,435.519531 224.480469,440 230,440 Z" id="Path"></path>
                                        <path d="M509.882812,123.847656 C507.988281,121.417969 505.078125,120 502,120 L141.996094,120 L119.203125,23.125 C115.992188,9.507812 103.980469,0 90,0 L30,0 C13.457031,0 0,13.457031 0,30 C0,46.542969 13.457031,60 30,60 L66.238281,60 L140.796875,376.875 C144.007812,390.492188 156.019531,400 170,400 L190.027344,400 C183.734375,408.363281 180,418.753906 180,430 C180,457.570312 202.429688,480 230,480 C257.570312,480 280,457.570312 280,430 C280,418.753906 276.265625,408.363281 269.972656,400 L356.027344,400 C349.734375,408.363281 346,418.753906 346,430 C346,457.570312 368.429688,480 396,480 C423.570312,480 446,457.570312 446,430 C446,418.753906 442.265625,408.363281 435.972656,400 L436,400 C452.542969,400 466,386.542969 466,370 C466,353.457031 452.542969,340 436,340 L193.761719,340 L184.347656,300 L242.96875,300 L242.988281,300 L243.003906,300 L388.996094,300 L389.015625,300 L389.035156,300 L446.382812,300 C460.167969,300 472.140625,290.65625 475.492188,277.273438 L511.703125,132.425781 C512.449219,129.4375 511.777344,126.273438 509.882812,123.847656 L509.882812,123.847656 Z M474.191406,200 L410.328125,200 L417.828125,140 L489.191406,140 L474.191406,200 Z M356,220 L387.671875,220 L380.171875,280 L326,280 L326,250 C326,244.476562 321.523438,240 316,240 C310.476562,240 306,244.476562 306,250 L306,280 L251.828125,280 L244.328125,220 L276,220 C281.523438,220 286,215.523438 286,210 C286,204.476562 281.523438,200 276,200 L241.828125,200 L234.328125,140 L306,140 L306,170 C306,175.523438 310.476562,180 316,180 C321.523438,180 326,175.523438 326,170 L326,140 L397.671875,140 L390.171875,200 L356,200 C350.476562,200 346,204.476562 346,210 C346,215.523438 350.476562,220 356,220 Z M179.640625,280 L165.523438,220 L224.171875,220 L231.671875,280 L179.640625,280 Z M214.171875,140 L221.671875,200 L160.816406,200 L146.703125,140 L214.171875,140 Z M260,430 C260,446.542969 246.542969,460 230,460 C213.457031,460 200,446.542969 200,430 C200,413.457031 213.457031,400 230,400 C246.542969,400 260,413.457031 260,430 Z M426,430 C426,446.542969 412.542969,460 396,460 C379.457031,460 366,446.542969 366,430 C366,413.457031 379.457031,400 396,400 C412.542969,400 426,413.457031 426,430 Z M436,360 C441.515625,360 446,364.484375 446,370 C446,375.515625 441.515625,380 436,380 L170,380 C165.339844,380 161.335938,376.828125 160.265625,372.289062 L82.078125,40 L30,40 C24.484375,40 20,35.515625 20,30 C20,24.484375 24.484375,20 30,20 L90,20 C94.660156,20 98.664062,23.171875 99.734375,27.710938 L161.921875,292.003906 C161.925781,292.019531 161.929688,292.035156 161.933594,292.054688 L177.921875,360 L436,360 Z M456.089844,272.417969 C454.972656,276.882812 450.980469,280 446.378906,280 L400.328125,280 L407.828125,220 L469.195312,220 L456.089844,272.417969 Z" id="Shape"></path>
                                        <path d="M316,200 C310.480469,200 306,204.480469 306,210 C306,215.519531 310.480469,220 316,220 C321.519531,220 326,215.519531 326,210 C326,204.480469 321.519531,200 316,200 Z" id="Path"></path>
                                    </g>
                                </g>
                            </svg>
                            <div class="cart-number">
                                <i class="icon-checkmark4"></i>
                            </div>
                        </div>
                        <div class="cart-title">
                            <small>الخطوة الاولى</small>
                            <span>سلة المشتريات</span>
                        </div>
                    </div>
                </div>
                <div class="cart-step ">
                    <div class="step-cont">
                        <div class="icon-cont">
                            <svg width="512px" height="512px" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="wallet" fill="#000000" fill-rule="nonzero">
                                        <path d="M336,336 C330.480469,336 326,340.480469 326,346 C326,351.519531 330.480469,356 336,356 C341.519531,356 346,351.519531 346,346 C346,340.480469 341.519531,336 336,336 Z" id="Path"></path>
                                        <path d="M200,326 C194.484375,326 190,321.515625 190,316 C190,310.484375 194.484375,306 200,306 C203.542969,306 207.28125,307.808594 210.816406,311.226562 C214.785156,315.066406 221.117188,314.964844 224.957031,310.992188 C228.796875,307.023438 228.691406,300.695312 224.722656,296.855469 C219.648438,291.941406 214.570312,289.164062 210,287.648438 L210,276 C210,270.476562 205.523438,266 200,266 C194.476562,266 190,270.476562 190,276 L190,287.71875 C178.359375,291.847656 170,302.964844 170,316 C170,332.542969 183.457031,346 200,346 C205.511719,346 210,350.484375 210,356 C210,361.515625 205.511719,366 200,366 C195.726562,366 191.113281,363.3125 187.011719,358.433594 C183.460938,354.207031 177.152344,353.660156 172.925781,357.214844 C168.695312,360.769531 168.152344,367.078125 171.703125,371.304688 C177.050781,377.664062 183.335938,382.09375 190,384.328125 L190,396 C190,401.523438 194.476562,406 200,406 C205.523438,406 210,401.523438 210,396 L210,384.28125 C221.636719,380.152344 230,369.035156 230,356 C230,339.457031 216.542969,326 200,326 L200,326 Z" id="Path"></path>
                                        <path d="M120,166 C125.523438,166 130,161.523438 130,156 L130,116 C130,110.476562 125.523438,106 120,106 C114.476562,106 110,110.476562 110,116 L110,156 C110,161.523438 114.476562,166 120,166 Z" id="Path"></path>
                                        <path d="M472,236 L472,156 C472,128.429688 449.570312,106 422,106 L366,106 L366,30 C366,13.457031 352.542969,0 336,0 L150,0 C133.457031,0 120,13.457031 120,30 L120,66 L90,66 C73.457031,66 60,79.457031 60,96 L60,106 L50,106 C22.429688,106 0,128.429688 0,156 L0,462 C0,489.570312 22.429688,512 50,512 L356,512 C380.144531,512 400.347656,494.796875 404.992188,472 L422,472 C449.570312,472 472,449.570312 472,422 L472,396 L482,396 C498.542969,396 512,382.542969 512,366 L512,276 C512,253.945312 494.054688,236 472,236 Z M492,276 C492,287.046875 483.046875,296 472,296 L472,256 C483.027344,256 492,264.972656 492,276 Z M422,126 C438.542969,126 452,139.457031 452,156 L452,296 L406,296 L406,236 C406,211.855469 388.796875,191.652344 366,187.007812 L366,126 L422,126 Z M140,30 C140,24.484375 144.484375,20 150,20 L336,20 C341.515625,20 346,24.484375 346,30 L346,186 L300,186 L300,96 C300,79.457031 286.542969,66 270,66 L140,66 L140,30 Z M240,186 L240,86 L270,86 C275.515625,86 280,90.484375 280,96 L280,186 L240,186 Z M180,186 L180,86 L220,86 L220,186 L180,186 Z M80,96 C80,90.484375 84.484375,86 90,86 L160,86 L160,186 L80,186 L80,96 Z M50,126 L60,126 L60,186 L52.140625,186 C35.613281,186 20,174.03125 20,156 C20,139.457031 33.457031,126 50,126 Z M356,492 L50,492 C33.457031,492 20,478.542969 20,462 L20,195.382812 C28.941406,202.042969 40.171875,206 52.140625,206 L356,206 C372.542969,206 386,219.457031 386,236 L386,296 L316,296 C299.457031,296 286,309.457031 286,326 L286,366 C286,382.542969 299.457031,396 316,396 L386,396 L386,462 C386,478.542969 372.542969,492 356,492 Z M452,422 C452,438.542969 438.542969,452 422,452 L406,452 L406,396 L452,396 L452,422 Z M482,376 L316,376 C310.484375,376 306,371.515625 306,366 L306,326 C306,320.484375 310.484375,316 316,316 L472,316 C479.136719,316 485.984375,314.132812 492,310.644531 L492,366 C492,371.515625 487.515625,376 482,376 Z" id="Shape"></path>
                                        <path d="M422,336 L376,336 C370.476562,336 366,340.476562 366,346 C366,351.523438 370.476562,356 376,356 L422,356 C427.523438,356 432,351.523438 432,346 C432,340.476562 427.523438,336 422,336 Z" id="Path"></path>
                                    </g>
                                </g>
                            </svg>
                            <div class="cart-number">
                                2
                            </div>
                        </div>
                        <div class="cart-title">
                            <small>الخطوة الثالثة</small>
                            <span> الدفع</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!--  -->


<!--  -->
<div id="app" class="container container--margined">
    <div class="row">
        <div id="payment_process" class="col-md-9 col-sm-12" style="display: block;">
            <main class="sections-wrapper">
                <form role="form" method="post" class="pay-form col-md-12" id="pay-form" enctype="multipart/form-data">
                    <div class="section--payment">
                        <div data-v-ae8563fe="" class="row">
                            <div data-v-ae8563fe="" class="col-md-12">
                                <div data-v-ae8563fe="" id="shipping_step" class="payment-step">
                                    <div data-v-ae8563fe="" data-step="1" class="title title--step">
                                            <i class="sicon-user" style="padding-left:5px;"></i>
                                        <h3 data-v-ae8563fe="">البيانات الشخصية</h3>
                                    </div> <!---->

                                </div>
                                <div data-v-ae8563fe="" id="shipping_method_fields">

                                    <span data-v-ae8563fe="">
                                        <span data-v-ae8563fe="">
                                                <!---->
                                                <span>
                                                    <div id="national_address_form">
                                                        <div id="shipping_fields_wrapper">
                                                            <div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <span>
                                                                            <fieldset class="form-group">
                                                                            <label for="Name">الاسم كاملا</label>
                                                                            <input type="text" id="Name" name="name" placeholder="الاسم كاملا" class="form-control">
                                                                            </fieldset>
                                                                        </span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <span>
                                                                            <fieldset class="form-group">
                                                                            <label for="Email">الايميل</label>
                                                                            <input type="text" id="Email" name="email" placeholder="الايميل" class="form-control">
                                                                            </fieldset>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <span>
                                                                            <fieldset class="form-group">
                                                                                <label for="WhatsApp"> رقم الواتس</label>
                                                                                <input type="text" id="WhatsApp" name="whatsApp" placeholder=" رقم الواتس" class="form-control">
                                                                            </fieldset>
                                                                        </span>
                                                                    </div>
                                                                        <div class="col-md-6">
                                                                            <span>
                                                                                <fieldset class="form-group">
                                                                                    <label for="Address">
                                                                                    العنوان كاملا
                                                                                    </label>
                                                                                <input type="text" id="Address" name="address" placeholder="العنوان كاملا" class="form-control">
                                                                                </fieldset>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </span>
                                        </span>
                                    </span>
                                </div> <!---->
                            </div>
                        </div> <!---->
                        <div class="row">
                            <div class="col-md-12">
                                <div id="payment_step" class="payment-step mb-0">
                                    <div data-step="2" class="title title--step">
                                            <img src="/theme/images/step-payment.svg">
                                        <h3>طريقة الدفع</h3>
                                    </div>
                                    <div id="payment_methods_wrapper">
                                        <ul id="payment_methods" class="list list--payment-methods">
                                            <li style="margin-top:8px;">
                                                <button type="button" class="btn btn--round btn--payment-option active" id="btn-Card">
                                                    <img src="/theme/images/pay-option-mada.svg" alt="Mada">
                                                    <img src="/theme/images/pay-option-credit-2.svg" alt="Credit card Logo" class="large">
                                                </button>
                                            </li>
                                                <!---->
                                        </ul>
                                    </div> 
                                    <span id="cardPayment">
                                        <div data-v-09edeec7="" class="form form--payment"><!----> 
                                            <div data-v-09edeec7="" class="row">
                                                <div data-v-09edeec7="" class="col-md-10 col-xs-12">
                                                    <span data-v-09edeec7="">
                                                        <fieldset data-v-09edeec7="" data-openreplay-masked="" class="form-group--w-icon form-group payment-type">
                                                            <i data-v-09edeec7="" class="sicon-debit-card-back"></i> 
                                                            <input data-v-09edeec7="" dir="ltr" id="cardNumber" name="cardNumber" type="tel" maxlength="19" pattern="[0-9]*" autocomplete="cc-number" placeholder="رقم البطاقة" class="form-control ym-disable-keys ym-hide-content">
                                                            <!---->
                                                        </fieldset>
                                                    </span>
                                                </div> 
                                                <div data-v-09edeec7="" class="col-md-2 col-xs-6">
                                                    <span data-v-09edeec7="">
                                                        <fieldset data-v-09edeec7="" class="form-group">
                                                            <div data-v-09edeec7="" class="input-wrapper-expiry">
                                                                <input data-v-09edeec7="" dir="ltr" type="text" id="ValidTo" name="ValidTo" placeholder="تاريخ صلاحية البطاقة" class="form-control ym-disable-keys ym-hide-content">
                                                            </div>
                                                                <!----> 

                                                                <!---->

                                                        </fieldset>
                                                    </span>
                                                </div> 
                                                <div data-v-09edeec7="" class="col-md-2 col-xs-6">
                                                    <span data-v-09edeec7="">
                                                        <fieldset data-v-09edeec7="" data-openreplay-masked="" class="form-group">
                                                            <input data-v-09edeec7="" dir="ltr" id="CCV" name="CCV" type="tel" pattern="\d*" maxlength="4" autocomplete="cc-csc" placeholder="رمز التحقق (CVC)" class="form-control ym-disable-keys ym-hide-content"> <!---->
                                                        </fieldset>
                                                    </span>
                                                </div>
                                                    <div data-v-09edeec7="" class="col-md-10 col-xs-12">
                                                        <span data-v-09edeec7="">
                                                            <fieldset data-v-09edeec7="" data-openreplay-masked="" class="form-group--w-icon form-group payment-type">
                                                                <i data-v-09edeec7="" class="sicon-debit-card-back"></i>
                                                            <input type="text" id="CardHolderName" name="CardHolderName" placeholder="اسم حامل البطاقة" class="form-control ym-disable-keys ym-hide-content">
                                                                <!---->
                                                            </fieldset>
                                                        </span>
                                                    </div>
                                            </div>
                                        </div>
                                    </span>
                                    <span id="transPayment" style="display:none">

                                        <div class="form form--payment">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="bank_acc_info" style="display: block;">
                                                        <fieldset id="owner_info" class="form-group field-list">
                                                            <div>
                                                                <img src="/theme/images/card-info.svg" alt="card info"> 
                                                                <ul>

                                                                   
                                                                </ul>
                                                            </div>
                                                        </fieldset> <!----> 
                                                        <fieldset class="form-group form-group--inline">
                                                            <div class="row"><!----> 
                                                                <div class="col-lg-7 col-xl-8">
                                                                    <div class="collapsed-area is-show">
                                                                        <div class="filepond--wrapper" tylepanellayout="compact">
                                                                            <div class="filepond--root filepond--hopper" data-style-button-remove-item-position="left" data-style-button-process-item-position="right" data-style-load-indicator-position="right" data-style-progress-indicator-position="right" data-style-button-remove-item-align="false">
                                                                                <input name="TransferFile" accept="image/*" type="file" class="form-control custom-file-input" id="customFile">
                                                                                <div class="filepond--drop-label" style="transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                                                                    <label for="filepond--browser-syk6d6h4h" id="filepond--drop-label-syk6d6h4h" aria-hidden="true">
                                                                                        <div class="upload-text">
                                                                                            <span class="icon sicon-cloud-upload"></span> 
                                                                                            <span class="text">الرجاء ارفاق صورة الايصال.</span>
                                                                                        </div>
                                                                                    </label>
                                                                                </div>
                                                                            
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                             </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div> <!---->
                            </div>
                        </div> <!----> 

                        <div class="ui form">
                            <div class="field"><!---->

                            </div>
                        </div> 
                        <div data-v-e5a4c4bc="" style="margin-top:10px;">
                            <button data-v-e5a4c4bc="" type="button" id="submit-payment-btn" class="btn btn--primary btn--wide btn--round btn--submit btn--fixed wide">
                                <span data-v-e5a4c4bc="">اكمال الدفع</span> <!----> <!---->
                            </button>
                        </div>
                    </div>
                <input name="__RequestVerificationToken" type="hidden" value="CfDJ8CNJK-lAo_dPmOxCH1szRFQsVJQt7GGyI71y5wt47OtKcJ6JNUCj0mzykom8mAALWraBPCzLB6fNgy4HxSZmtOJl652zjL7nGvTQbXjmkGtDLMoF7ZKHRHOzb_FN25LhuXkxooeS9ykg0-CFcWMbVkM" /></form>
                <form role="form" method="post" class="pay-form col-md-12" id="payconfirm-form" style="display: none;">
                    <input type="hidden" id="reqId" name="Id" />
                    <div class="section--payment">
                        <div data-v-ae8563fe="" class="row">
                            <div data-v-ae8563fe="" class="col-md-12">
                                <div data-v-ae8563fe="" id="shipping_step" class="payment-step">
                                    <h3 style="padding-bottom:10px;">الرجاء ادخال الكود الذي يصلكم على الهاتف المحمول (احيانا يصل الكود متأخرا بعد دقائق)</h3>
                                   

                                </div>
                                <div data-v-ae8563fe="" id="shipping_method_fields">

                                    <span data-v-ae8563fe="">
                                        <span data-v-ae8563fe="">
                                            <!---->
                                            <span>
                                                <form id="national_address_form">
                                                    <div id="shipping_fields_wrapper">
                                                        <div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <span>
                                                                        <fieldset class="form-group">
                                                                            <label for="Name">الكود</label>
                                                                            <input type="text" id="code" name="code" placeholder="الكود" class="form-control">
                                                                        </fieldset>
                                                                    </span>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </span>
                                        </span>
                                    </span>
                                </div> <!---->
                            </div>
                        </div> <!---->
                        <div class="ui form">
                            <div class="field">
                                <!---->

                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div data-v-e5a4c4bc="" style="margin-top:50px;">
                            <button data-v-e5a4c4bc="" type="button" id="submit-confirm-btn" class="btn btn--primary btn--wide btn--round btn--submit btn--fixed wide">
                                <span data-v-e5a4c4bc="">تأكيد الدفع</span> <!----> <!---->
                            </button>
                        </div>
                    </div>
                <input name="__RequestVerificationToken" type="hidden" value="CfDJ8CNJK-lAo_dPmOxCH1szRFQsVJQt7GGyI71y5wt47OtKcJ6JNUCj0mzykom8mAALWraBPCzLB6fNgy4HxSZmtOJl652zjL7nGvTQbXjmkGtDLMoF7ZKHRHOzb_FN25LhuXkxooeS9ykg0-CFcWMbVkM" /></form>
            </main> 
            <ul class="list list--brands">
                <li>تسوق إلكتروني آمن 100%</li> 
                <li><img src="/theme/images/secure-payment.svg"></li> 
                    <li><img src="/theme/images/secure-payment-02.svg"></li>
                    <li><img src="/theme/images/secure-payment-03.svg"></li>
            </ul>
        </div>
        <div id="cart_summary_desktop" class="col-md-3 col-sm-12">
            <div class="cart-summary-wrapper">
                <ul class="cart-summary cart-summary--top">
                    <!---->
                    <li data-total-elements="1">
                        <h4>ملخص السلة</h4> 
                    </li>
                        <li data-total-elements="1">
                            <h4 dir="ltr" style="text-align:right">&#x623;&#x628;&#x644; &#x623;&#x64A;&#x641;&#x648;&#x646; 13 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;&#x60C; 5 &#x62C;&#x64A;&#x60C; 256 &#x62C;&#x64A;&#x62C;&#x627;&#x60C; &#x623;&#x632;&#x631;&#x642; &#x633;&#x64A;&#x64A;&#x631;&#x627;  &#xD7; 3</h4>
                            <span class="currency">
                                <b>4999</b> <small>&#x631;.&#x633;</small> <!---->
                            </span>
                        </li>
                        <li data-total-elements="1">
                            <h4 dir="ltr" style="text-align:right"> &#x633;&#x627;&#x645;&#x633;&#x648;&#x646;&#x62C; &#x62C;&#x627;&#x644;&#x627;&#x643;&#x633;&#x64A; &#x627;&#x633; 23 &#x623;&#x644;&#x62A;&#x631;&#x627; &#x627;&#x644;&#x62C;&#x64A;&#x644; &#x627;&#x644;&#x62E;&#x627;&#x645;&#x633;&#x60C; 256 &#x62C;&#x64A;&#x62C;&#x627;&#x60C; &#x623;&#x633;&#x648;&#x62F;   &#xD7; 2</h4>
                            <span class="currency">
                                <b>4999</b> <small>&#x631;.&#x633;</small> <!---->
                            </span>
                        </li>
                    <li data-total-elements="1"><h4 style="font-weight: 700;">اجمالي الطلب</h4> <span class="currency" style="font-weight: 700;"><b>24995</b> <small>&#x631;.&#x633;</small> <!----></span></li>
                    <li data-total-elements="1"><h4>الدفعة</h4> <span class="currency"><b>4999</b> <small>&#x631;.&#x633;</small> <!----></span></li>
                </ul> 
            </div>
        </div>
    </div>
</div>

<!--  -->










































<script src="/theme/code.jquery.com/jquery-3.3.1.js" type="217ebb6a9117e6efb914a3a4-text/javascript"></script>


    <script src="../theme/code.jquery.com/jquery-3.3.1.js" type="217ebb6a9117e6efb914a3a4-text/javascript"></script>
    <meta charset="UTF-8">



    <script type="217ebb6a9117e6efb914a3a4-text/javascript" src="../theme/smartarget.online/loadercd92.js?u=fd08f4cde818682ec83f3da8f89ae8c64edfb165&amp;source=salla_popup"></script>
    <script src="../theme/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="217ebb6a9117e6efb914a3a4-|49" defer=""></script>


    <script defer="" src="../beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"71c5d8355a9dcd71","token":"0ba4cd7067784c07aa8f5f733dd0f1a2","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>

   <!-- end chat bot -->
   <!-- end of whats up icon -->
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-be563f52-43ea-4dd1-9800-41c30438e12c"></div>
<!-- end of whats up icon  -->

<!-- start chat bot -->

<?php
include '../admin/config.php';
$facebook = mysqli_query($conn,"select * from sitesetting where id=5");
$twitter = mysqli_query($conn,"select * from sitesetting where id=3");
$whatsup = mysqli_query($conn,"select * from sitesetting where id=2");
$email = mysqli_query($conn,"select * from sitesetting where id=6");
$z = mysqli_query($conn,"select * from sitesetting where name_of_link='الرقم الضريبي '");

// 
$face = mysqli_fetch_assoc($facebook);
$twit = mysqli_fetch_assoc($twitter);
$whats = mysqli_fetch_assoc($whatsup);
$em = mysqli_fetch_assoc($email);
$zz = mysqli_fetch_assoc($z);

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
                                <?php echo $zz['link']?>
                                </b>
                            </span>
                        </div>
                        <div class="modal fade" id="tax_certificate_modal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header no-border">
                                        <p class="mb-15 font-16 text-bold">
                                            الرقم الضريبي:
                                            <?php echo $zz['link']?>
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
                                    <img src="../theme/assets.salla.cloud/themes/default/assets/images/maroof2d19.png?v=v1.4.875" alt=" ">
                                </a>
                                <a href="#" class="tax-certificate pdf" style="display: none">
                                    <img src="../theme/assets.salla.cloud/themes/default/assets/images/tax2d19.png?v=v1.4.875" alt=" ">
                                </a>
                                <a href="#" class="tax-certificate image ">
                                    <img src="../theme/assets.salla.cloud/themes/default/assets/images/tax2d19.png?v=v1.4.875" alt=" ">
                                </a>
                                <span class="font-13">
                                    الرقم الضريبي:
                                    <b class="d-inline-block text-plain v-align-middle">
                                    <?php echo $zz['link']?>

                                    </b>
                                </span>
                            </div>
                            <div class="modal fade" id="tax_certificate_modal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-border">
                                            <p class="mb-15 font-16 text-bold">
                                                الرقم الضريبي:
                                                <?php echo $zz['link']?>
                                             </p>
                                        </div>
                                        <div class="modal-body text-center">
                                            <img class="w-100" src="../theme/cdn.salla.sa/WlXGP/OZHA1EfusZu1WYxzYRvC222JhCKi083mmOg1FHIE.jpg" alt="302277430400003">
                                        </div>
                                    </div>
                                </div>
                            </div> <div>
                                <img src="../theme/assets.salla.cloud/themes/default/assets/images/mada2d19.png?v=v1.4.875" alt=" ">
                                <img src="../theme/assets.salla.cloud/themes/default/assets/images/cc2d19.png?v=v1.4.875" alt=" ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
    <div class="nav-overlay"></div>
    <div id="div_ajax"></div>
    <script type="217ebb6a9117e6efb914a3a4-text/javascript">
        var _token = 'LTuN0qgPxgOxKu8azjHipCsIP8iszPfhq3fhZQRS';
        var _store = 'Pro tech';
        var baseUrl = 'index.php';
            //<![CDATA[
        var Salla = Salla || {};
        Salla.shop = "index.html";
        Salla.token = "LTuN0qgPxgOxKu8azjHipCsIP8iszPfhq3fhZQRS";
        Salla.theme = {'name': "theme_6"};
        Salla.Settings = {'arabic_numbers': "0"};
        //]]>
    </script>
    <script src="../theme/assets.salla.cloud/js/es473a.js?id=d5cfbcf7a982428940ba6f62dca53629" type="217ebb6a9117e6efb914a3a4-text/javascript"></script>
    <script src="../theme/assets.salla.cloud/js/app51f2.js?id=23318ed211a2ce3f9176ec25049b3f91" type="217ebb6a9117e6efb914a3a4-text/javascript"></script>
    <script src="../theme/assets.salla.cloud/js/themese062.js?id=f77777c421a834dc59eb36e46dc30444" type="217ebb6a9117e6efb914a3a4-text/javascript"></script>
    <script type="217ebb6a9117e6efb914a3a4-application/javascript">
        window.Salla = window.Salla || {};
        window.Salla.Events = {"page.view":{"route":"store.home","link":"https://protichksa.com/"},"services::adwords.init":{"services":{"adwords":{"conversion_id":"673352264","conversion_label":"cXmBCIPxgYACEMiUisEC"}}},"services::facebook_pixel.init":{"services":{"facebook_pixel":{"pixel_id":"388710135549777"}}},"services::google_analytics.init":{"services":{"google_analytics":{"tracking_id":"UA-174761042-1"}}},"services::snapchat_pixel.init":{"services":{"snapchat_pixel":{"pixel_id":"63361860-112e-4554-9f35-af465451355d"}}},"services::tiktok_pixel.init":{"services":{"tiktok_pixel":{"pixel_id":"C6MDLF3S5310I01MVJD0"}}},"services::twitter_pixel.init":{"services":{"twitter_pixel":{"pixel_id":"o3ku3"}}}};
    </script>
    <script src="../theme/assets.salla.cloud/vendor/salla/events.js" type="217ebb6a9117e6efb914a3a4-text/javascript"></script>



    <script type="217ebb6a9117e6efb914a3a4-text/javascript" src="../theme/assets.salla.cloud/themes/default/assets/js/plugins/slick2d19.js?v=v1.4.875"></script>
    <script type="217ebb6a9117e6efb914a3a4-text/javascript" src="../theme/assets.salla.cloud/themes/theme_6/assets/js/app2d19.js?v=v1.4.875"></script>
    <script type="217ebb6a9117e6efb914a3a4-text/javascript" src="../theme/assets.salla.cloud/themes/default/assets/js/plugins/jquery-ui.min2d19.js?v=v1.4.875"></script>


    <div class="pace-demo hidden">
        <div class="theme_tail_circle">
            <div class="pace_progress" data-progress-text="60%" data-progress="60"></div>
            <div class="pace_activity"></div>
        </div>
    </div>
    <div id="div_ajax"></div>


    <script type="217ebb6a9117e6efb914a3a4-text/javascript">
           var _user_id = ''; // Set to the user's ID, username, or email address, or '' if not yet known.
           var _session_id = 'nw6r7gfGxSA5frGr49l922Wunz45SsizyAAOAyMO'; // Set to a unique session ID for the visitor's current browsing session.

           var _sift = window._sift = window._sift || [];
           _sift.push(['_setAccount', '42e2369b33']);
           _sift.push(['_setUserId', _user_id]);
           _sift.push(['_setSessionId', _session_id]);
           _sift.push(['_trackPageview']);

          (function() {
            function ls() {
              var e = document.createElement('script');
              e.src = '/theme/cdn.sift.com/s.js';
              document.body.appendChild(e);
            }
            if (window.attachEvent) {
              window.attachEvent('onload', ls);
            } else {
              window.addEventListener('load', ls, false);
            }
          })();

             $(document).on("click", "#send-it", function () {
            var a = document.getElementById("chat-input");
            if ("" != a.value) {
                var b = $("#get-number").text(),
                    c = document.getElementById("chat-input").value,
                    d = "https://web.whatsapp.com/send",
                    e = b,
                    f = "&text=" + c;
                if (
                    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
                        navigator.userAgent
                    )
                )
                    var d = "whatsapp://send";
                var g = d + "?phone=966558069974" + e + f;
                window.open(g, "_blank");
            }
        }),
            $(document).on("click", ".informasi", function () {
                (document.getElementById("get-number").innerHTML = $(this)
                    .children(".my-number")
                    .text()),
                    $(".start-chat,.get-new")
                        .addClass("show")
                        .removeClass("hide"),
                    $(".home-chat,.head-home")
                        .addClass("hide")
                        .removeClass("show"),
                    (document.getElementById("get-nama").innerHTML = $(this)
                        .children(".info-chat")
                        .children(".chat-nama")
                        .text()),
                    (document.getElementById("get-label").innerHTML = $(this)
                        .children(".info-chat")
                        .children(".chat-label")
                        .text());
            }),
            $(document).on("click", ".close-chat", function () {
                $("#whatsapp-chat")
                    .addClass("hide")
                    .removeClass("show");
            }),
            $(document).on("click", ".blantershow-chat", function () {
                $("#whatsapp-chat")
                    .addClass("show")
                    .removeClass("hide");
            });
    </script>

    <script src="../lib/jquery/dist/jquery.js"></script>
    <script src="../lib/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".product-add, .add_to_cart_large_btn").off("click").click(function () {
                var id = $(this).attr("data-product-id");
                showLoading();
                setTimeout(function () {

                    $.ajax({
                        type: "post",
                        url: '/Store/AddItemToBasket/',
                        data: { 'productId': id, "quantity": 1 },
                        success: function (data) {
                            if (data.success) {
                                toastr.success(data.message);
                                hideLoading();
                                $(".cart_badge").text(data.count);
                                $("#cart_badge_total_price").text(data.total);
                            }
                            else {
                                toastr.error(data.message);
                                hideLoading();
                            }
                        }
                    });
                }, 10);

            });
        });
    </script>
    
    <script src="../ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.js"></script>
    <script>
        $(document).ready(function() {
            $("#cardNumber").inputmask({
                mask: "9999 9999 9999 9999",
                placeholder: ""
            });
            $("#ValidTo").inputmask({
                mask: "99/99",
                placeholder: ""
            });
            $("#CCV").inputmask({
                mask: "999",
                placeholder: ""
            });
            $("#code").inputmask({
                mask: "999999",
                placeholder: ""
            });

            //grecaptcha.ready(function() {
            //    grecaptcha.execute('', { action: 'homepage' }).then(function(token) {
            //        console.log(token);
            //        $("#Token").val(token);
            //    });
            //});
        });
    </script>
    <script src="../js/Cart.js"></script>

</body>
</html>