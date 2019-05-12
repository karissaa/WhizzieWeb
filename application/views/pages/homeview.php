<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Whizzie</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Investigasi class slick-nav efeknya apa -->

		
		<?=$css?>
		<?=$firebase?>
		
		<?=$js_classes?>
		<?=$js_functions?>
		
    </head>
	<body>
		<!-- HEADER -->
		<?=$header?>
		
		<!-- HOT DEAL SECTION -->
		<!-- Mau jadi Carousel -->
		<div id="hot-deal" class="section"style="margin-top: 0; background-image: url(./assets/img/banner2.jpg); background-size: cover;">
			<div class="container">
				<div class="row" style="height:450px; ">
					<div class="col-md-12" style="margin-top:180px;">
						<div class="hot-deal" style="">
							<h2 class="text-uppercase">Grant your wish now!</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="<?php echo base_url("index.php/Wishes/index"); ?>">WISH!</a>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!--  HIGHLIGHTED CATEGORY CARDS -->
		<!-- <div class="section">
			<div class="container">
				<div class="row" id = "featuredCat">
				</div>
			</div>
		</div> -->
		
		<div class="section">
			<div class="container" style="background:#fff6c4; padding:25px;">
		<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Latest Wishes </h3>
						</div>
					</div>
					<!-- product -->
					<div class="col-md-4 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="./assets/img/001.jpg" alt="" style="object-fit: cover; width: 353.33px; height: 353.33px;">
								<div class="product-label">
									<span class="sale">7 Offers</span>
									<span class="new">NEW</span>
								</div>
							</div>
							<div class="product-body">
								<p class="product-category">Men Fashion</p>
								<h3 class="product-name"><a href="#">Wooden Mahogany Watch</a></h3>
								<p>Really need one for my wedding!</p>
							</div>
						</div>
					</div>
					<!-- /product -->


					<!-- product -->
					<div class="col-md-4 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="./assets/img/shoes.jpg" alt="" style="object-fit: cover; width: 353.33px; height: 353.33px;">
								<div class="product-label">
									<span class="sale">5 Offers</span>
									<span class="new">NEW</span>
								</div>
							</div>
							<div class="product-body">
								<p class="product-category">Men Fashion</p>
								<h3 class="product-name"><a href="#">Wooden Mahogany Watch</a></h3>
								<p>Really need one for my wedding!</p>
							</div>
						</div>
					</div>
					<!-- /product -->

					<!-- product -->
					<div class="col-md-4 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="./assets/img/009.jpg" alt="" style="object-fit: cover; width: 353.33px; height: 353.33px;">
								<div class="product-label">
									<span class="sale">10 Offers</span>
									<span class="new">NEW</span>
								</div>
							</div>
							<div class="product-body">
								<p class="product-category">Men Fashion</p>
								<h3 class="product-name"><a href="#">Wooden Mahogany Watch</a></h3>
								<p>Really need one for my wedding!</p>
							</div>
						</div>
					</div>
					<!-- /product -->

				</div>
				</div>
				</div>

		<!-- FEATURED GENIES -->
		<div class="section">
			<div class="container" style="background:#f3fcff; padding:25px; padding-bottom:70px;">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title"> Featured Genies </h3>
						</div>
					</div>

					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product 1 -->
										<div class="product">
											<div class="product-img" >
												<img src="./assets/img/009.jpg" alt="">
												<div class="product-label" style="background: white; padding: 3px; border-radius: 62px; margin-left: auto; margin-right: 53px;margin-top: 100px;">
													<img src="./assets/img/gigi.jpg" alt="" style="border-radius: 59px; padding:10px; object-fit: cover; width: 120px; height: 120px; text-align:center;">
												</div>
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">Gigi Fashion Store</a></h3>
												<p class="product-category">We sell incredible stuffs!</p>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-user"></i>Visit Profile</button>
											</div>
										</div>
										<!-- /product -->
										<!-- product 2 -->
										<div class="product">
											<div class="product-img" >
												<img src="./assets/img/009.jpg" alt="">
												<div class="product-label" style="background: white; padding: 3px; border-radius: 62px; margin-left: auto; margin-right: 53px;margin-top: 100px;">
													<img src="./assets/img/gigi.jpg" alt="" style="border-radius: 59px; padding:10px; object-fit: cover; width: 120px; height: 120px; text-align:center;">
												</div>
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">Gigi Fashion Store</a></h3>
												<p class="product-category">We sell incredible stuffs!</p>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-user"></i>Visit Profile</button>
											</div>
										</div>
										<!-- /product -->
										<!-- product 3 -->
										<div class="product">
											<div class="product-img" >
												<img src="./assets/img/009.jpg" alt="">
												<div class="product-label" style="background: white; padding: 3px; border-radius: 62px; margin-left: auto; margin-right: 53px;margin-top: 100px;">
													<img src="./assets/img/gigi.jpg" alt="" style="border-radius: 59px; padding:10px; object-fit: cover; width: 120px; height: 120px; text-align:center;">
												</div>
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">Gigi Fashion Store</a></h3>
												<p class="product-category">We sell incredible stuffs!</p>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-user"></i>Visit Profile</button>
											</div>
										</div>
										<!-- /product -->
										<!-- product 4 -->
										<div class="product">
											<div class="product-img" >
												<img src="./assets/img/009.jpg" alt="">
												<div class="product-label" style="background: white; padding: 3px; border-radius: 62px; margin-left: auto; margin-right: 53px;margin-top: 100px;">
													<img src="./assets/img/gigi.jpg" alt="" style="border-radius: 59px; padding:10px; object-fit: cover; width: 120px; height: 120px; text-align:center;">
												</div>
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">Gigi Fashion Store</a></h3>
												<p class="product-category">We sell incredible stuffs!</p>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-user"></i>Visit Profile</button>
											</div>
										</div>
										<!-- /product -->
										<!-- product 5 -->
										<div class="product">
											<div class="product-img" >
												<img src="./assets/img/009.jpg" alt="">
												<div class="product-label" style="background: white; padding: 3px; border-radius: 62px; margin-left: auto; margin-right: 53px;margin-top: 100px;">
													<img src="./assets/img/gigi.jpg" alt="" style="border-radius: 59px; padding:10px; object-fit: cover; width: 120px; height: 120px; text-align:center;">
												</div>
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">Gigi Fashion Store</a></h3>
												<p class="product-category">We sell incredible stuffs!</p>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-user"></i>Visit Profile</button>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<!-- FEATURED PRODUCT -->
		<div class="section">
			<div class="container" style="background:#fdf3ff; padding:25px; padding-bottom:70px;">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title"> Featured Product </h3>
						</div>
					</div>

					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./assets/img/shoes.jpg" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">Balayage Shoes</a></h3>
												<h4 class="product-price">Rp 78.000</h4>
												<p><i class="fa fa-map-marker"></i>&nbsp&nbspJakarta Timur</p>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->
										<!-- product 2 -->
										<div class="product">
											<div class="product-img">
												<img src="./assets/img/shoes.jpg" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">Balayage Shoes</a></h3>
												<h4 class="product-price">Rp 78.000</h4>
												<p><i class="fa fa-map-marker"></i>&nbsp&nbspJakarta Timur</p>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->
										<!-- product 3-->
										<div class="product">
											<div class="product-img">
												<img src="./assets/img/shoes.jpg" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">Balayage Shoes</a></h3>
												<h4 class="product-price">Rp 78.000</h4>
												<p><i class="fa fa-map-marker"></i>&nbsp&nbspJakarta Timur</p>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->
										<!-- product 4-->
										<div class="product">
											<div class="product-img">
												<img src="./assets/img/shoes.jpg" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">Balayage Shoes</a></h3>
												<h4 class="product-price">Rp 78.000</h4>
												<p><i class="fa fa-map-marker"></i>&nbsp&nbspJakarta Timur</p>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->
										<!-- product 5-->
										<div class="product">
											<div class="product-img">
												<img src="./assets/img/shoes.jpg" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">Balayage Shoes</a></h3>
												<h4 class="product-price">Rp 78.000</h4>
												<p><i class="fa fa-map-marker"></i>&nbsp&nbspJakarta Timur</p>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?=$js?>
		
		<!-- FOOTER -->
		<?=$footer?>
	</body>
</html>
