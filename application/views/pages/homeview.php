<!-- TODO: Setup Page Links -->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Whizzie</title>
		
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
				<div class="row" style="height:450px;">
					<div class="col-md-12" style="margin-top:180px;">
						<div class="hot-deal" style="">
							<h2 class="text-uppercase">With over 1,000 Genies</h2>
							<p>Ready to make your wish come true</p>
							<a class="primary-btn cta-btn" href="<?=base_url("index.php/Wishes/index"); ?>">POST A WISH NOW!</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		

		<!-- LATEST TOP 3 WISHES -->
		<div class="section">
			<div class="container" style="background:#fff6c4; padding:25px;">
				<div class="col-md-12">
					<div class="section-title">
						<h3 class="title">Latest Wishes </h3>
						<a class="primary-btn cta-btn pull-right" href="<?=base_url("index.php/Wishes/index"); ?>">More Wishes</a>
					</div>
				</div>
				<div class="row" id = "latestWish">
					<!-- Append Here -->
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
								<div id="tab1" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-1" id = "featuredGenies">

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
							<a class="primary-btn cta-btn pull-right" href="<?=base_url("index.php/Products/index"); ?>">More Products</a>
						</div>
					</div>

					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2" id = "featuredProducts">											

									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		
		<!-- FOOTER -->
		<?=$footer?>
		
		<?=$js?>





	<!-- <script>
		$( document ).ready(function() {
			$(window).on('load',function(){
				$('#modalEditProduct').modal("show");
				return false;
			});
		});
	</script> -->


	</body>
</html>
