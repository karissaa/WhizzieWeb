<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Whizzie | Wish Details</title>

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
						<h3 class="breadcrumb-header">Wish Details</h3>
						<ul class="breadcrumb-tree">
							<li><a href="<?php echo base_url(); ?>">Home</a></li>
							<li class="active">Wish Details</li>
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
					<div class="col-md-6 col-md-push-0">
						<div id="product-main-img">
							<img src="" alt="" id = "wishDetailImage">							
						</div>
					</div>

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">

							<h2 class="product-name" id= "wishTitle"></h2>
							<div>
								<a class="review-link" id = "wishDate"></a>
							</div>
							<br>
							<p id = "wishDesc"> </p>
							<br>
							<div class="add-to-cart">
								<button class="add-to-cart-btn" onclick = "offerModal()"><i class="fa fa-shopping-cart"></i> Offer a product</button>
							</div>

							<ul class="product-links">
								<li>Category:</li>
								<li><a id = "wishCat"></a></li>
							</ul>

							<div style="margin-top:20px;padding:5px; border-radius:67px;">
								<div class="row">
									<div class="col-sm-2">
										<img id= "wisherImage" src="" alt="" style="border-radius: 59px; padding:10px; object-fit: cover; width: 100px; height: 100px;">
									</div>
									<div class="col-sm-8" style="padding-left: 40px; padding-top: 20px;">
										<p style="color:black;">Wisher</p>
										<h4 style="color:black;" id = "wisherName"></h4>
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
		<div class="section" >
			<!-- container -->
			<div class="container" >
				<!-- row -->
				<div class="col-md-12">
					<div class="section-title text-center">
						<h3 class="title">Products Offered</h3>
					</div>
				</div>
				<div class="row" style="margin-top:0px;margin-bottom:50px;" id = "productsSection">

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
                    </div>

                    <div class="modal-footer">
                        
                    </div>
                </div>
            </div>
		</div>
		
		<script>
			function offerModal(){
				$("#modalImageOffer").modal("show");
    		}
		</script>

	</body>
</html>
