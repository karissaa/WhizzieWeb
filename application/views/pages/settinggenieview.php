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
							<li class="active"> Profile (Genie) </li>
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
			<div class="container" style="text-align:center;">
				<div class="col-sm-1  pull-right" style="background: grey; border-radius: 20px; text-align:center; padding: 20px;margin: 5px;">
                    <a href="<?=base_url("index.php/ProfileGenie/index")?>"><b>CANCEL</b></a>
                </div>
				<div class="col-sm-2  pull-right" style="background: #523163; border-radius: 20px; text-align:center; padding: 20px;margin: 5px; ">
                    <a onclick = "saveChanges()"><b style="color:white;">SAVE CHANGES</b></a>
                </div>
            </div>

			<div id = "imageBackdrop" class="container container-upload image-back" style="overflow: auto; float: none; text-align:center; ">
				<div style="background: rgba(0, 0, 0, 0.75); padding: 20px; width: 250px; border-radius: 20px; margin-left: auto; margin-right: auto; ">
					<img id = "imageProfile" src="" alt="" style="border-radius: 75px; object-fit: cover; width: 150px; height: 150px;"/>
					<h3 style="padding-top: 20px; color: white;" id = "genieName">  </h3>
                </div>
                <br>
                <div>
                    <label for="profilePictureInput"><a class="cta-btn primary-btn" style="background: #523163;margin: 5px;"><b>Change Profile Picture</b></a><br></label>
					<input onchange = "previewImageProfile(this)" type="file" class="hidden form-control" size = "20" id = "profilePictureInput" name = "profilePictureInput">

					<label for="backdropPictureInput"><a class="cta-btn primary-btn" style="background: #523163;margin: 5px;"><b>Change Background</b></a></label>
					<input onchange = "previewImageBackdrop(this)" type="file" class="hidden form-control" size = "20" id = "backdropPictureInput" name = "backdropPictureInput">
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
                                <input type="text" class="form-control" id="storeName" placeholder="Enter Store's Name">
                            </div>
                        </div>
                    </form>
                </div>
			</div>
			<!-- / Ganti Name -->
			
			<!-- Ganti Pssword -->
			<div class="container container-upload" style="background: #523163; overflow: auto; float: none; text-align:center; margin-bottom: 5px;">
				<div class="center-title">
					<a onclick = "resetPassword()"><b style="color:white;">Change Password</b></a>
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

					<!-- Untuk Tambah Alamat -->
					<div class="row" style="border-radius: 25px; padding: 20px;">
						<button class="btn btn-info" style="border-radius: 25px; display: block; padding:20px; width: 100%;"><b>Tambah Alamat<b></button>
					</div>
					<!-- /Untuk Tambah Alamat -->

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
									<label for="">Address Name: </label>
									<input type="text" class="form-control" id="newAddressName">
									<input type = "hidden" id = "oldAddressName">
								</div>
								<div class="form-group">
									<label for="">City Name: </label>
									<input type="text" class="form-control" id="newAddressCity">
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
									<input type="number" class="form-control" id="newAddressPostalCode">
								</div>
								<div class="form-group">
									<label for="">Province Name: </label>
									<input type="text" class="form-control" id="newAddressProvinceName">
								</div>
								<div class="form-group">
									<label for="">Receiver Name: </label>
									<input type="text" class="form-control" id="newAddressReceiverName">
								</div>
								<div class="form-group">
									<label for=""> Is Store Address </label>
									<input type="checkbox" class="form-control" id="isStoreAddress">
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-submit" onclick = "submitAddress()">Save</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!-- / Modal Edit Address -->

			</div>
			<!-- Ganti Alamat -->
		</div>

			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<?=$js?>
		
		<!-- FOOTER -->
		<?=$footer?>
		<script>
			function showModal(){
				$('#modalAddress').modal("show")
			}
		</script>
	</body>
</html>
