<?php foreach($categories as $category):?>
    <div class="col-md-4 col-xs-6">
        <div class="shop">
            <div class="shop-img">
                <img src="<?=$category['imagePath']?>" alt="">
            </div>
            <div class="shop-body">
                <h3> <?=$category['categoryName']?> </h3>
                <a href="#" class="cta-btn"> Shop now <i class="fa fa-arrow-circle-right"></i> </a>
            </div>
        </div>
    </div>
<?php endforeach;?>