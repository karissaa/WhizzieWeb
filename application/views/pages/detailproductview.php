<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title> Whizzie | Product Details </title>

		<?=$css?>
		<?=$firebase?>
		
		<?=$js_classes?>
		<?=$js_functions?>
    </head>
	<body>
		<!-- HEADER -->
		<?=$header?>
		<!-- /HEADER -->

		<div id="hot-deal" class="section"style="height:100px; margin: 0; background:#51b4b6; background-size: cover;">
		</div>

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Product Details</h3>
						<ul class="breadcrumb-tree">
							<li><a href="<?php echo base_url(); ?>">Home</a></li>
							<li class="active">Product Details</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-6 col-md-push-0" >
						<div id="product-main-img">
							<img src="" alt="" id = "productDetailImage">
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name" id = "productDetailName"> </h2>

							<div>
								<h3 class="product-price" id = "productDetailPrice"></h3>
							</div>

							<p id = "productDetailDesc"> </p>

							<br>

							<div class="add-to-cart">
								<div class="qty-label">
									Qty
									<div class="input-number">
										<input type="number" value = "1" min = "1" max = "9999">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>

							<ul class="product-links" >
								<li>Category:</li>
								<li><a id = "categoryTag">Headphones</a></li>
							</ul>

							<div style="margin-top:20px;padding:5px; border-radius:67px;">
								<div class="row">
									<div class="col-sm-2">
										<img id = "genieProfilePicture" src="../../assets/img/gigi.jpg" alt="" style="border-radius: 59px; padding:10px; object-fit: cover; width: 100px; height: 100px;">
									</div>
									<div class="col-sm-8" style="padding-left: 40px; padding-top: 10px;">
										<p style="color:black;"> Genie </p>
										<h4 style="color:black;" id = "genieName"> Alexander Gunardi </h4>
										<p style="color:black;" id = "storeLoc"> <i class="fa fa-map-marker"></i> &nbsp&nbspJakarta </p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Product details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="col-md-12">
					<div class="section-title text-center">
						<h3 class="title"> Offered Wishes </h3>
					</div>
				</div>

				<div class="row"  id = "wishesSection">
					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="../../assets/img/gigi.jpg" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Men Fashion</p>
								<h3 class="product-name"><a href="#">Wooden Mahogany Watch</a></h3>
								<p>Really need one for my wedding!</p>
								<div class="row">
									<button class="btn"><b>8 Offers</b></button>
									<div class="btn-group product-btns">
										<button type="button" class="add-to-wishlist dropdown-toggle" data-toggle="dropdown">
											<i class="fa fa-ellipsis-v"></i><span class="tooltipp">Settings</span>
										</button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="#">Edit</a>
											<a class="dropdown-item" href="#">Delete</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /product -->

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->

		<?=$js?>
		
		<!-- FOOTER -->
		<?=$footer?>

		<div class="modal" role="dialog" id="modalImageOffer">
            <div class="modal-dialog">
                <div class="modal-content" role="document">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" style="text-align:center;">CHOOSE A PRODUCT TO OFFER</h4> 
                    </div>
                    <div class="" id="modalBodyImageOffer">
                    <!-- append image here --> 

                        <!-- product card -->
                        <div class="col-md-4 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="./assets/img/001.jpg" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name"><a href="#">Balayage Shoes</a></h3>
                                    <h4 class="product-price">Rp 78.000</h4>
                                    <p><i class="fa fa-map-marker"></i>&nbsp&nbspJakarta Timur</p>
                                    <div class="row">
                                        <button class="btn btn-info" value=""><b>OFFER</b></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / product card -->

                    
                    </div>

                    <div class="modal-footer">
                        
                    </div>
                </div>
            </div>
        </div>
	</body>
</html>
