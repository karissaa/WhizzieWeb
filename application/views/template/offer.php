<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>

            <!-- Modal Edit Wish -->
            <div class="modal" role="dialog" id="modalEditWish">
                <div class="modal-dialog">
                    <div class="modal-content" role="document">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" style="text-align:center;">EDIT WISH</h4> 
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Title Wish: </label>
                                <input type="text" class="form-control" id="newAddressName">
                            </div>
                            <div class="form-group">
                                <label for="">Description Wish: </label>
                                <input type="text" class="form-control" id="newAddressCity">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" style="display: block; width: 100%;">SAVE</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Modal Edit Wish -->

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
                                <input type="text" class="form-control" id="newAddressName">
                            </div>
                            <div class="form-group">
                                <label for="">Description Product: </label>
                                <input type="text" class="form-control" id="newAddressCity">
                            </div>
                            <div class="form-group">
                                <label for="">Price Product: </label>
                                <input type="number" class="form-control" id="newAddressCity">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" style="display: block; width: 100%;">SAVE</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Modal Edit Product -->


        	<!-- Modal Transaksi -->
					<div class="modal" role="dialog" id="modalTransaction">
						<div class="modal-dialog">
							<div class="modal-content" role="document">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" style="text-align:center;">TRANSACTION</h4> 
                                </div>
								<div class="modal-body">
									<div class="form-group">
										<label for="">Input Nomor Resi: </label>
										<input type="text" class="form-control" value="" id="nomorResi">
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-info" style="display: block; width: 100%;">SAVE</button>
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
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" style="text-align:center;">TRANSACTION SUCCESS</h4> 
                                </div>
								<div class="modal-body">
									<div class="form-group">
										<label for="">Transaksi anda Berhasil! Barang Akan segera dikirim.</label>
										<label for="" id="transactionSuccessID">ID transaksi : ABC123</label>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-info" style="display: block; width: 100%;">OK</button>
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
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" style="text-align:center;">CHECK OUT</h4> 
                                </div>
								<div class="modal-body">
									<div class="form-group">
										<label for="">Checkout Berhasil Dengan:  </label>
										<label for="checkoutTransactionID" id="checkoutTransactionID">Transaction ID: ABC123</label>
										<label for="" id="checkoutTotalPrice">Total Price : Rp. 180.000</label>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-info" style="display: block; width: 100%;">OK</button>
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
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" style="text-align:center;">TRANSACTION FINISH</h4> 
                                </div>
								<div class="modal-body">
									<div class="form-group">
										<label for="">Transaksi anda sudah Selesai!</label>
										<label for="checkoutTransactionID" id="checkoutTransactionID">Transaction ID: ABC123</label>
										<label for="" id="checkoutTotalPrice">Total Price : Rp. 180.000</label>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-info" style="display: block; width: 100%;">OK</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /Modal Transaction Finished -->
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
                    
                        <!-- product card -->
                        <div class="col-md-4 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="./assets/img/001.jpg" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name"><a href="#">Balayage Shoes</a></h3>
                                    <h4 class="product-price">Rp 78.000</h4>
                                    <p><i class="fa fa-map-marker"></i>&nbsp&nbspJakarta Timur</p>
                                    <div class="row">
                                        <button class="btn btn-info" value=""><b>OFFER</b></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / product card -->

                        <!-- product card -->
                        <div class="col-md-4 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="./assets/img/001.jpg" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name"><a href="#">Balayage Shoes</a></h3>
                                    <h4 class="product-price">Rp 78.000</h4>
                                    <p><i class="fa fa-map-marker"></i>&nbsp&nbspJakarta Timur</p>
                                    <div class="row">
                                        <button class="btn btn-info" value=""><b>OFFER</b></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / product card -->


                        <!-- product card -->
                        <div class="col-md-4 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="./assets/img/001.jpg" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name"><a href="#">Balayage Shoes</a></h3>
                                    <h4 class="product-price">Rp 78.000</h4>
                                    <p><i class="fa fa-map-marker"></i>&nbsp&nbspJakarta Timur</p>
                                    <div class="row">
                                        <button class="btn btn-info" value=""><b>OFFER</b></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / product card -->

                        <!-- product card -->
                        <div class="col-md-4 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="./assets/img/001.jpg" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name"><a href="#">Balayage Shoes</a></h3>
                                    <h4 class="product-price">Rp 78.000</h4>
                                    <p><i class="fa fa-map-marker"></i>&nbsp&nbspJakarta Timur</p>
                                    <div class="row">
                                        <button class="btn btn-info" value=""><b>OFFER</b></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / product card -->

                        <!-- product card -->
                        <div class="col-md-4 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="./assets/img/001.jpg" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name"><a href="#">Balayage Shoes</a></h3>
                                    <h4 class="product-price">Rp 78.000</h4>
                                    <p><i class="fa fa-map-marker"></i>&nbsp&nbspJakarta Timur</p>
                                    <div class="row">
                                        <button class="btn btn-info" value=""><b>OFFER</b></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / product card -->


                        <!-- product card -->
                        <div class="col-md-4 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="./assets/img/001.jpg" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name"><a href="#">Balayage Shoes</a></h3>
                                    <h4 class="product-price">Rp 78.000</h4>
                                    <p><i class="fa fa-map-marker"></i>&nbsp&nbspJakarta Timur</p>
                                    <div class="row">
                                        <button class="btn btn-info" value=""><b>OFFER</b></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / product card -->

                    
                    </div>

                    <div class="modal-footer">
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>