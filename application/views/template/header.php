<div class="header">
	 <div class="navbar" id='nav'>
        <header>
            <!-- LEFT HEADER -->
            <div id="nav navbar-fixed-top">
                <div class="container">
                    <ul class="header-links pull-left">
                        <li>
                            <a href="<?php echo base_url("index.php/Login/index"); ?>" id = "signButton">
                                <i class="fa fa-user"></i> 
                            </a>
                        </li>
                    </ul>
                    <ul class="header-links pull-right">
                        <li>
                            <a href="<?php echo base_url("index.php/Profile/index"); ?>" id = "userName">
                                <i class="fa fa-user"></i> My Account | <b id = "accountUsername">  </b>
                            </a>
                        </li>
                        <li>

                            <!-- Cart -->
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-bell"></i>
                                    <span>Notification</span>
                                    <!-- TODO: Count from database -->
                                    <!-- <div class="qty">3</div> -->
                                </a>

                                <div class="cart-dropdown">
                                    <div class="cart-list">
                                        <!-- TODO: Implement this -->
                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="<?=base_url('/assets/img/010.jpg')?>" alt=""  style="object-fit: cover; width: 70px; height: 70px;">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name">You got new offer!</h3>
                                            </div>
                                        </div>

                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="<?=base_url('/assets/img/010.jpg')?>" alt=""  style="object-fit: cover; width: 70px; height: 70px;">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name">You got new offer!</h3>
                                            </div>
                                        </div>

                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="<?=base_url('/assets/img/010.jpg')?>" alt=""  style="object-fit: cover; width: 70px; height: 70px;">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name">You got new offer!</h3>
                                            </div>
                                        </div>

                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="<?=base_url('/assets/img/010.jpg')?>" alt=""  style="object-fit: cover; width: 70px; height: 70px;">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name">You got new offer!</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
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
                                <a href="<?php echo base_url(); ?>" class="logo">
                                    <img src="<?=base_url("assets/img/logo_new.png")?>" alt="" style="object-fit: cover; height: 60px;">
                                </a>
                            </div>
                        </div>

                        <!-- SEARCH BAR -->
                        <div class="col-md-7">
                            <div class="header-search">
                                <!-- TODO: Implement Search -->
                                <form>
                                    <div class="col-md-1"></div>
                                    <select class="input-select col-md-2">
                                        <option value="product"> Product </option>
                                        <option value="wish"> Wish </option>
                                    </select>
                                    <input class="input col-md-3" placeholder="Search here">
                                    <button class="search-btn col-md-1"> Search </button>
                                </form>
                            </div>
                        </div>

                        <!-- ACCOUNT -->
                        <div class="col-md-3 clearfix">
                            <div class="header-ctn">
                                <!-- Cart -->
                                <!-- TODO: Implement This -->                                
                                <div>
                                    <a href="<?php echo base_url("index.php/Cart/index"); ?>">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Your Cart</span>
                                        <!-- TODO: Count from database -->
                                        <div class="qty">3</div>
                                    </a>
                                </div>

                                <!-- Notification -->
                                <!-- TODO: Implement This -->                                
                                <div>
                                    <a href="<?php echo base_url("index.php/Transaction/index"); ?>">
                                        <i class="fa fa-sticky-note"></i>
                                        <span> Transactions </span>
                                        <!-- Count from Database -->
                                        <div class="qty"> 2 </div>
                                    </a>
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

    <?php
        if($this->session->user_id === null){
            echo 'document.getElementById("accountUsername").innerHTML = "Guest";';
            echo 'document.getElementById("signButton").innerHTML = \'<i class="fa fa-user"></i> Sign In | Sign Up\';';
        } else {
            echo 'dbrf.ref("users/' .  $this->session->user_id . '/name").once("value").then(function(dataSnapshot){document.getElementById("accountUsername").innerHTML = dataSnapshot.val();});';
            echo 'document.getElementById("signButton").innerHTML = \'<i class="fa fa-user"></i>  Sign Out\';';
        }
    ?>
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