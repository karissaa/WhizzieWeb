<header>
    <!-- LEFT HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li>
                    <a href="#">
                        <i class="fa fa-phone"></i> +62-123-456-789 
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-envelope-o"></i> admin@whizzie.com 
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-map-marker"></i> Scientia Boulevard, Gading Serpong 
                    </a>
                </li>
            </ul>
            <ul class="header-links pull-right">
                <li>
                    <a href="#" id = "userName">
                        <i class="fa fa-user-o"></i> My Account 
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- RIGHT HEADER -->
    <div id="header">
        <div class="container">
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-2">
                    <div class="header-logo">
                        <a href="#" class="logo">
                            <img src="./assets/img/logo.png" alt="">
                        </a>
                    </div>
                </div>

                <!-- SEARCH BAR -->
                <div class="col-md-7">
                    <div class="header-search">
                        <form>
                            <div class="col-md-1"></div>
                            <select class="input-select col-md-2" id = "categoryDropdown">
                                <!-- Categories from Database -->
                            </select>
                            <input class="input col-md-3" placeholder="Search here">
                            <button class="search-btn col-md-1"> Search </button>
                        </form>
                    </div>
                </div>

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Notification -->
                        <div>
                            <a href="#">
                                <i class="fa fa-bell-o"></i>
                                <span> Notifications </span>
                                <!-- Count from Database -->
                                <div class="qty">2</div>
                            </a>
                        </div>

                        <!-- Cart -->
                        <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Your Cart</span>
                                <!-- Count from Database -->
                                <div class="qty">3</div>
                            </a>

                            <div class="cart-dropdown">
                                <div class="cart-list">
                                    <!-- Mungkin butuh dibersihkan -->
                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="./assets/img/product01.png" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                            <h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
                                        </div>
                                        <button class="delete"><i class="fa fa-close"></i></button>
                                    </div>

                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="./assets/img/product02.png" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                            <h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
                                        </div>
                                        <button class="delete"><i class="fa fa-close"></i></button>
                                    </div>
                                </div>

                                <div class="cart-summary">
                                    <small>3 Item(s) selected</small>
                                    <h5>SUBTOTAL: $2940.00</h5>
                                </div>

                                <div class="cart-btns">
                                    <a href="#">View Cart</a>
                                    <a href="#">Checkout <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>