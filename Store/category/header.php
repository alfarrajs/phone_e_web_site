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
                    <a data-cart-small="" href="../Cart.html" class="ml-1 circle-action d-lg-none site-header__mine-cart" rel="nofollow">
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