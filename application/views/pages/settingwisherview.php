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

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Profile</h3>
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
            <div class="container" style="text-align:center;">
                <div class="col-sm-6" style="background: grey; border-radius: 20px; text-align:center; padding: 20px; ">
                    <a href="#"><b>ABORT CHANGES</b></a>
                </div>
                <div class="col-sm-6" style="background: orange; border-radius: 20px; text-align:center; padding: 20px; ">
                    <a href="#"><b>SAVE CHANGES</b></a>
                </div>
            </div>

			<div class="container container-upload image-back" style="overflow: auto; float: none; text-align:center;">
				<div style="background: rgba(0, 0, 0, 0.75); padding: 20px; width: 250px; border-radius: 20px; margin-left: auto; margin-right: auto; ">
					<img src="../../assets/img/gigi.jpg" alt="" style="border-radius: 75px; object-fit: cover; width: 150px; height: 150px;"/>
					<h3 style="padding-top: 20px; color: white;">Felicia Karissa</h3>
                </div>
                <br>
                <div>
                    <a class="cta-btn primary-btn" style="background: orange;margin: 5px;"><b>Change Profile Picture</b></a><br>
                    
                    <a class="cta-btn primary-btn" style="background: orange;margin: 5px;"><b>Change Background</b></a>
				</div>
			</div>

            <div class="center-title" style="margin: 20px;">
                <h1>SETTINGS</h1>
			</div>

            <div class="container container-upload" style="background: orange; overflow: auto; float: none; text-align:center; margin-bottom: 5px;">
				<div class="center-title">
					<a data-toggle="collapse" data-target="#demo"><b>Change Full Name</b></a>
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
                    </form>
                </div>
            </div>

            <div class="container container-upload" style="background: orange; overflow: auto; float: none;margin-bottom: 5px;">
				<div class="center-title">
					<a data-toggle="collapse" data-target="#demoo"><b>Change Address</b></a>
				</div>
                <div id="demoo" class="collapse">
                <br>
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
