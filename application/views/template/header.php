<div class="header">
	 
	 <div class="navbar" id='nav'>

        <header>
            <!-- LEFT HEADER -->
            <div id="nav navbar-fixed-top">
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
                            <a href="<?php echo base_url("index.php/Profile/index"); ?>" id = "userName">
                                <i class="fa fa-user-o"></i> My Account 
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- RIGHT HEADER -->
            <div id="nav">
                <div class="container">
                    <div class="row">
                        <!-- LOGO -->
                        <div class="col-md-2">
                            <div class="header-logo">
                                <a href="#" class="logo">
                                    <img src="./assets/img/logo_new.png" alt="" style="object-fit: cover; height: 60px;">
                                </a>
                            </div>
                        </div>

                        <!-- SEARCH BAR -->
                        <div class="col-md-6">
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
                        <div class="col-md-4 clearfix">
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

                                <!-- Notification -->
                                <div>
                                    <a href="<?php echo base_url("index.php/Transaction/index"); ?>">
                                        <i class="fa fa-sticky-note"></i>
                                        <span> Transactions </span>
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
                                            <a href="<?php echo base_url("index.php/Cart/index"); ?>">View Cart</a>
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

        </div>

</div>


<!-- add some javascript code -->

<script type="text/javascript">
   	
       var  nav = document.getElementById('nav');
     
     window.onscroll = function(){

         if (window.pageYOffset >100) {

             nav.style.background = "#51b4b6";
             nav.style.boxShadow = "0px 4px 10px rgba(0, 0, 0, 0.4)";
         }
         else{
             nav.style.background = "transparent";
             nav.style.boxShadow = "none";
         }
     }



  </script>


<style type="text/css">
	   
	   *{
	   	padding: 0px;
	   	margin:0px;
	   	box-sizing: border-box;
           
	   }

	   .header{
	   	 width: 100%;
	   	 height: 100%;
	   	 background-image:url(back.jpg);
	   	 background-size: cover;

	   }

	   .navbar{
	   	width: 100%;
	   	position: fixed;
	   	top: 0px;
	   	text-align: center;
	   	transition: .5s;
           z-index: 999;
           
	   }

	   .navbar ul li{
	   	list-style-type: none;
	   	display:inline-block;
	   	padding: 10px 50px;
	   	color: white;
	   	cursor: pointer;
	   	border-radius:10px;
	   	transition: .5s;
	   }

	   .navbar ul li:hover{
	   	background: #f9b53d;
	   }
 

</style>