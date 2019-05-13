<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Whizzie | Shopping Cart</title>

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
						<h3 class="breadcrumb-header">Shopping Cart</h3>
						<ul class="breadcrumb-tree">
							<li><a href="<?php echo base_url(); ?>">Home</a></li>
							<li class="active">Shopping Cart</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<?=$cart_css?>

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<div class="card">
					<table class="table table-hover shopping-cart-wrap">
						<thead class="text-muted">
						<tr>
							<th scope="col-2">Check</th>
							<th scope="col-2">Image</th>
							<th scope="col-3">Product</th>
							<th scope="col-2">Quantity</th>
							<th scope="col-2">Price</th>
							<th scope="col-1" class="text-right">Action</th>
						</tr>
						</thead>
						<tbody>
							<tr>
								<td style="text-align:center; vertical-align:middle;">
								</td>
								<td colspan="5"><b>Toko PT Sejahtera</b></td>
							</tr>

							<!-- product -->
							<tr>
								<td style="text-align:center; vertical-align:middle;">
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input" value="">
									</label>
								</div>
								</td>
								<td>
									<div class="image">
										<img src="../../assets/img/item-3.png" alt="" />
									</div>
								</td>
								
								<td>
									<h6 class="title text-truncate">Product name goes here </h6>
									<dl class="param param-inline small">
										<dt>Size: </dt>
										<dd>XXL</dd>
									</dl>
									<dl class="param param-inline small">
										<dt>Color: </dt>
										<dd>Orange color</dd>
									</dl>
								</td>
								
								<td style="width:30px;"> 
									<input type="number" class="form-control" />
								</td>
								<td> 
									<div class="price-wrap"> 
										<var class="price">Rp. 15.000</var> 
										<small class="text-muted">(Rp. 5.000 each)</small> 
									</div> <!-- price-wrap .// -->
								</td>
								<td class="text-right"> 
								<a href="" class="btn btn-danger">Remove</a>
								</td>
							</tr>

							<!-- / product -->

							<!-- product -->
							<tr>
								<td style="text-align:center; vertical-align:middle;">
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input" value="">
									</label>
								</div>
								</td>
								<td>
									<div class="image">
										<img src="../../assets/img/item-3.png" alt="" />
									</div>
								</td>
								
								<td>
									<h6 class="title text-truncate">Product name goes here </h6>
									<dl class="param param-inline small">
										<dt>Size: </dt>
										<dd>XXL</dd>
									</dl>
									<dl class="param param-inline small">
										<dt>Color: </dt>
										<dd>Orange color</dd>
									</dl>
								</td>
								
								<td width="20px"> 
									<input type="number" class="form-control" />
								</td>
								<td> 
									<div class="price-wrap"> 
										<var class="price">Rp. 15.000</var> 
										<small class="text-muted">(Rp. 5.000 each)</small> 
									</div> <!-- price-wrap .// -->
								</td>
								<td class="text-right"> 
								<a href="" class="btn btn-danger">Remove</a>
								</td>
							</tr>

							<!-- / product -->

							<tr>
								<td style="text-align:center; vertical-align:middle;">
								</td>
								<td colspan="5"><b>Toko Sahabat</b></td>
							</tr>

							<!-- product -->
							<tr>
								<td style="text-align:center; vertical-align:middle;">
								<div class="form-check"></div>
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input" value="">
									</label>
								</div>
								</td>
								<td>
									<div class="image">
										<img src="../../assets/img/item-3.png" alt="" />
									</div>
								</td>
								
								<td>
									<h6 class="title text-truncate">Product name goes here </h6>
									<dl class="param param-inline small">
										<dt>Size: </dt>
										<dd>XXL</dd>
									</dl>
									<dl class="param param-inline small">
										<dt>Color: </dt>
										<dd>Orange color</dd>
									</dl>
								</td>
								
								<td style="width:30px;"> 
									<input type="number" class="form-control" />
								</td>
								<td> 
									<div class="price-wrap"> 
										<var class="price">Rp. 15.000</var> 
										<small class="text-muted">(Rp. 5.000 each)</small> 
									</div> <!-- price-wrap .// -->
								</td>
								<td class="text-right"> 
								<a href="" class="btn btn-danger">Remove</a>
								</td>
							</tr>

							<!-- / product -->

							<!-- product -->
							<tr>
								<td style="text-align:center; vertical-align:middle;">
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input" value="">
									</label>
								</div>
								</td>
								<td>
									<div class="image">
										<img src="../../assets/img/item-3.png" alt="" />
									</div>
								</td>
								
								<td>
									<h6 class="title text-truncate">Product name goes here </h6>
									<dl class="param param-inline small">
										<dt>Size: </dt>
										<dd>XXL</dd>
									</dl>
									<dl class="param param-inline small">
										<dt>Color: </dt>
										<dd>Orange color</dd>
									</dl>
								</td>
								
								<td style="width:30px;"> 
									<input type="number" class="form-control" />
								</td>
								<td> 
									<div class="price-wrap"> 
										<var class="price">Rp. 15.000</var> 
										<small class="text-muted">(Rp. 5.000 each)</small> 
									</div> <!-- price-wrap .// -->
								</td>
								<td class="text-right"> 
								<a href="" class="btn btn-danger">Remove</a>
								</td>
							</tr>

							<!-- / product -->


						</tbody>
					</table>
				</div>
				<!-- / Card -->

				<!-- Check Out Bar -->
				<div class="row" style="background-color: grey; border-radius: 25px; background: #ccced1; padding: 20px; overflow: auto; float: none;">
					<div class="col-sm-2" >
						<div class="form-check" style="text-align:center; vertical-align:middle;">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="">
							</label>
						</div>
					</div>
					<div class="col-sm-8">
						<div><h3>Total Rp. 182.900,-</h3>12 Items</div>
					</div>
					<div class="col-sm-2" style="text-align:center; vertical-align:middle;">
						<button class="btn btn-info">Check Out</button>
					</div>
				</div>
				<!-- / Check Out Bar -->

			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<?=$js?>
		
		<!-- FOOTER -->
		<?=$footer?>
	</body>
</html>
