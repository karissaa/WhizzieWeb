<?php
    foreach($data as $row){ 
        
    /*
        Note : 
            1. Asumsi data yang dipassing adalah $data dan dijadikan $row untuk looping
            2. Ada banyak comment yang diakhiri "Original Code", comment tersebut adalah code yang dirubah
                \-> Kenapa dicomment? Kalau ada kesalahan bisa balikkin tampilannya untuk sementara
                    \-> Mau dihapus boleh, tapi biarin dulu untuk sekarang.


        Variable :
            1. $row["productName"] : Sesuai dengan namanya, menampung nama barang yang ingin ditampilkan
            2. $row["productPrice"] : Variabel yang menampung harga barang yang ingin ditampilkan

    */
        
        
?>
    <div class="col-md-4 col-xs-6">
		<div class="product">
			<div class="product-img">
                <!-- <img src="./img/product01.png" alt=""> Original Code -->
                <img src="<?php echo $row['posterPath']; ?>" alt="">
			</div>
			<div class="product-body">
				<p class="product-category">Category</p>
                <!-- <h3 class="product-name"><a href="#">product name goes here</a></h3> Original Code -->
                <h3 class="product-name"><a href="#"><?php echo $row["productName"] ;?></a></h3> 
                <!-- <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4> Original Code -->
                <h4 class="product-price"><?php echo $row['productPrice']; ?></h4>
				<div class="product-rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				<div class="product-btns">
					<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
					<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
					<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
				</div>
			</div>
			<div class="add-to-cart">
				<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
			</div>
		</div>
	</div>
<?php
    }
?>