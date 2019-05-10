<?php foreach($items as $item):?>
    <div class="col-md-3 col-xs-6">
        <div class="product">
            <div class="product-img">
                <img src="<?=$item['pictureProduct']?>" alt="">
            </div>

            <div class="product-body">
                <!-- Kategori dari Produk -->
                <p class="product-category"> <?=$item['category']?> </p>

                <!-- Nama dari Produk -->
                <h3 class="product-name">
                    <a href="#"> <?=$item['nameProduct']?> </a>
                </h3>

                <!-- Genie dari product -->
                <h4 class="product-price"> <?=$users[$item['uidUpProduct']]['name']?> </h4>

                <!-- Akan meng-echo sebanyak jumlah bintang -->
                <div class="product-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>

                <div class="product-btns">
                    <button class="add-to-wishlist">
                        <i class="fa fa-heart-o"></i>
                        <span class="tooltipp">add to wishlist</span>
                    </button>
                    <button class="add-to-compare">
                        <i class="fa fa-exchange"></i>
                        <span class="tooltipp">add to compare</span>
                    </button>
                    <button class="quick-view">
                        <i class="fa fa-eye"></i>
                        <span class="tooltipp">quick view</span>
                    </button>
                </div>
            </div>

            <div class="add-to-cart">
                <button class="add-to-cart-btn">
                    <i class="fa fa-shopping-cart"></i> add to cart
                </button>
            </div>
        </div>
    </div>
<?php endforeach;?>