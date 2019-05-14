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
							<li class="active"> Profile </li>
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
			background-image: url();
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
			<div class="container container-upload image-back" style="overflow: auto; float: none; text-align:center;" id = "genieBackdrop">
				<div style="background: rgba(0, 0, 0, 0.75); padding: 20px; width: 270px; border-radius: 20px; margin-left: auto; margin-right: auto; ">
					<img id = "genieProfPic" src="" alt="" style="border-radius: 75px; object-fit: cover; width: 150px; height: 150px;"/>
					<h3 style="padding-top: 20px; color: white;" id = "genieName"> Karissa's Shop</h3>
					<div>
						<a href="<?=base_url("index.php/Profile/index")?>" class="cta-btn primary-btn" style="background: #523163;"> <b>WISHER'S MODE</b> </a>
						<a href="<?=base_url("index.php/SettingGenie/index")?>" class="btn"> <i class="fa fa-cog" style="color:white;"></i> </a>
					</div>
				</div>
			</div>

			<div class="container container-upload" style="background: white; overflow: auto; float: none; text-align:center;">
				<h1>MY PRODUCTS</h1>
				
				<div class="row" id = "productContainer">

				</div>
			</div>

			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<?=$js?>
		
		<!-- FOOTER -->
		<?=$footer?>

		<!-- Modal Edit product -->
			<div class="modal" role="dialog" id="modalEditProduct">
					<div class="modal-dialog">
							<div class="modal-content" role="document">
									<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
											</button>
											<h4 class="modal-title" style="text-align:center;">EDIT PRODUCT</h4> 
									</div>
									<div class="modal-body">
											<div class="form-group">
													<label for="">Name Product: </label>
													<input type="text" class="form-control" id="modalProductName" required>
											</div>
											<div class="form-group">
													<label for="">Description Product: </label>
													<input type="text" class="form-control" id="modalProductDesc" required>
											</div>
											<div class="form-group">
													<label for="">Price Product: </label>
													<input type="number" class="form-control" id="modalProductPrice" min = 0 required>
											</div>
											<input type="hidden" id = "modalProductKey" value = "">
									</div>
									<div class="modal-footer">
											<button type="button" class="btn btn-info" style="display: block; width: 100%;" onclick = "editProduct()">SAVE</button>
									</div>
							</div>
					</div>
			</div>
			<!-- / Modal Edit Product -->

			<script>
				function editModal(productKey){
					function findProduct(temp){
							return temp.productKey == productKey;
					}

					let chosenProduct = productsArr.find(findProduct);

					document.getElementById('modalProductName').value = chosenProduct.name;
					document.getElementById('modalProductDesc').value = chosenProduct.desc;
					document.getElementById('modalProductPrice').value = chosenProduct.price;
					document.getElementById('modalProductKey').value = productKey;

					$("#modalEditProduct").modal("show");
				}
			</script>
	</body>
</html>
