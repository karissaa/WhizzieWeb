<?php foreach($widgets as $widget):?>
    <div class="product-widget">
        <div class="product-img">
            <img src="<?=$widget['pictureProduct']?>" alt="">
        </div>
        <div class="product-body">
            <h3 class="product-name"> <a href="#"> <?=$widget['nameProduct']?> </a> </h3>
            <h4 class="product-price"> <?=$widget['massProduct']?> </h4>
        </div>
        <button class="delete"> <i class="fa fa-close"> </i> </button>
    </div>
<?php endforeach;?>