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
		<div id="breadcrumb" class="section"  style="margin:0px;">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Setting Profile Genie</h3>
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
				<div class="col-sm-1  pull-right" style="background: grey; border-radius: 20px; text-align:center; padding: 20px;margin: 5px;">
                    <a href="<?php echo base_url("index.php/ProfileGenie/index"); ?>"><b>CANCEL</b></a>
                </div>
				<div class="col-sm-2  pull-right" style="background: #523163; border-radius: 20px; text-align:center; padding: 20px;margin: 5px; ">
                    <a href="#"><b style="color:white;">SAVE CHANGES</b></a>
                </div>
                
                
            </div>

			<div class="container container-upload image-back" style="overflow: auto; float: none; text-align:center; ">
				<div style="background: rgba(0, 0, 0, 0.75); padding: 20px; width: 250px; border-radius: 20px; margin-left: auto; margin-right: auto; ">
					<img src="../../assets/img/gigi.jpg" alt="" style="border-radius: 75px; object-fit: cover; width: 150px; height: 150px;"/>
					<h3 style="padding-top: 20px; color: white;">Felicia Karissa</h3>
                </div>
                <br>
                <div>
                    <a class="cta-btn primary-btn" style="background: #523163;margin: 5px;"><b>Change Profile Picture</b></a><br>
                    
                    <a class="cta-btn primary-btn" style="background: #523163;margin: 5px;"><b>Change Background</b></a>
				</div>
			</div>

            <div class="center-title" style="margin: 20px;">
                <h1>SETTINGS</h1>
			</div>

			<!-- Ganti Name -->
            <div class="container container-upload" style="background: #523163; overflow: auto; float: none; text-align:center; margin-bottom: 5px;">
				<div class="center-title">
					<a data-toggle="collapse" data-target="#fullname"><b style="color:white;">Change Store's Name</b></a>
				</div>
                <div id="fullname" class="collapse">
                    <br>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="fullname"style="color:white;" >Store's Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="fullname" placeholder="Enter Store's Name">
                            </div>
                        </div>
                    </form>
                </div>
			</div>
			<!-- / Ganti Name -->
			
			<!-- Ganti Pssword -->
			<div class="container container-upload" style="background: #523163; overflow: auto; float: none; text-align:center; margin-bottom: 5px;">
				<div class="center-title">
					<a data-toggle="collapse" data-target="#changepassword"><b style="color:white;">Change Password</b></a>
				</div>
                <div id="changepassword" class="collapse">
                    <br>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title" style="color:white;">New Password</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" placeholder="Enter Password">
                            </div>
                        </div>
                    </form>
                </div>
			</div>
			<!-- / Ganti Pssword -->


			<!-- Ganti Alamat -->
            <div class="container container-upload" style="background: #523163; overflow: auto; float: none;margin-bottom: 5px;">
				<div class="center-title">
					<a data-toggle="collapse" data-target="#demoo"><b style="color:white;">Change Address</b></a>
				</div>
                <div id="demoo" class="collapse">
					<br>
					
					<!-- Untuk Alamat -->
					<div class="row" style="background-color: white; border-radius: 25px; padding: 20px;margin:1px;margin-bottom:5px;">
						<div class="row">
							<div class="col-sm-4">
								<h4>Alamat Rumah</h4>
								<p><span><b>Receiver: </b></span><span>Karissa</span></p>
								<p>Jalan Alicante Timur 5 No. 56</p>
								<p>Cluster Alicante Gading Serpong</p>
							</div>
							<div class="col-sm-3">
								<p><b>City</b></p>
								<p>Tangerang</p>
								<p><b>Province</b></p>
								<p>Banten</p>
							</div>
							<div class="col-sm-3">
								<p><b>Postal Code</b></p>
								<p>15334</p>
								<p><b>Phone Number</b></p>
								<p>+62 815 880 888</p>
							</div>
							<div class="col-sm-2">
								<button type="button" class="btn btn-info" id="editUserAddress" onclick = "showModal()">Edit Address</button>
							</div>
						</div>

					</div>
					<!-- /Untuk Alamat -->

					<!-- Untuk Alamat -->
					<div class="row" style="background-color: white; border-radius: 25px; padding: 20px;margin:1px;margin-bottom:5px;">
					
						<div class="row">
							<div class="col-sm-4">
								<h4>Alamat Rumah</h4>
								<p><span><b>Receiver: </b></span><span>Karissa</span></p>
								<p>Jalan Alicante Timur 5 No. 56</p>
								<p>Cluster Alicante Gading Serpong</p>
							</div>
							<div class="col-sm-3">
								<p><b>City</b></p>
								<p>Tangerang</p>
								<p><b>Province</b></p>
								<p>Banten</p>
							</div>
							<div class="col-sm-3">
								<p><b>Postal Code</b></p>
								<p>15334</p>
								<p><b>Phone Number</b></p>
								<p>+62 815 880 888</p>
							</div>
							<div class="col-sm-2">
								<button type="button" class="btn btn-info">Edit Address</button>
							</div>
						</div>
					</div>
					<!-- /Untuk Alamat -->



                </div>

				<!-- Modal Edit Address -->
				<div class="modal" role="dialog" id="modalAddress">
					<div class="modal-dialog">
						<div class="modal-content" role="document">
							<div class="modal-header">
								<h5 class="modal-title">Change Address</h5> 
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label for="">City Name: </label>
									<input type="text" class="form-control" value="" id="newAddressCity">
								</div>
								<div class="form-group">
									<label for="">Detail Address: </label>
									<input type="text" class="form-control" id="newAddressDetail">
								</div>
								<div class="form-group">
									<label for="">Phone Number: </label>
									<input type="text" class="form-control" id="newAddressPhoneNumber">
								</div>
								<div class="form-group">
									<label for="">Postal Code: </label>
									<input type="text" class="form-control" id="newAddressPostalCode">
								</div>
								<div class="form-group">
									<label for="">Province Name: </label>
									<input type="text" class="form-control" id="newAddressProvinceName">
								</div>
								<div class="form-group">
									<label for="">Receiver Name: </label>
									<input type="text" class="form-control" id="newAddressReceiverName">
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-submit">Save</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Ganti Alamat -->


		</div>

			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<?=$js?>
		
		<!-- FOOTER -->
		<?=$footer?>
	</body>
	
	<script>
		function showModal(){
			$('#modalAddress').modal("show")
		}

		// $(document).ready(function(){
        //     $('#editUserAddress').on("click", )
    	// });
	</script>
</html>
