<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Whizzie | Profile Genie</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

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
						<h3 class="breadcrumb-header">Profile Genie</h3>
						<ul class="breadcrumb-tree">
							<li><a href="<?php echo base_url(); ?>">Home</a></li>
							<li class="active">Blank</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<style>
		.file {
			visibility: hidden;
			position: absolute;
		}
		.container-upload {
			border-radius: 25px;
			background: #ccced1;
			padding: 20px; 
		}
		.image-back{
			background-image: url(../../assets/img/009.jpg);
			/* object-fit: contain; */
			height: 420px;
		}
		.center-title {
			display: flex;
  		justify-content: center;
		}
		</style>

		<!-- SECTION -->
		<div class="section">
			<!-- container -->

			<div class="container container-upload image-back" style="overflow: auto; float: none; text-align:center;">
				<div style="background: rgba(0, 0, 0, 0.75); padding: 20px; width: 270px; border-radius: 20px; margin-left: auto; margin-right: auto; ">
					<img src="../../assets/img/gigi.jpg" alt="" style="border-radius: 75px; object-fit: cover; width: 150px; height: 150px;"/>
					<h3 style="padding-top: 20px; color: white;">Karissa's Shop</h3>
					<div></div>
						<a href="<?=base_url("index.php/Profile/index"); ?>" class="cta-btn primary-btn" style="background: #523163;"><b>WISHER'S MODE</b></a>
						<a  href="<?=base_url("index.php/SettingGenie/index"); ?>" class="btn"><i class="fa fa-cog" style="color:white;"></i></a>
					</div>
				</div>
			</div>

			<div class="container container-upload" style="background: white; overflow: auto; float: none; text-align:center;">
				<h1>MY PRODUCTS</h1>
				
				<div class="row">
					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="../../assets/img/001.jpg" alt="">
							</div>
							<div class="product-body">
                                <h3 class="product-name"><a href="#">Balayage Shoes</a></h3>
                                <h4 class="product-price">Rp 78.000</h4>
                                <p><i class="fa fa-map-marker"></i>&nbsp&nbspJakarta Timur</p>
								<div class="row">
									<button class="btn"><b>8 Wishes</b></button>
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

					<!-- product 2 -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="../../assets/img/001.jpg" alt="">
							</div>
							<div class="product-body">
                                <h3 class="product-name"><a href="#">Balayage Shoes</a></h3>
                                <h4 class="product-price">Rp 78.000</h4>
                                <p><i class="fa fa-map-marker"></i>&nbsp&nbspJakarta Timur</p>
								<div class="row">
									<button class="btn"><b>8 Wishes</b></button>
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
					<!-- /product 2 -->

					<!-- product 3 -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="../../assets/img/001.jpg" alt="">
							</div>
							<div class="product-body">
                                <h3 class="product-name"><a href="#">Balayage Shoes</a></h3>
                                <h4 class="product-price">Rp 78.000</h4>
                                <p><i class="fa fa-map-marker"></i>&nbsp&nbspJakarta Timur</p>
								<div class="row">
									<button class="btn"><b>8 Wishes</b></button>
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
					<!-- /product 3 -->

					<!-- product 4 -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="../../assets/img/001.jpg" alt="">
							</div>
							<div class="product-body">
                                <h3 class="product-name"><a href="#">Balayage Shoes</a></h3>
                                <h4 class="product-price">Rp 78.000</h4>
                                <p><i class="fa fa-map-marker"></i>&nbsp&nbspJakarta Timur</p>
								<div class="row">
									<button class="btn"><b>8 Wishes</b></button>
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
					<!-- /product 4 -->

				</div>
				

			</div>

			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<?=$js?>
		
		<!-- FOOTER -->
		<?=$footer?>
	</body>
</html>
