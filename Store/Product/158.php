<?php


include '../../admin/config.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
$sql="select * from products where prod_id=$id " ;
$res = mysqli_query($conn,$sql);
?>


<?php
$rs = mysqli_query($conn,"select * from products where prod_id=$id");
$ress = mysqli_fetch_assoc($rs);
$recall = mysqli_query($conn,"select * from tmp_cart");
$recal = mysqli_fetch_assoc($recall);

?>

<?php
session_start();
$items = [
    'id' =>$ress['prod_id'],
    'name' => $ress['name'],
    'price' => $ress['price_after'],
    'quantity'=>1

];

$_SESSION['cart'][] = $items;


// Insert the item into the temporary cart table
if (isset($_POST['sub'])) {
// Prepare the SQL query
$item_id = $items['id'];
$item_quantity = $items['quantity'];
$user_session_id = session_id();

$sql = "SELECT * FROM tmp_cart WHERE user_lim = ? AND item_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $user_session_id, $item_id);
$stmt->execute();
$conn2 = mysqli_connect("127.0.0.1","root","", "phone_e");
if (!$conn2) {
    die("Connection failed: " . mysqli_connect_error());
}

$conn3 = mysqli_connect("127.0.0.1","root","", "phone_e");
if (!$conn3) {
    die("Connection failed: " . mysqli_connect_error());
}
// Check if a row with the same user_lim and item_id exists
if ($stmt->fetch()) {
  // If a row exists, update the quantity column
  $sql2 = "UPDATE tmp_cart SET quantity = quantity + ? WHERE user_lim = ? AND item_id = ?";
  $stmt2 = $conn2->prepare($sql2);
  $stmt2->bind_param('isi', $item_quantity, $user_session_id, $item_id);
  $stmt2->execute();
  header('Location:../cart.php');
} else {
  // If a row does not exist, insert a new row
  $sql3 = "INSERT INTO tmp_cart (user_lim, item_id, quantity, created_at) VALUES (?, ?, ?, NOW())";
  $stmt3 = $conn3->prepare($sql3);
  $stmt3->bind_param('sii', $user_session_id, $item_id, $item_quantity);
  $stmt3->execute();
}
}
?>


















<!DOCTYPE html>

<html lang="ar" dir="rtl">

<head>
    <style>

        @import url('../../theme/assets.salla.cloud/fonts/default2d19.css');</style>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="theme-color" content="#727272">
    <meta name="msapplication-navbutton-color" content="#727272">
    <meta name="apple-mobile-web-app-status-bar-style" content="#727272">

    <link rel="icon" type="image/png" href="../../Images/Original/11a4d886-5bd0-469a-bda2-f95d9cbec64a.jpg">
    <link rel="apple-touch-icon-precomposed" href="../../Images/Original/11a4d886-5bd0-469a-bda2-f95d9cbec64a.jpg">
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
    <link rel="stylesheet" href="../../theme/assets.salla.cloud/css/app9d6c.css?id=afd29fb09b6554d13af9846ce72da9ea">

    <link rel="stylesheet" href="../../theme/assets.salla.cloud/css/themes4b5f.css?id=3ee4c615e0fdf12513b2507d3b268ed2">
    <link rel="stylesheet" href="../../theme/assets.salla.cloud/css/pluginsd278.css?id=51437878867e69288ff737f568585dde">

    <link rel="stylesheet" href="../../theme/assets.salla.cloud/themes/default/assets/css/slick-theme2d19.css?v=v1.4.875">
    <link rel="stylesheet" href="../../theme/assets.salla.sa/cp/assets/css/icons/sallaicons/style.css">
    <link rel="stylesheet" href="../../theme/assets.salla.cloud/themes/theme_6/assets/css/main2d19.css?v=v1.4.875">
    <link rel="stylesheet" href="../../ajax/libs/toastr.js/latest/css/toastr.min.css">

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
            background-image: url(../../Images/Original/11a4d886-5bd0-469a-bda2-f95d9cbec64a.jpg);
            background-size: contain !important;
            background-repeat: no-repeat !important;
            background-position: top center !important;
        }

        .sub-nav-header::before {
            content: "";
            text-align: center !important;
            display: block;
            height: 50px !important;
            background-image: url(../../Images/Original/11a4d886-5bd0-469a-bda2-f95d9cbec64a.jpg);
            background-size: contain !important;
            background-repeat: no-repeat !important;
            background-position: top center !important;
        }
    </style>
    <link href="../../theme/assets.salla.cloud/css/intlTelInput0309.css?id=53d3f9e5ce3c027b0bddc8be6f8c1283" rel="stylesheet">
    <link rel="stylesheet" href="../../theme/assets.salla.cloud/themes/theme_6/assets/css/theme-custom2d19.css?v=v1.4.875">
    <link rel="stylesheet" href="../../css/mainStyleSheet.css">
    <script src="../../theme/cdn.polyfill.io/v3/polyfill.mina9ef.js?flags=gated&amp;features=Promise%2CObject.assign%2CObject.values%2CArray.prototype.find%2CArray.prototype.findIndex%2CArray.prototype.includes%2CString.prototype.includes%2CString.prototype.startsWith%2CString.prototype.endsWith%2Cdocument.getElementsByClassName%2CPromise.prototype.finally%2CString.prototype.includes%2CNumber.isNaN%2Ces6%2CEvent%2CCustomEvent" type="217ebb6a9117e6efb914a3a4-text/javascript"></script>
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
                        <a href="../../index.php">
                            <img src="../../Images/Original/11a4d886-5bd0-469a-bda2-f95d9cbec64a.jpg" alt="&#x628;&#x631;&#x648; &#x62A;&#x64A;&#x643; : Pro tech">
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





                        <form action="#" method="post">
</form>

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
                    <a data-cart-small="" href="../Cart.php" class="ml-1 circle-action d-lg-none site-header__mine-cart" rel="nofollow">
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
                        <a href="../category/12.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;</a>
                    </li>
                    <li id="13">
                        <a href="../category/13.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 </a>
                    </li>
                    <li id="14">
                        <a href="../category/14.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 &#x645;&#x64A;&#x646;&#x64A; </a>
                    </li>
                    <li id="15">
                        <a href="../category/15.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 12 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;</a>
                    </li>
                    <li id="16">
                        <a href="../category/16.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 12 </a>
                    </li>
                    <li id="17">
                        <a href="../category/17.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 12 &#x645;&#x64A;&#x646;&#x64A;</a>
                    </li>
                    <li id="24">
                        <a href="../category/24.php">&#x63A;&#x637;&#x627;&#x621; &#x623;&#x628;&#x644;</a>
                    </li>
                    <li id="40">
                        <a href="../category/40.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 &#x628;&#x631;&#x648;</a>
                    </li>
                    <li id="50">
                        <a href="../category/50.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;</a>
                    </li>
                    <li id="51">
                        <a href="../category/51.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x631;&#x648;</a>
                    </li>
                    <li id="52">
                        <a href="../category/52.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x644;&#x633;</a>
                    </li>
                    <li id="53">
                        <a href="../category/53.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14</a>
                    </li>
                    <li id="57">
                        <a href="../category/57.php">&#x62C;&#x644;&#x627;&#x643;&#x633;&#x64A; &#x627;&#x633; 23 &#x627;&#x644;&#x62A;&#x631;&#x627;</a>
                    </li>
            </ul>
        </li>
        <li id="2" class="has-children">
            <a href="javascript:;">&#x633;&#x627;&#x639;&#x627;&#x62A; &#x630;&#x643;&#x64A;&#x629;</a>
            <ul>
                    <li id="8">
                        <a href="../category/8.php">&#x633;&#x627;&#x639;&#x627;&#x62A; &#x627;&#x628;&#x644;</a>
                    </li>
            </ul>
        </li>
        <li id="3" class="has-children">
            <a href="javascript:;">&#x623;&#x62C;&#x647;&#x632;&#x629; &#x635;&#x648;&#x62A; &#x648; &#x633;&#x645;&#x627;&#x639;&#x627;&#x62A;</a>
            <ul>
                    <li id="6">
                        <a href="../category/6.php">&#x633;&#x645;&#x627;&#x639;&#x627;&#x62A; &#x623;&#x628;&#x644;</a>
                            </li>
                    <li id="7">
                        <a href="../category/7.php">&#x633;&#x645;&#x627;&#x639;&#x627;&#x62A; &#x633;&#x628;&#x64A;&#x643;&#x631;</a>
                    </li>
                    <li id="36">
                        <a href="../category/36.php">&#x633;&#x645;&#x627;&#x639;&#x627;&#x62A; &#x645;&#x62A;&#x646;&#x648;&#x639;&#x647;</a>
                    </li>
            </ul>
        </li>
        <li id="4" class="has-children">
            <a href="javascript:;">&#x623;&#x62C;&#x647;&#x632;&#x629; &#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646;</a>
            <ul>
                    <li id="1">
                        <a href="../category/1.php">&#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646; 5</a>
                    </li>
                    <li id="2">
                        <a href="../category/2.php">&#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646;  4</a>
                    </li>
                    <li id="3">
                        <a href="../category/3.php">&#x627;&#x643;&#x633; &#x628;&#x648;&#x643;&#x633; &#x648;&#x646;</a>
                    </li>
                    <li id="4">
                        <a href="../category/4.php">&#x64A;&#x62F; &#x62A;&#x62D;&#x643;&#x645;</a>
                    </li>
                    <li id="5">
                        <a href="../category/5.php">&#x645;&#x644;&#x62D;&#x642;&#x627;&#x62A; &#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646;</a>
                    </li>
            </ul>
        </li>
        <li id="5" class="has-children">
            <a href="javascript:;">&#x644;&#x627;&#x628;&#x62A;&#x648;&#x628;&#x627;&#x62A; &#x648;&#x634;&#x627;&#x634;&#x627;&#x62A;</a>
            <ul>
                    <li id="18">
                        <a href="../category/18.php">&#x644;&#x627;&#x628; &#x62A;&#x648;&#x628;&#x627;&#x62A; &#x627;&#x628;&#x644;</a>
                    </li>
            </ul>
        </li>
        <li id="7" class="has-children">
            <a href="javascript:;">&#x627;&#x64A;&#x628;&#x627;&#x62F;</a>
            <ul>
                    <li id="27">
                        <a href="../category/27.php">&#x671;&#x628;&#x644;</a>
                    </li>
            </ul>
        </li>
        <li id="8" class="has-children">
            <a href="javascript:;">&#x628;&#x637;&#x627;&#x631;&#x64A;&#x627;&#x62A; &#x645;&#x62A;&#x646;&#x642;&#x644;&#x629; &#x648;&#x643;&#x64A;&#x627;&#x628;&#x644;</a>
            <ul>
                    <li id="28">
                        <a href="../category/28.php">&#x628;&#x637;&#x627;&#x631;&#x64A;&#x627;&#x62A; &#x645;&#x62A;&#x646;&#x642;&#x644;&#x629;</a>
                    </li>
            </ul>
        </li>
        <li id="9" class="has-children">
            <a href="javascript:;">&#x623;&#x644;&#x639;&#x627;&#x628; &#x627;&#x644;&#x641;&#x64A;&#x62F;&#x64A;&#x648;</a>
            <ul>
                    <li id="29">
                        <a href="../category/29.php">&#x645;&#x627;&#x648;&#x633;&#x627;&#x62A; &#x648;&#x643;&#x64A;&#x628;&#x648;&#x631;&#x62F;&#x627;&#x62A; &#x623;&#x644;&#x639;&#x627;&#x628;</a>
                    </li>
                    <li id="30">
                        <a href="../category/30.php">&#x645;&#x627;&#x64A;&#x643;&#x631;&#x648;&#x641;&#x648;&#x646;&#x627;&#x62A;</a>
                    </li>
                    <li id="31">
                        <a href="../category/31.php">&#x645;&#x62C;&#x633;&#x645;&#x627;&#x62A; &#x648;&#x641;&#x64A;&#x642;&#x631;&#x632;</a>
                            </li>
                    <li id="32">
                        <a href="../category/32.php">&#x625;&#x636;&#x627;&#x621;&#x627;&#x62A; RGB</a>
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
                                <a href="../category/12.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;</a>
                            </li>
                            <li id="13">
                                <a href="../category/13.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 </a>
                            </li>
                            <li id="14">
                                <a href="../category/14.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 &#x645;&#x64A;&#x646;&#x64A; </a>
                            </li>
                            <li id="15">
                                <a href="../category/15.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 12 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;</a>
                            </li>
                            <li id="16">
                                <a href="../category/16.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 12 </a>
                            </li>
                            <li id="17">
                                <a href="../category/17.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 12 &#x645;&#x64A;&#x646;&#x64A;</a>
                            </li>
                            <li id="24">
                                <a href="../category/24.php">&#x63A;&#x637;&#x627;&#x621; &#x623;&#x628;&#x644;</a>
                            </li>
                            <li id="40">
                                <a href="../category/40.php">&#x627;&#x64A;&#x641;&#x648;&#x646; 13 &#x628;&#x631;&#x648;</a>
                            </li>
                            <li id="50">
                                <a href="../category/50.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x631;&#x648; &#x645;&#x627;&#x643;&#x633;</a>
                            </li>
                            <li id="51">
                                <a href="../category/51.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x631;&#x648;</a>
                            </li>
                            <li id="52">
                                <a href="../category/52.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14 &#x628;&#x644;&#x633;</a>
                            </li>
                            <li id="53">
                                <a href="../category/53.php">&#x623;&#x64A;&#x641;&#x648;&#x646; 14</a>
                            </li>
                            <li id="57">
                                <a href="../category/57.php">&#x62C;&#x644;&#x627;&#x643;&#x633;&#x64A; &#x627;&#x633; 23 &#x627;&#x644;&#x62A;&#x631;&#x627;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x633;&#x627;&#x639;&#x627;&#x62A; &#x630;&#x643;&#x64A;&#x629;</a>
                    <ul style="position:inherit">
                            <li id="8">
                                <a href="../category/8.php">&#x633;&#x627;&#x639;&#x627;&#x62A; &#x627;&#x628;&#x644;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x623;&#x62C;&#x647;&#x632;&#x629; &#x635;&#x648;&#x62A; &#x648; &#x633;&#x645;&#x627;&#x639;&#x627;&#x62A;</a>
                    <ul style="position:inherit">
                            <li id="6">
                                <a href="../category/6.php">&#x633;&#x645;&#x627;&#x639;&#x627;&#x62A; &#x623;&#x628;&#x644;</a>
                            </li>
                            <li id="7">
                                <a href="../category/7.php">&#x633;&#x645;&#x627;&#x639;&#x627;&#x62A; &#x633;&#x628;&#x64A;&#x643;&#x631;</a>
                            </li>
                            <li id="36">
                                <a href="../category/36.php">&#x633;&#x645;&#x627;&#x639;&#x627;&#x62A; &#x645;&#x62A;&#x646;&#x648;&#x639;&#x647;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x623;&#x62C;&#x647;&#x632;&#x629; &#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646;</a>
                    <ul style="position:inherit">
                            <li id="1">
                                <a href="../category/1.php">&#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646; 5</a>
                            </li>
                            <li id="2">
                                <a href="../category/2.php">&#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646;  4</a>
                            </li>
                            <li id="3">
                                <a href="../category/3.php">&#x627;&#x643;&#x633; &#x628;&#x648;&#x643;&#x633; &#x648;&#x646;</a>
                            </li>
                            <li id="4">
                                <a href="../category/4.php">&#x64A;&#x62F; &#x62A;&#x62D;&#x643;&#x645;</a>
                            </li>
                            <li id="5">
                                <a href="../category/5.php">&#x645;&#x644;&#x62D;&#x642;&#x627;&#x62A; &#x628;&#x644;&#x627;&#x64A; &#x633;&#x62A;&#x64A;&#x634;&#x646;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x644;&#x627;&#x628;&#x62A;&#x648;&#x628;&#x627;&#x62A; &#x648;&#x634;&#x627;&#x634;&#x627;&#x62A;</a>
                    <ul style="position:inherit">
                            <li id="18">
                                <a href="../category/18.php">&#x644;&#x627;&#x628; &#x62A;&#x648;&#x628;&#x627;&#x62A; &#x627;&#x628;&#x644;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x627;&#x64A;&#x628;&#x627;&#x62F;</a>
                    <ul style="position:inherit">
                            <li id="27">
                                <a href="../category/27.php">&#x671;&#x628;&#x644;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x628;&#x637;&#x627;&#x631;&#x64A;&#x627;&#x62A; &#x645;&#x62A;&#x646;&#x642;&#x644;&#x629; &#x648;&#x643;&#x64A;&#x627;&#x628;&#x644;</a>
                    <ul style="position:inherit">
                            <li id="28">
                                <a href="../category/28.php">&#x628;&#x637;&#x627;&#x631;&#x64A;&#x627;&#x62A; &#x645;&#x62A;&#x646;&#x642;&#x644;&#x629;</a>
                            </li>
                    </ul>
                </li>
                <li id="154783" class="has-children sub-main-menu">
                    <a href="#">&#x623;&#x644;&#x639;&#x627;&#x628; &#x627;&#x644;&#x641;&#x64A;&#x62F;&#x64A;&#x648;</a>
                    <ul style="position:inherit">
                            <li id="29">
                                <a href="../category/29.php">&#x645;&#x627;&#x648;&#x633;&#x627;&#x62A; &#x648;&#x643;&#x64A;&#x628;&#x648;&#x631;&#x62F;&#x627;&#x62A; &#x623;&#x644;&#x639;&#x627;&#x628;</a>
                            </li>
                            <li id="30">
                                <a href="../category/30.php">&#x645;&#x627;&#x64A;&#x643;&#x631;&#x648;&#x641;&#x648;&#x646;&#x627;&#x62A;</a>
                            </li>
                            <li id="31">
                                <a href="../category/31.php">&#x645;&#x62C;&#x633;&#x645;&#x627;&#x62A; &#x648;&#x641;&#x64A;&#x642;&#x631;&#x632;</a>
                            </li>
                            <li id="32">
                                <a href="../category/32.php">&#x625;&#x636;&#x627;&#x621;&#x627;&#x62A; RGB</a>
                            </li>
                    </ul>
                </li>

        </ul>
    </li>


</ul>
        </div>
    </div>

    
<div class="breadcrumb-container mobile-webview-hide">
    <div class="container container--default">
        <ol class="breadcrumb">
            <li class="breadcrumb-item home"><a href="../../index.php">الرئيسية</a></li>
        </ol>
    </div>
</div>

<section style="background: #FAFAFA;" class="py-3">
    <div class="container product-details" id="product-103" data-productid="103">
        <div class="row">
            <div class="col-md-6">
                <div id="sp-slider-cont">
                    <div class="thumb product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">

                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 4440px;">
                                <div class="owl-item active" style="width: 555px;">
                                    <div class="video-entry">
                                    <?php foreach($res as $r):?>
                                        <a href="../../admin/upload/<?php echo $r['img']?>" data-fancybox="product-images">
                                            <img src="../../admin/upload/<?php echo $r['img']?>" alt="" id="carousel_product_image_103" class="image_first_click product-details__thumb" data-index="0">
                                        </a>
                                    </div>
                                    <?php endforeach?>

                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                


                <!-- site settings -->

                 <?php
                 $c=mysqli_connect("127.0.0.1","root","", "phone_e");
                 $c1=mysqli_connect("127.0.0.1","root","", "phone_e");
                 $c2=mysqli_connect("127.0.0.1","root","", "phone_e");
                 $c3=mysqli_connect("127.0.0.1","root","", "phone_e");
                 $c4=mysqli_connect("127.0.0.1","root","", "phone_e");

                 $wtsup = mysqli_query($c1,"select * from sitesetting where name_of_link='حسابنا على واتساب'");
                 $wt = mysqli_fetch_assoc($wtsup);
                 ?>
                 <?php
                 $twitter = mysqli_query($c,"select * from sitesetting where name_of_link='حسابنا على تويتر'");
                 $tw = mysqli_fetch_assoc($twitter);
                 ?>
                  <?php
                 $instagram = mysqli_query($c2,"select * from sitesetting where name_of_link='حسابنا ع انستا	'");
                 $insta = mysqli_fetch_assoc($instagram);
                 ?>
                  <?php
                 $facebook = mysqli_query($c3,"select * from sitesetting where name_of_link='حسابنا ع فيسبوك'");
                 $face = mysqli_fetch_assoc($facebook);
                 ?>
                <?php
                 $em = mysqli_query($c4,"select * from sitesetting where name_of_link='إيميل الموقع'");
                 $email = mysqli_fetch_assoc($em);
                 ?>
                <!-- end -->
                <div class="a2a_kit a2a_kit_size_32 a2a_default_style product-details__social-share" data-a2a-icon-color="transparent" style="line-height: 32px;">

                    <a  target="_blank" href="<?php echo $wt['link'] ?>" rel="nofollow noopener"><span class="a2a_svg a2a_s__default a2a_s_whatsapp" style="background-color: transparent;"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 32 32"><path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M16.21 4.41C9.973 4.41 4.917 9.465 4.917 15.7c0 2.134.592 4.13 1.62 5.832L4.5 27.59l6.25-2.002a11.241 11.241 0 005.46 1.404c6.234 0 11.29-5.055 11.29-11.29 0-6.237-5.056-11.292-11.29-11.292zm0 20.69c-1.91 0-3.69-.57-5.173-1.553l-3.61 1.156 1.173-3.49a9.345 9.345 0 01-1.79-5.512c0-5.18 4.217-9.4 9.4-9.4 5.183 0 9.397 4.22 9.397 9.4 0 5.188-4.214 9.4-9.398 9.4zm5.293-6.832c-.284-.155-1.673-.906-1.934-1.012-.265-.106-.455-.16-.658.12s-.78.91-.954 1.096c-.176.186-.345.203-.628.048-.282-.154-1.2-.494-2.264-1.517-.83-.795-1.373-1.76-1.53-2.055-.158-.295 0-.445.15-.584.134-.124.3-.326.45-.488.15-.163.203-.28.306-.47.104-.19.06-.36-.005-.506-.066-.147-.59-1.587-.81-2.173-.218-.586-.46-.498-.63-.505-.168-.007-.358-.038-.55-.045-.19-.007-.51.054-.78.332-.277.274-1.05.943-1.1 2.362-.055 1.418.926 2.826 1.064 3.023.137.2 1.874 3.272 4.76 4.537 2.888 1.264 2.9.878 3.43.85.53-.027 1.734-.633 2-1.297.266-.664.287-1.24.22-1.363-.07-.123-.26-.203-.54-.357z"></path></svg></span><span class="a2a_label">WhatsApp</span></a>
                    <a  target="_blank" href="<?php echo $tw['link'] ?>" rel="nofollow noopener"><span class="a2a_svg a2a_s__default a2a_s_twitter" style="background-color: transparent;"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 32 32"><path fill="#FFF" d="M28 8.557a9.913 9.913 0 01-2.828.775 4.93 4.93 0 002.166-2.725 9.738 9.738 0 01-3.13 1.194 4.92 4.92 0 00-3.593-1.55 4.924 4.924 0 00-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.942 4.942 0 00-.665 2.477c0 1.71.87 3.214 2.19 4.1a4.968 4.968 0 01-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174-.318 0-.626-.03-.928-.086a4.935 4.935 0 004.6 3.42 9.893 9.893 0 01-6.114 2.107c-.398 0-.79-.023-1.175-.068a13.953 13.953 0 007.55 2.213c9.056 0 14.01-7.507 14.01-14.013 0-.213-.005-.426-.015-.637.96-.695 1.795-1.56 2.455-2.55z"></path></svg></span><span class="a2a_label">Twitter</span></a>
                    <a  target="_blank" href="<?php echo $face['link'] ?>" rel="nofollow noopener"><span class="a2a_svg a2a_s__default a2a_s_facebook" style="background-color: transparent;"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 32 32"><path fill="#FFF" d="M17.78 27.5V17.008h3.522l.527-4.09h-4.05v-2.61c0-1.182.33-1.99 2.023-1.99h2.166V4.66c-.375-.05-1.66-.16-3.155-.16-3.123 0-5.26 1.905-5.26 5.405v3.016h-3.53v4.09h3.53V27.5h4.223z"></path></svg></span><span class="a2a_label">Facebook</span></a>
                    <a class="a2a_button_copy_link" target="_blank"  rel="nofollow noopener"><span class="a2a_svg a2a_s__default a2a_s_link" style="background-color: transparent;"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 32 32"><path fill="#FFF" d="M24.412 21.177c0-.36-.126-.665-.377-.917l-2.804-2.804a1.235 1.235 0 00-.913-.378c-.377 0-.7.144-.97.43.026.028.11.11.255.25.144.14.24.236.29.29s.117.14.2.256c.087.117.146.232.177.344.03.112.046.236.046.37 0 .36-.126.666-.377.918a1.25 1.25 0 01-.918.377 1.4 1.4 0 01-.373-.047 1.062 1.062 0 01-.345-.175 2.268 2.268 0 01-.256-.2 6.815 6.815 0 01-.29-.29c-.14-.142-.223-.23-.25-.254-.297.28-.445.607-.445.984 0 .36.126.664.377.916l2.778 2.79c.243.243.548.364.917.364.36 0 .665-.118.917-.35l1.982-1.97c.252-.25.378-.55.378-.9zm-9.477-9.504c0-.36-.126-.665-.377-.917l-2.777-2.79a1.235 1.235 0 00-.913-.378c-.35 0-.656.12-.917.364L7.967 9.92c-.254.252-.38.553-.38.903 0 .36.126.665.38.917l2.802 2.804c.242.243.547.364.916.364.377 0 .7-.14.97-.418-.026-.027-.11-.11-.255-.25s-.24-.235-.29-.29a2.675 2.675 0 01-.2-.255 1.052 1.052 0 01-.176-.344 1.396 1.396 0 01-.047-.37c0-.36.126-.662.377-.914.252-.252.557-.377.917-.377.136 0 .26.015.37.046.114.03.23.09.346.175.117.085.202.153.256.2.054.05.15.148.29.29.14.146.222.23.25.258.294-.278.442-.606.442-.983zM27 21.177c0 1.078-.382 1.99-1.146 2.736l-1.982 1.968c-.745.75-1.658 1.12-2.736 1.12-1.087 0-2.004-.38-2.75-1.143l-2.777-2.79c-.75-.747-1.12-1.66-1.12-2.737 0-1.106.392-2.046 1.183-2.818l-1.186-1.185c-.774.79-1.708 1.186-2.805 1.186-1.078 0-1.995-.376-2.75-1.13l-2.803-2.81C5.377 12.82 5 11.903 5 10.826c0-1.08.382-1.993 1.146-2.738L8.128 6.12C8.873 5.372 9.785 5 10.864 5c1.087 0 2.004.382 2.75 1.146l2.777 2.79c.75.747 1.12 1.66 1.12 2.737 0 1.105-.392 2.045-1.183 2.817l1.186 1.186c.774-.79 1.708-1.186 2.805-1.186 1.078 0 1.995.377 2.75 1.132l2.804 2.804c.754.755 1.13 1.672 1.13 2.75z"></path></svg></span><span class="a2a_label">Copy Link</span></a>
                    <div style="clear: both;"></div>
                </div>
                <script type="text/javascript">
                    var a2a_config = a2a_config || {};
                    a2a_config.linkurl = &#x631;.&#x633; + "/store/product/105";
                    a2a_config.locale = "ar";
                </script>
                <script async="" src="../../menu/page.js" type="text/javascript"></script>
            </div>
            <div class="col-md-6">
                <div class="mb-10">




                 <?php foreach($res as $r):?>
                <!-- mobile name -->
                    <h1 class="product-details__title brand-title">
                      <?php echo $r['name'] ?>
                    </h1>
               <!-- end mobile name  -->
               <!-- moblie price -->
                    <span class="product-price" id="product_price_101090330">
                        السعر:    <?php echo $r['price_after']?>  &#x631;.&#x633;
                    </span>
                    <!-- end mobile price -->
                </div>
                <div class="product-detials__desc " data-shrink-height="300">

                <ul>
                    <li>
                        <?php echo $r['description']?>
                    </li>
                </ul>
                <?php endforeach?>
                </div>
<!-- end product -->
                <div class="product-form">
                    <div id="order" class="row no-margin product-order-container">
                        <div class="col-xs-12">
                            <form method="post">
                                <input type="hidden" name="_token" value="IkhHIFqEP3q0i7tOxx6tNijekmfCIttoFQGLrRQY">
                                <ul class="list list--vertical list--product-fields">
                                    
                                    
                                    <li class="form-group form-group--price form-group--price" style="border:none; padding-top:0;">
                                        <label class="product-details__price">
                                            السعر
                                        </label>
                                        <div>
                                            <span class="product-price" id="product_price_101090330">
                                            <?php echo $r['price_after']?> &#x631;.&#x633</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="cart-fav mobile-webview-hide">
                                  <form action="" method="post">
                                
                                    <button name="sub"  href="../cart.php" type="submit"  class="product-add f add-cart-large add_to_cart_large_btn"type="submit">
                                        إضافة للسلة
                                   </button>
                                  </form>
                                </div>
                                <input type="hidden" id="product_id" name="product_id" value="101090330">
                                <input name="__RequestVerificationToken" type="hidden" value="CfDJ8Lmd55oINIxGoeVFTykKD3hM_n4JD7cJHtHe8e6IIrVaV5rzjJlEDab8g-k-BPtkZUV75-MTMxbGvDL2-7abtAVFR2sUFZjfFkCuYZkpiDbft8F7YI-KKgwzeu9oo4i86YByD2_gYn2SRxI84IhNvJ0">
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!--costumers reviews  -->
<section class="py-4 text-center bg-brand">
    <div class="container">
        <h2 class="section--title mb-2 text-white">آراء العملاء</h2>
        <div class="row testimonails-listing">
                <div class="testimonials-item">
                            <blockquote>
                                        <ul class='rating'>
                                                    <li>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                    </li>
                                        </ul>
                                        <div class="testimonials-item__content">
                                                    <p> اسعار تنافسية ومنتجات اصلية يشكرون عليها </p>
                                        </div>
                                        <cite class="d-flex">
                                                    <img data-src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" alt="" src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" class="lazyload">
                                                    <div class="text-right">
                                                                <div>
                                                                            <span class="testimonials-item__author">
                                                                                        مشعل العتيبي
                                                                            </span>
                                                                </div>
                                                                <span class="testimonials-item__location">
                                                                            الرياض
                                                                </span>
                                                    </div>
                                        </cite>
                            </blockquote>
                </div>
                <div class="testimonials-item">
                            <blockquote>
                                        <ul class='rating'>
                                                    <li>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                    </li>
                                        </ul>
                                        <div class="testimonials-item__content">
                                                    <p> </p>
                                        </div>
                                        <cite class="d-flex">
                                        <img data-src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" alt="" src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" class="lazyload">
                                                    <div class="text-right">
                                                                <div>
                                                                            <span class="testimonials-item__author">
                                                                                        Thamer Almutiri
                                                                            </span>
                                                                </div>
                                                                <span class="testimonials-item__location">
                                                                            رابغ
                                                                </span>
                                                    </div>
                                        </cite>
                            </blockquote>
                </div>
                <div class="testimonials-item">
                            <blockquote>
                                        <ul class='rating'>
                                                    <li>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star-o'></i>
                                                    </li>
                                        </ul>
                                        <div class="testimonials-item__content">
                                                    <p> شكرا لكم . منتجات جيدة وخدمة راقية </p>
                                        </div>
                                        <cite class="d-flex">
                                        <img data-src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" alt="" src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" class="lazyload">
                                                    <div class="text-right">
                                                                <div>
                                                                            <span class="testimonials-item__author">
                                                                                        عبدالله الثنيان
                                                                            </span>
                                                                </div>
                                                                <span class="testimonials-item__location">
                                                                            المزاحمية
                                                                </span>
                                                    </div>
                                        </cite>
                            </blockquote>
                </div>
                <div class="testimonials-item">
                            <blockquote>
                                        <ul class='rating'>
                                                    <li>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                    </li>
                                        </ul>
                                        <div class="testimonials-item__content">
                                                    <p> ممتاز </p>
                                        </div>
                                        <cite class="d-flex">
                                        <img data-src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" alt="" src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" class="lazyload">
                                                    <div class="text-right">
                                                                <div>
                                                                            <span class="testimonials-item__author">
                                                                                        سلطان العنزي
                                                                            </span>
                                                                </div>
                                                                <span class="testimonials-item__location">
                                                                            القصيم
                                                                </span>
                                                    </div>
                                        </cite>
                            </blockquote>
                </div>
                <div class="testimonials-item">
                            <blockquote>
                                        <ul class='rating'>
                                                    <li>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                    </li>
                                        </ul>
                                        <div class="testimonials-item__content">
                                                    <p> اول تجربه للطلب من هالموقع جميل وسرعه الاستجابة لديهم وسرعه التوصيل بالتوفيق </p>
                                        </div>
                                        <cite class="d-flex">
                                        <img data-src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" alt="" src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" class="lazyload">
                                                    <div class="text-right">
                                                                <div>
                                                                            <span class="testimonials-item__author">
                                                                                        ريوف العتيبي
                                                                            </span>
                                                                </div>
                                                                <span class="testimonials-item__location">
                                                                            بقيق
                                                                </span>
                                                    </div>
                                        </cite>
                            </blockquote>
                </div>
                <div class="testimonials-item">
                            <blockquote>
                                        <ul class='rating'>
                                                    <li>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                    </li>
                                        </ul>
                                        <div class="testimonials-item__content">
                                                    <p> متتاز </p>
                                        </div>
                                        <cite class="d-flex">
                                        <img data-src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" alt="" src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" class="lazyload">
                                                    <div class="text-right">
                                                                <div>
                                                                            <span class="testimonials-item__author">
                                                                                        عبدالكريم اللاحم
                                                                            </span>
                                                                </div>
                                                                <span class="testimonials-item__location">
                                                                            بريدة
                                                                </span>
                                                    </div>
                                        </cite>
                            </blockquote>
                </div>
                <div class="testimonials-item">
                            <blockquote>
                                        <ul class='rating'>
                                                    <li>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star-o'></i>
                                                    </li>
                                        </ul>
                                        <div class="testimonials-item__content">
                                                    <p> Neis </p>
                                        </div>
                                        <cite class="d-flex">
                                        <img data-src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" alt="" src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" class="lazyload">
                                                    <div class="text-right">
                                                                <div>
                                                                            <span class="testimonials-item__author">
                                                                                        عناد المطيري
                                                                            </span>
                                                                </div>
                                                                <span class="testimonials-item__location">
                                                                            الرس
                                                                </span>
                                                    </div>
                                        </cite>
                            </blockquote>
                </div>
                <div class="testimonials-item">
                            <blockquote>
                                        <ul class='rating'>
                                                    <li>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                    </li>
                                        </ul>
                                        <div class="testimonials-item__content">
                                                    <p> جميل جدا وتعاملك جميل وسريع في التسليم </p>
                                        </div>
                                        <cite class="d-flex">
                                        <img data-src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" alt="" src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" class="lazyload">
                                                    <div class="text-right">
                                                                <div>
                                                                            <span class="testimonials-item__author">
                                                                                        طارق الشراري
                                                                            </span>
                                                                </div>
                                                                <span class="testimonials-item__location">
                                                                            القريات
                                                                </span>
                                                    </div>
                                        </cite>
                            </blockquote>
                </div>
        </div>
    </div>
</section>
  <!--end of costumers reviews  -->


    <script src="../../theme/code.jquery.com/jquery-3.3.1.js" type="217ebb6a9117e6efb914a3a4-text/javascript"></script>
    <meta charset="UTF-8">



    <script type="217ebb6a9117e6efb914a3a4-text/javascript" src="../../theme/smartarget.online/loadercd92.js?u=fd08f4cde818682ec83f3da8f89ae8c64edfb165&amp;source=salla_popup"></script>
    <script src="../../theme/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="217ebb6a9117e6efb914a3a4-|49" defer=""></script>


    <script defer="" src="../../beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"71c5d8355a9dcd71","token":"0ba4cd7067784c07aa8f5f733dd0f1a2","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>

    <link href="../../theme/assets.salla.cloud/css/StyleSheet.css" rel="stylesheet">
    <div id='whatsapp-chat' class='hide'>
        <div class='header-chat'>
            <div class='head-home'>
                <div class='info-avatar'>
<img src="../../Images/Original/11a4d886-5bd0-469a-bda2-f95d9cbec64a.jpg" alt="&#x628;&#x631;&#x648; &#x62A;&#x64A;&#x643;"></div>
                <p><span class="whatsapp-name">&#x628;&#x631;&#x648; &#x62A;&#x64A;&#x643;</span><br><small>عادة يتم الرد خلال دقيقة.</small></p>

            </div>
            <div class='get-new hide'>
                <div id='get-label'></div>
                <div id='get-nama'></div>
            </div>
        </div>
        <div class='home-chat'>
        </div>
        <div class='start-chat'>
            <div pattern="https://elfsight.com/assets/chats/patterns/whatsapp.png" class="WhatsappChat__Component-sc-1wqac52-0 whatsapp-chat-body">
                <div class="WhatsappChat__MessageContainer-sc-1wqac52-1 dAbFpq">
                    <div style="opacity: 0;" class="WhatsappDots__Component-pks5bf-0 eJJEeC">
                        <div class="WhatsappDots__ComponentInner-pks5bf-1 hFENyl">
                            <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotOne-pks5bf-3 ixsrax"></div>
                            <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotTwo-pks5bf-4 dRvxoz"></div>
                            <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotThree-pks5bf-5 kXBtNt"></div>
                        </div>
                    </div>
                    <div style="opacity: 1;" class="WhatsappChat__Message-sc-1wqac52-4 kAZgZq">
                        <div class="WhatsappChat__Author-sc-1wqac52-3 bMIBDo">&#x628;&#x631;&#x648; &#x62A;&#x64A;&#x643;</div>
                        <div class="WhatsappChat__Text-sc-1wqac52-2 iSpIQi">السلام عليكم 👋<br><br>سعيد بالتحدث معك كيف بامكننا خدمتك .?</div>
                        <div class="WhatsappChat__Time-sc-1wqac52-5 cqCDVm">00:52</div>
                    </div>
                </div>
            </div>

            <div class='blanter-msg'>
                <textarea id='chat-input' placeholder='اكتب الان' maxlength='120' row='1'></textarea>
                <a href='javascript:void;' id='send-it'><svg viewbox="0 0 448 448"><path d="M.213 32L0 181.333 320 224 0 266.667.213 416 448 224z"></path></svg></a>

            </div>
        </div>
        <div id='get-number'></div><a class='close-chat' href='javascript:void'>×</a>
    </div>
    <a class='blantershow-chat' href='javascript:void' title='Show Chat'><svg width="20" viewbox="0 0 24 24"><defs></defs><path fill="#eceff1" d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z"></path><path fill="#4caf50" d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z"></path><path fill="#fafafa" d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z"></path></svg> محادثة واتس اب</a>

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
                            <a href="<?php echo $wt['link']?>" rel="nofollow" style="direction:ltr" target="_blank">
                                <i class="sicon-whatsapp2"></i>
                                واتساب
                            </a>&nbsp;
                            <a href="">
                                <i class="sicon-mail"></i>
                                ايميل:<?php echo $email['link']?>
                            </a>&nbsp;
                        </div>
                        <div class="store-certificate">
                            <a href="#">
                                <img src="../../theme/assets.salla.cloud/themes/default/assets/images/maroof2d19.png?v=v1.4.875" alt=" ">
                            </a>
                            <a href="#" class="tax-certificate pdf" style="display: none">
                                <img src="../../theme/assets.salla.cloud/themes/default/assets/images/tax2d19.png?v=v1.4.875" alt=" ">
                            </a>
                            <a href="#" class="tax-certificate image ">
                                <img src="../../theme/assets.salla.cloud/themes/default/assets/images/tax2d19.png?v=v1.4.875" alt=" ">
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
                                        <img class="w-100" src="../../theme/cdn.salla.sa/WlXGP/OZHA1EfusZu1WYxzYRvC222JhCKi083mmOg1FHIE.jpg" alt="302277430400003">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <h2 class="footer-title"><span>روابط مهمة</span></h2>
                        <ul class="footer-links">
                            <li><a href="../../Home/TermsConditions.php"> سياسة الضمان والاستبدال </a></li>
                            <li><a href="../../Home/WorkTimes.php"> اوقات العمل </a></li>
                            <li><a href="../../Home/RefundAndCancleOrders.php"> استرجاع الطلبات / الغاء الطلب / استرجاع المبالغ </a></li>
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
                                <a href="<?php echo $tw['link']?>" target="_blank">
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
                        <p class="mb-4 mb-md-0">
                        </p>
                    </div>
                    <div class="fs-payment">
                        <div class="icons">
                            <div class="store-certificate">
                                <a href="#">
                                    <img src="../../theme/assets.salla.cloud/themes/default/assets/images/maroof2d19.png?v=v1.4.875" alt=" ">
                                </a>
                                <a href="#" class="tax-certificate pdf" style="display: none">
                                    <img src="../../theme/assets.salla.cloud/themes/default/assets/images/tax2d19.png?v=v1.4.875" alt=" ">
                                </a>
                                <a href="#" class="tax-certificate image ">
                                    <img src="../../theme/assets.salla.cloud/themes/default/assets/images/tax2d19.png?v=v1.4.875" alt=" ">
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
                                            <img class="w-100" src="../../theme/cdn.salla.sa/WlXGP/OZHA1EfusZu1WYxzYRvC222JhCKi083mmOg1FHIE.jpg" alt="302277430400003">
                                        </div>
                                    </div>
                                </div>
                            </div> <div>
                                <img src="../../theme/assets.salla.cloud/themes/default/assets/images/mada2d19.png?v=v1.4.875" alt=" ">
                                <img src="../../theme/assets.salla.cloud/themes/default/assets/images/cc2d19.png?v=v1.4.875" alt=" ">
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
    <script src="../../theme/assets.salla.cloud/js/es473a.js?id=d5cfbcf7a982428940ba6f62dca53629" type="217ebb6a9117e6efb914a3a4-text/javascript"></script>
    <script src="../../theme/assets.salla.cloud/js/app51f2.js?id=23318ed211a2ce3f9176ec25049b3f91" type="217ebb6a9117e6efb914a3a4-text/javascript"></script>
    <script src="../../theme/assets.salla.cloud/js/themese062.js?id=f77777c421a834dc59eb36e46dc30444" type="217ebb6a9117e6efb914a3a4-text/javascript"></script>
    <script type="217ebb6a9117e6efb914a3a4-application/javascript">
        window.Salla = window.Salla || {};
        window.Salla.Events = {"page.view":{"route":"store.home","link":"https://protichksa.com/"},"services::adwords.init":{"services":{"adwords":{"conversion_id":"673352264","conversion_label":"cXmBCIPxgYACEMiUisEC"}}},"services::facebook_pixel.init":{"services":{"facebook_pixel":{"pixel_id":"388710135549777"}}},"services::google_analytics.init":{"services":{"google_analytics":{"tracking_id":"UA-174761042-1"}}},"services::snapchat_pixel.init":{"services":{"snapchat_pixel":{"pixel_id":"63361860-112e-4554-9f35-af465451355d"}}},"services::tiktok_pixel.init":{"services":{"tiktok_pixel":{"pixel_id":"C6MDLF3S5310I01MVJD0"}}},"services::twitter_pixel.init":{"services":{"twitter_pixel":{"pixel_id":"o3ku3"}}}};
    </script>
    <script src="../../theme/assets.salla.cloud/vendor/salla/events.js" type="217ebb6a9117e6efb914a3a4-text/javascript"></script>



    <script type="217ebb6a9117e6efb914a3a4-text/javascript" src="../../theme/assets.salla.cloud/themes/default/assets/js/plugins/slick2d19.js?v=v1.4.875"></script>
    <script type="217ebb6a9117e6efb914a3a4-text/javascript" src="../../theme/assets.salla.cloud/themes/theme_6/assets/js/app2d19.js?v=v1.4.875"></script>
    <script type="217ebb6a9117e6efb914a3a4-text/javascript" src="../../theme/assets.salla.cloud/themes/default/assets/js/plugins/jquery-ui.min2d19.js?v=v1.4.875"></script>


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

    <script src="../../lib/jquery/dist/jquery.js"></script>
    <script src="../../lib/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../../ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
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
    
</body>
</html>