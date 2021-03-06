<?php 
use yii\helpers\Url;
?>

<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
                <div class="productinfo text-center">
                    <img src="<?= Url::to('@web/admin/uploads/') ?><?= $model->image ?>" alt="<?= $model->name ?>" />
                    <h2><?= $model->amount ?></h2>
                    <p><?= $model->name ?><br><?= $model->description ?></p>
                    <!-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
                    <form action="<?= Url::to(['/site/cart'])?>" method="POST">
                    	<input name="pid" type="text" value="<?= $model->id ?>"><button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart">Add to cart</i></button>
                    </form>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2><?= $model->amount ?></h2>
                        <p><?= $model->name ?><br><?= $model->description ?></p>
                        <!-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
                        <form action="<?= Url::to(['/site/cart'])?>" method="POST">
	                    	<input name="pid" type="text" value="<?= $model->id ?>"><button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart">Add to cart</i></button>
	                    </form>
                    </div>
                </div>
                <img src="images/home/new.png" class="new" alt="">
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified">
                <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
            </ul>
        </div>
    </div>
</div>