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

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Transactions</h3>
						<ul class="breadcrumb-tree">
							<li><a href="<?php echo base_url(); ?>">Home</a></li>
							<li class="active">Transactions</li>
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
			background: #93d5d6;
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
				<div class="row" style="border-radius: 25px;  padding: 20px; overflow: auto; float: none;">
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
						<button style="background-color:orange;" type="button" class="btn" data-toggle="collapse" data-target="#demo">Detail</button>
					</div>
				</div>

				<div id="demo" class="collapse">
					<!-- Untuk per toko -->
					<div class="row" style="background-color: white; border-radius: 25px; padding: 20px; margin:1px;">
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
								<button style="background-color:orange;" type="button" class="btn" onclick="showModalTransaction()" id="modalTransactionShow">Sudah Bayar</button>
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


					<!-- Modal Transaksi -->
					<div class="modal" role="dialog" id="modalTransaction">
						<div class="modal-dialog">
							<div class="modal-content" role="document">
								<div class="modal-header">
									<h5 class="modal-title">Transaction</h5> 
								</div>
								<div class="modal-body">
									<div class="form-group">
										<label for="">Input Nomor Resi: </label>
										<input type="text" class="form-control" value="" id="nomorResi">
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-submit">Save</button>
									<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /Modal Transaksi -->

					<!-- Modal Berhasil -->
					<div class="modal" role="dialog" id="modalTransactionSuccess">
						<div class="modal-dialog">
							<div class="modal-content" role="document">
								<div class="modal-header">
									<h5 class="modal-title">Transaction Success</h5> 
								</div>
								<div class="modal-body">
									<div class="form-group">
										<label for="">Transaksi anda Berhasil! Barang Akan segera dikirim.</label>
										<label for="" id="transactionSuccessID">ID transaksi : ABC123</label>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-submit">Save</button>
									<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /Modal Berhasil -->

					<!-- Modal Checkout -->
					<div class="modal" role="dialog" id="modalCheckoutSuccess">
						<div class="modal-dialog">
							<div class="modal-content" role="document">
								<div class="modal-header">
									<h5 class="modal-title">Checkout</h5> 
								</div>
								<div class="modal-body">
									<div class="form-group">
										<label for="">Checkout Berhasil Dengan:  </label>
										<label for="checkoutTransactionID" id="checkoutTransactionID">Transaction ID: ABC123</label>
										<label for="" id="checkoutTotalPrice">Total Price : Rp. 180.000</label>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-submit">Save</button>
									<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /Modal Checkout -->

					<!-- Modal Transaction Finished -->
					<div class="modal" role="dialog" id="modalTransactionFinished">
						<div class="modal-dialog">
							<div class="modal-content" role="document">
								<div class="modal-header">
									<h5 class="modal-title">Transaction Finish</h5> 
								</div>
								<div class="modal-body"></div>
									<div class="form-group">
										<label for="">Transaksi anda sudah Selesai!</label>
										<label for="checkoutTransactionID" id="checkoutTransactionID">Transaction ID: ABC123</label>
										<label for="" id="checkoutTotalPrice">Total Price : Rp. 180.000</label>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-submit">Save</button>
									<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /Modal Transaction Finished -->

					<br>

					<!-- Untuk per toko 2 -->
					<div class="row" style="background-color: white; border-radius: 25px; padding: 20px; margin:1px;">
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
								<button style="background-color:orange;" type="button" class="btn">Sudah Bayar</button>
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

		<script>
			function showModalTransaction(){
				$('#modalTransactionFinished').modal("show");
			}
		</script>
	</body>
</html>
