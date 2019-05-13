<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Whizzie | Profile Wisher</title>

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
						<h3 class="breadcrumb-header">Profile Wisher</h3>
						<ul class="breadcrumb-tree">
							<li><a href="<?php echo base_url(); ?>">Home</a></li>
							<li class="active">Profile</li>
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

			<div id = "myBackgroundPic" class="container container-upload image-back" style="overflow: auto; float: none; text-align:center;">
				<div style="background: rgba(0, 0, 0, 0.75); padding: 20px; width: 270px; border-radius: 20px; margin-left: auto; margin-right: auto; ">
					<img id = "myProfilePic" src="../../assets/img/gigi.jpg" alt="" style="border-radius: 75px; object-fit: cover; width: 150px; height: 150px;"/>
					<h3 id = "wisherName" style="padding-top: 20px; color: white;">Felicia Karissa</h3>
					<div></div>
						<a href="<?=base_url("index.php/ProfileGenie/index"); ?>" class="cta-btn primary-btn" style="background: orange;"><b>GENIE'S MODE</b></a>
						<a  href="<?=base_url("index.php/SettingWisher/index"); ?>" class="btn"><i class="fa fa-cog" style="color:white;"></i></a>
					</div>
				</div>
			</div>

			<div class="container container-upload" style="background: white; overflow: auto; float: none; text-align:center;">
				<h1>MY WISHES</h1>
				
				<div class="row" id = "wishContainer">
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

		<!-- Modal Edit Wish -->
			<div class="modal" role="dialog" id="modalEditWish">
					<div class="modal-dialog">
							<div class="modal-content" role="document">
									<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
											</button>
											<h4 class="modal-title" style="text-align:center;">EDIT WISH</h4> 
									</div>
									<div class="modal-body">
											<div class="form-group">
													<label for="">Title Wish: </label>
													<input type="text" class="form-control" id="modalWishTitle" required>
											</div>
											<div class="form-group">
													<label for="">Description Wish: </label>
													<input type="text" class="form-control" id="modalWishDesc" required>
											</div>
											<input type="hidden" value = "" id = "modalWishKey">
									</div>
									<div class="modal-footer">
											<button type="button" class="btn btn-info" style="display: block; width: 100%;" onclick = "editWish()">SAVE</button>
									</div>
							</div>
					</div>
			</div>
			<!-- / Modal Edit Wish -->

			<script>
				  function editModal(wishKey){
						function findWish(temp){
							return temp.wishKey == wishKey;
						}

						let chosenWish = myWishes.find(findWish);

						document.getElementById('modalWishTitle').value = chosenWish.title;
						document.getElementById('modalWishDesc').value = chosenWish.desc;
						document.getElementById('modalWishKey').value = wishKey;

						$('#modalEditWish').modal('show');
    			}
			</script>
	</body>
</html>
