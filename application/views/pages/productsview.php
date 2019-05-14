<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title> Whizzie | Products</title>

		<?=$css?>
		<?=$firebase?>
		<?=$js?>		
		<?=$js_classes?>
		<?=$js_functions?>
    </head>
	<body>
		<?=$header?>

		<div id="hot-deal" class="section"style="height:100px; margin: 0; background:#51b4b6; background-size: cover;"></div>
		
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section" style="margin:0;" >
			<!-- container -->
			<div class="container" >
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Products</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">All Categories</li>
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
				background: #fff6c4;
				padding: 20px; 
			}
			.center-title {
				display: flex;
				justify-content: center;
			}
		</style>

		<br><br>
		<!-- 
			<div class="container container-upload">
					<button>Products</button>
					<button>Products</button>
			</div>
			
			<br><br>
		-->

		<!-- TODO: Cuma Muncul kalo Genie's Mode -->
		<div class="container container-upload">
				<div class="center-title">
					<h2>Upload Your Product</h2>
				</div>
				<div class="center-title">
					<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Click Here!</button>
				</div>
			<div id="demo" class="collapse">
				<br>
				<form class="form-horizontal">
					<div class="form-group">
						<label class="control-label col-sm-2" for="title">Title</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="title" placeholder="Enter title">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="descWish">Description</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="descWish" placeholder="Enter description">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="dropdown">
								<select class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">	

								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<input type="file" name="img[]" class="file">
							<div class="input-group col-xs-12">
								<span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
								<input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
								<span class="input-group-btn">
									<button class="browse btn btn-info input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
								</span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button class="btn btn-info">Upload Wish</button>
						</div>
					</div>
				</form>
			</div>
		</div>

		<script>
			$(document).on('click', '.browse', function(){
				var file = $(this).parent().parent().parent().find('.file');
				file.trigger('click');
			});
			$(document).on('change', '.file', function(){
				$(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
			});
		</script>

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categories</h3>
							<div class="checkbox-filter" id = "categoryFilter">

							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Price</h3>
							<div class="price-filter">
								<div id="price-slider"></div>
								<div class="input-number price-min">
									<input id="price-min" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input id="price-max" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Sort By:
									<select class="input-select">
										<option value="0">Popular</option>
										<option value="1">Position</option>
									</select>
								</label>

								<label>
									Show:
									<select class="input-select">
										<option value="0">20</option>
										<option value="1">50</option>
									</select>
								</label>
							</div>
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								<li><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row" id = "productSection">
							
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<?=$footer?>
	</body>
</html>
