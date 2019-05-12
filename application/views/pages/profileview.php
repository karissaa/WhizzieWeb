<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Whizzie | Profile</title>

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

		<!-- NAVIGATION -->

			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Hot Deals</a></li>
						<li><a href="#">Categories</a></li>
						<li><a href="#">Laptops</a></li>
						<li><a href="#">Smartphones</a></li>
						<li><a href="#">Cameras</a></li>
						<li><a href="#">Accessories</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Profile</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
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
			height: 320px;
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
				<div style="background: rgba(0, 0, 0, 0.75); padding: 20px; width: 250px; border-radius: 20px; margin-left: auto; margin-right: auto; ">
					<img src="../../assets/img/gigi.jpg" alt="" style="border-radius: 75px; object-fit: cover; width: 150px; height: 150px;"/>
					<h3 style="padding-top: 20px; color: white;">Felicia Karissa</h3>
					<div>
					<button class="btn" style="background: orange;"><b>GENIE'S MODE</b></button>
					<button class="btn"><i class="fa fa-cog"></i></button>
					</div>
				</div>
			</div>

			<div class="container container-upload" style="background: white; overflow: auto; float: none; text-align:center;">
				<h1>MY WISHES</h1>
				
				<div class="row">
					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="../../assets/img/001.jpg" alt="">
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

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="../../assets/img/009.jpg" alt="">
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

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="../../assets/img/010.jpg" alt="" style="object-fit: cover; width: 260px; height: 260px;">
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
				

			</div>

			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<?=$js?>
		
		<!-- FOOTER -->
		<?=$footer?>
	</body>
</html>
