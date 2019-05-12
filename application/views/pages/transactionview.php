<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Whizzie | Transaction</title>

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
			<!-- container -->
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
						<h3 class="breadcrumb-header">Transactions</h3>
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
		.center-title {
			display: flex;
  		justify-content: center;
		}
		</style>

		<!-- SECTION -->
		<div class="section">
			<!-- container -->

			<!-- Note: Button yg di dalem bakal invisible jika transaksi belum dibayar. -->

			<div class="container container-upload">
				<div class="row" style="background-color: grey; border-radius: 25px; background: #ccced1; padding: 20px; overflow: auto; float: none;">
					<div class="col-sm-2">
						<div style="text-align: center;">
							<div class="row" >
									<img src="../../assets/img/009.jpg" alt="" style="object-fit: cover; width: 50px; height: 50px;"/>
									<img src="../../assets/img/010.jpg" alt="" style="object-fit: cover; width: 50px; height: 50px;"/>
							</div>
							<div class="row">
									<img src="../../assets/img/001.jpg" alt="" style="object-fit: cover; width: 50px; height: 50px;"/>
									<img src="../../assets/img/001.jpg" alt="" style="object-fit: cover; width: 50px; height: 50px;"/>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div>
							<p>ID Transaction : JKT09232019</p>
							<h3>Total Rp 531.500,-</h3>
							<p>IKEA Indonesia</p>
							<p>MUTOA Woodenwatch</p>
						</div>
					</div>
					<div class="col-sm-2" style="text-align:center; vertical-align:middle;">
						<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo">Detail</button>
					</div>
				</div>

				<div id="demo" class="collapse">
					<!-- Untuk per toko -->
					<div class="row" style="background-color: white; border-radius: 25px; padding: 20px;">
						<!-- Untuk Judul Toko -->
						<div class="row">
							<div class="col-sm-1" style="text-align: right;" >	
								<img src="../../assets/img/ikea.jpg" alt="" style="border-radius: 25px; object-fit: cover; width: 50px; height: 50px;"/>
							</div>
							<div class="col-sm-9">
								<h4>IKEA Indonesia</h4>
								<p>Total Rp 182.900,-</p>
								<p>No. Resi: BDG393092</p>
							</div>
							<div class="col-sm-2">
								<button type="button" class="btn btn-danger">Sudah Bayar</button>
							</div>
						</div>

						<br>

						<!-- /Untuk Judul Toko -->
						<!-- Untuk barang dalam toko -->
						<div class="row">
							<div class="col-sm-2">
								<div style="text-align: right;">
									<img src="../../assets/img/009.jpg" alt="" style="object-fit: cover; width: 100px; height: 100px;" />
								</div>
							</div>
							<div class="col-sm-8">
								<h4>KULLA Dining Table</h4>
								<p>Qty: 1</p>
								<p>Total Rp 80.600,-</p>
							</div>
						</div>

						<br>

						<div class="row">
							<div class="col-sm-2">
								<div style="text-align: right;">
									<img src="../../assets/img/010.jpg" alt="" style="object-fit: cover; width: 100px; height: 100px;" />
								</div>
							</div>
							<div class="col-sm-8">
								<h4>POHUNI Dining Chair</h4>
								<p>Qty: 3</p>
								<p>Total Rp 102.300,-</p>
							</div>
						</div>
						<!-- /Untuk barang dalam toko -->
						</div>
					<!-- / Untuk per toko -->

					<br>

					<!-- Untuk per toko 2 -->
					<div class="row" style="background-color: white; border-radius: 25px; padding: 20px;">
						<!-- Untuk Judul Toko -->
						<div class="row">
							<div class="col-sm-1" style="text-align: right;" >	
								<img src="../../assets/img/mettoe.jpg" alt="" style="border-radius: 25px; object-fit: cover; width: 50px; height: 50px;"/>
							</div>
							<div class="col-sm-9">
								<h4>Mettoe Wooden Watch</h4>
								<p>Total Rp 348.600,-</p>
								<p>No. Resi: BDG3930939</p>
							</div>
							<div class="col-sm-2">
								<button type="button" class="btn btn-danger">Sudah Bayar</button>
							</div>
						</div>

						<br>

						<!-- /Untuk Judul Toko -->
						<!-- Untuk barang dalam toko -->
						<div class="row">
							<div class="col-sm-2">
								<div style="text-align: right;">
									<img src="../../assets/img/001.jpg" alt="" style="object-fit: cover; width: 100px; height: 100px;" />
								</div>
							</div>
							<div class="col-sm-8">
								<h4>"Terry" Mahogany Watch</h4>
								<p>Qty: 1</p>
								<p>Total Rp 348.600,-</p>
							</div>
						</div>
						<!-- /Untuk barang dalam toko -->
					<!-- / Untuk per toko 2 -->


					</div>
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
